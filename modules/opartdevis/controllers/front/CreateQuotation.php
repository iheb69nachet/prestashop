<?php
/**
 * Prestashop module : OpartDevis
 *
 * @author Olivier CLEMENCE <manit4c@gmail.com>
 * @copyright  Op'art
 * @license Tous droits réservés / Le droit d'auteur s'applique (All rights reserved / French copyright law applies)
 */

require_once _PS_MODULE_DIR_.'opartdevis/models/OpartQuotation.php';

class OpartDevisCreateQuotationModuleFrontController extends ModuleFrontController
{
    private $isSeven;

    public function init()
    {
        $this->isSeven = Tools::version_compare(_PS_VERSION_, '1.7', '>=') ? true : false;

        $this->display_column_left = false;
        $this->display_column_right = false;

        parent::init();
    }

    public function setMedia($isNewTheme = false)
    {
        parent::setMedia();

        Media::addJsDef(array(
            'opart_ajaxUrl' => $this->context->link->getModuleLink('opartdevis', 'CreateQuotation'),
            'priceDisplay' => Product::getTaxCalculationMethod((int) $this->context->cookie->id_customer),
            'priceDisplayPrecision' => _PS_PRICE_DISPLAY_PRECISION_,
        ));

        if ($this->isSeven) {
            $this->registerStylesheet(
                'opartdevis-style',
                'modules/'.$this->module->name.'/views/css/opartdevis.css'
            );
            $this->registerJavascript(
                'opartdevis-front',
                'modules/'.$this->module->name.'/views/js/front.js'
            );
            $this->registerJavascript(
                'opartdevis-tools',
                'js/tools.js'
            );
        } else {
            $this->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/opartdevis.css');
            $this->addJS(_MODULE_DIR_.$this->module->name.'/views/js/front.js');
        }
    }

    private function addMissingSmartyVar()
    {
        if ((isset($this->ssl) && $this->ssl && Configuration::get('PS_SSL_ENABLED'))
            || Tools::usingSecureMode()
        ) {
            $useSSL = true;
        } else {
            $useSSL = false;
        }

        $protocol_content = ($useSSL) ? 'https://' : 'http://';

        $this->context->smarty->assign(array(
            'priceDisplay' => Product::getTaxCalculationMethod((int) $this->context->cookie->id_customer),
            'base_dir' => _PS_BASE_URL_.__PS_BASE_URI__,
            'ps_base_url' => _PS_BASE_URL_SSL_,
            'content_dir' => $protocol_content.Tools::getHttpHost().__PS_BASE_URI__,
        ));
    }

    public function postProcess()
    {
        if (Tools::isSubmit('submitQuotation')) {
            $customer = $this->context->customer;

            $cart = $this->context->cart;

            $cart->id_address_delivery = (int)Tools::getValue('delivery_address');
            $cart->id_address_invoice = (int)Tools::getValue('invoice_address');
            $cart->id_carrier = Tools::getValue('opart_devis_carrier_input');

            $cart->update();

            //create specific price
            $listProd = $cart->getProducts(true);

            foreach ($listProd as &$prod) {
                //if specific price already exist for this cart we don't create a new one
                if (!OpartQuotation::specificPriceExists((int)$cart->id, $prod['id_product'], $prod['id_product_attribute'], $cart->id_shop)) {
                    //si pas de prix specifique indique alors on enregistre le prix du produit en tant que prix specifique
                    $specific_price_output = null;
                    $price = Product::getPriceStatic(
                        $prod['id_product'],
                        false,
                        $prod['id_product_attribute'],
                        6,
                        null,
                        false,
                        true,
                        (int)$prod['cart_quantity'],
                        false,
                        $customer->id,
                        0,
                        $cart->id_address_delivery,
                        $specific_price_output,
                        false,
                        false,
                        $this->context,
                        true
                    );

                    $prod['specific_qty'] = $prod['cart_quantity'];
                    $prod['specific_price'] = $price;

                    OpartQuotation::addSpecificPrice($prod, $cart, $customer->id);
                }
            }


            $quotation = OpartQuotation::createQuotation(
                $cart,
                $customer,
                Tools::getValue('quotationId'),
                Tools::getValue('quotation_name'),
                Tools::getValue('message_visible'),
                Tools::getValue('message_not_visible'),
                false
            );

            //reset current panier customer
            $this->context->cookie->__unset('id_cart', $cart->id);

            Tools::redirect(
                (new Link())->getModuleLink(
                    'opartdevis',
                    'CreateQuotation',
                    array('confirm' => $quotation->id)
                )
            );
        }
    }

    public function initContent()
    {
        parent::initContent();

        $customer = $this->context->customer;
        $cart = $this->context->cart;

        // if not logged in
        if (!Validate::isLoadedObject($customer)) {
            $this->context->smarty->assign(array(
                'OPARTDEVIS_SIMPLE_FORM' => Configuration::get('OPARTDEVIS_SIMPLE_FORM')
            ));

            $this->context->cookie->__set('opartdevis_requested_' . $this->context->cookie->id_cart, '1');

            if ($this->isSeven) {
                return $this->setTemplate('module:opartdevis/views/templates/front/ps17/pleaselog.tpl');
            }

            return $this->setTemplate('pleaselog.tpl');
        }

        $this->addMissingSmartyVar();

        if (Tools::getValue('create')) {
            $this->processCreateQuotation($customer, $cart);
        }

        if (Tools::getValue('confirm')) {
            $this->processConfirmation();
        }
    }

    public function displayAjaxLoadCarrierList()
    {
        die(Tools::jsonEncode(
            (new OpartQuotation())->getCarriers()
        ));
    }

    public function displayAjaxUpdateCarrier()
    {
        $cart = (new OpartQuotation())->updateCarrier();

        $summary = $cart->getSummaryDetails(null, true);

        $summary['total_price'] = Tools::displayPrice($summary['total_price']);
        $summary['total_price_without_tax'] = Tools::displayPrice($summary['total_price_without_tax']);
        $summary['total_tax'] = Tools::displayPrice($summary['total_tax']);
        $summary['total_discounts'] = Tools::displayPrice($summary['total_discounts']);
        $summary['total_shipping_tax_exc'] = Tools::displayPrice($summary['total_shipping_tax_exc']);
        $summary['total_shipping'] = Tools::displayPrice($summary['total_shipping']);

        die(Tools::jsonEncode($summary));
    }

    private function processCreateQuotation(Customer $customer, Cart $cart)
    {
        $show_form = true;

        //get customers addresses
        if (!Validate::isLoadedObject($customer)) {
            $addresses = array();
        } else {
            $addresses = $customer->getAddresses($this->context->language->id);
        }

        if (count($addresses) == 0) {
            $this->errors[] = Tools::displayError($this->module->l('You have to save at least one address, before creating your quotation', 'createquotation'));

            $this->context->cookie->__set('opartdevis_no_address', '1');

            if ($this->isSeven) {
                $this->redirectWithNotifications('address');
            }
        }

        if ($cart->nbProducts() == 0) {
//             if (Configuration::get('OPARTDEVIS_SIMPLE_FORM')) {
//                 Tools::redirect(
//                     (new Link())->getModuleLink(
//                         'opartdevis',
//                         'SimpleQuotation',
//                         array()
//                     )
//                 );
//             }

            $show_form = false;
            $this->context->smarty->assign('isCartEmpty', true);
        }

        $from = (Tools::getIsset('from')) ? Tools::getValue('from') : '';

        if ($this->errors) {
            $show_form = false;
        }

        //search id by cart
        $quotationObj = OpartQuotation::getByCartId($cart->id);

        if (is_object($quotationObj)) {
            $quotationId = $quotationObj->id_opartdevis;
            $quotationName = $quotationObj->name;
        } else {
            $quotationId = null;
            $quotationName = '';
        }

        $summary = $cart->getSummaryDetails();
        $customized_datas = Product::getAllCustomizedDatas($cart->id);

        foreach ($summary['products'] as &$product) {
            if (Product::getTaxCalculationMethod()) {
                $product['standard_price'] = Product::getPriceStatic((int)$product["id_product"], false, $product['id_product_attribute'], 2, null, false, false);
                if (Configuration::get('OPARTDEVIS_REDUC_PERCENT')) {
                    $product['reduction_value'] =
                        round(
                            (
                                ($product['standard_price'] - $product['price'])
                                / $product['standard_price']
                            ) * 100,
                            2
                        );
                } else {
                    $product['reduction_value'] = $product['standard_price'] - $product['price'];
                }
            } else {
                $product['standard_price'] = Product::getPriceStatic((int)$product["id_product"], true, $product['id_product_attribute'], 2, null, false, false);
                if (Configuration::get('OPARTDEVIS_REDUC_PERCENT')) {
                    $product['reduction_value'] =
                        round(
                            (
                                ($product['standard_price'] - $product['price_wt'])
                                / $product['standard_price']
                            ) * 100,
                            2
                        );
                } else {
                    $product['reduction_value'] = $product['standard_price'] - $product['price_wt'];
                }
            }
        }

        if ($customized_datas) {
            foreach ($summary['products'] as &$product_update) {
                $product_id = (isset($product_update['id_product']) ? $product_update['id_product'] : $product_update['product_id']);
                $product_attribute_id = (isset($product_update['id_product_attribute']) ?
                    $product_update['id_product_attribute'] : $product_update['product_attribute_id']);

                if (isset($customized_datas[$product_id][$product_attribute_id])) {
                    $product_update['tax_rate'] = Tax::getProductTaxRate($product_id, $cart->{Configuration::get('PS_TAX_ADDRESS_TYPE')});
                }
            }

            Product::addCustomizationPrice($summary['products'], $customized_datas);
        }

        $this->context->smarty->assign(array(
            'addresses' => $addresses,
            'customerId' => $customer->id,
            'id_carrier' => $cart->id_carrier,
            'summary' => $summary,
            'customizedDatas' => $customized_datas,
            'CUSTOMIZE_FILE' => Product::CUSTOMIZE_FILE,
            'CUSTOMIZE_TEXTFIELD' => Product::CUSTOMIZE_TEXTFIELD,
            'PS_UPLOAD_DIR' => _PS_UPLOAD_DIR_,
            'id_cart' => $cart->id,
            'showForm' => $show_form,
            'from' => $from,
            'quotationId' => $quotationId,
            'quotationName' => $quotationName,
            'ajax_url' => $this->context->link->getModuleLink('opartdevis', 'CreateQuotation'),
        ));


        if ($this->isSeven) {
            $this->setTemplate('module:opartdevis/views/templates/front/ps17/create.tpl');
        } else {
            $this->setTemplate('create.tpl');
        }
    }

    private function processConfirmation()
    {
        $quotation = new OpartQuotation(Tools::getValue('confirm'));

        if (!$quotation->isAllowed()) {
            $this->errors[] = Tools::displayError($this->module->l('You are not allowed to access this quote', 'createquotation'));

            return false;
        }

        $this->context->smarty->assign('id_cart', $quotation->id_cart);

        if ($this->isSeven) {
            $this->setTemplate('module:opartdevis/views/templates/front/ps17/confirm.tpl');
        } else {
            $this->setTemplate('confirm.tpl');
        }

        if (Configuration::get('OPARTDEVIS_EMAIL_CUSTOMER') == 1) {
            $quotation->sendToCustomer();
        }

        if (Configuration::get('OPARTDEVIS_EMAIL_ADMIN') == 1) {
            $quotation->sendToAdmin();
        }
    }
}
