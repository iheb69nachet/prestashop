<?php
/**
 * Prestashop module : OpartDevis
 *
 * @author Olivier CLEMENCE <manit4c@gmail.com>
 * @copyright  Op'art
 * @license Tous droits réservés / Le droit d'auteur s'applique (All rights reserved / French copyright law applies)
 */

require_once _PS_MODULE_DIR_.'opartdevis/models/OpartQuotation.php';

class OpartDevisSimpleQuotationModuleFrontController extends ModuleFrontController
{
    private $isSeven;

    public function init()
    {
        $this->isSeven = Tools::version_compare(_PS_VERSION_, '1.7', '>=');

        $this->display_column_right = false;
        $this->display_column_left = false;

        parent::init();
    }

    /* for prestashop 1.7 compatibility */
    private function addMissingSmartyVar()
    {
        $this->context->smarty->assign(array(
            'base_dir' => _PS_BASE_URL_.__PS_BASE_URI__,
        ));
    }
        
    public function initContent()
    {
        parent::initContent();

        $customer = $this->context->customer;
                
        if ($this->isSeven) {
            $this->addMissingSmartyVar();
        }

        if (Validate::isLoadedObject($customer)) {
            $customer_id = $customer->id;
            $addresses = $customer->getAddresses($this->context->language->id);
        } else {
            $customer_id = 0;
            $addresses = array();
        }

        $this->context->smarty->assign(array(
            'customer_id' => $customer_id,
            'addresses' => $addresses,
        ));

        if (Tools::isSubmit('submitOpartMessage')) {
            $opart_quotation = new OpartQuotation();

            $customer = $this->context->customer;

            //Tools::redirect('index.php?controller=order&step=1');
            if (!Validate::isLoadedObject($customer)) {
                if (!Tools::getValue('customer_firstname')) {
                    $this->errors[] = Tools::displayError($this->module->l('You have to specify your firstname', 'simplequotation'));
                }
                                
                if (!Tools::getValue('customer_lastname')) {
                    $this->errors[] = Tools::displayError($this->module->l('You have to specify your lastname', 'simplequotation'));
                }
                                
                if (!Tools::getValue('customer_email')) {
                    $this->errors[] = Tools::displayError($this->module->l('You have to specify your email', 'simplequotation'));
                }
                
                if (!Validate::isEmail(Tools::getValue('customer_email'))) {
                    $this->errors[] = Tools::displayError($this->module->l('Please specify a valid email', 'simplequotation'));
                }
                                
                if (!$this->errors) {
                    $customer = array();
                    $customer['firstname'] = Tools::getValue('customer_firstname');
                    $customer['lastname'] = Tools::getValue('customer_lastname');
                    $customer['email'] = Tools::getValue('customer_email');
                }
            }

            $invoice_address = (!Tools::getValue('invoice_address')) ? Tools::getValue('invoice_address_text') : Tools::getValue('invoice_address');
            $delivery_address = (!Tools::getValue('delivery_address')) ? Tools::getValue('delivery_address_text') : Tools::getValue('delivery_address');

            $phone = Tools::getValue('customer_phone');
            $message = Tools::getValue('quotation_message');
            if (Configuration::get('OPARTDEVIS_ADD_SIMPLE_CART')) {
                $cart = $this->context->cart;

                if ($cart->getProducts(true)) {
                    $items_table = '';
                    $count = 0;
                    $tdStyle = 'style="padding:0.3rem 1rem 0.3rem 1rem;"';
                    $tableStyle = 'style="border-collapse: collapse;width:100%;"';

                    if ($this->isSeven) {
                        $imageType = ImageType::getFormattedName('large');
                    } else {
                        $imageType = ImageType::getFormatedName('large');
                    }

                    $items_table = '<table '.$tableStyle.'>';
                    $items_table .= '<tr>';
                    $items_table .= '<td>'
                        .$this->module->l('Reference', 'simplequotation')
                        .'</td>';
                    $items_table .= '<td>'
                        .$this->module->l('Image', 'simplequotation')
                        .'</td>';
                    $items_table .= '<td>'
                        .$this->module->l('Product name', 'simplequotation')
                        .'</td>';
                    $items_table .= '<td>'
                        .$this->module->l('Unit price tax excl.', 'simplequotation')
                        .'</td>';
                    $items_table .= '<td>'
                        .$this->module->l('Quantity', 'simplequotation')
                        .'</td>';
                    $items_table .= '<td>'
                        .$this->module->l('Total tax excl.', 'simplequotation')
                        .'</td>';

                    foreach ($cart->getProducts(true) as $cartProduct) {
                        $product = new Product(
                            (int)$cartProduct['id_product'],
                            (int)$this->context->shop->id,
                            (int)$this->context->language->id
                        );

                        //Need add attributes
                        $link = new Link();
                        $url = $this->context->link->getProductLink((int)$product->id);
                        $richImage = $product->getCover((int)$product->id);
                        $imgUrl = Tools::getShopProtocol().$link->getImageLink(
                            $product->link_rewrite,
                            (int)$product->id.'-'.$richImage['id_image'],
                            $imageType
                        );
                        $items_table .=
                            '<tr style="background-color:' . (++$count%2 ? "#e3e3e3" : "transparent") . ';">
                                <td '.$tdStyle.'>'
                                .$cartProduct['reference']
                                .'</td>
                                <td '.$tdStyle.'>
                                    <strong>
                                    <a href="'.$url.'">'
                                    .'<img src="'
                                    .$imgUrl
                                    .'" style="max-width:50px;"/>'
                                    .'</a>
                                    </strong>
                                </td>
                                <td '.$tdStyle.'>
                                    <strong>
                                    <a href="'.$url.'" style="text-decoration: none;">'
                                    .$product->name
                                    .' '
                                    .(isset($cartProduct['attributes_small']) ? ' '
                                        .$cartProduct['attributes_small'] : '')
                                    .'</a>
                                    </strong>
                                </td>
                                <td '.$tdStyle.'>'
                                    .Tools::displayPrice($cartProduct['price_with_reduction_without_tax'], null, false)
                                .'</td>
                                <td '.$tdStyle.'>
                                    <strong>'
                                    .$cartProduct['quantity']
                                    .'</strong>
                                </td>
                                <td '.$tdStyle.'>
                                    <strong>'
                                    .Tools::displayPrice($cartProduct['quantity'] * $cartProduct['price_with_reduction_without_tax'], null, false)
                                    .'</strong>
                                </td>
                            </tr>';
                    }
                    $items_table .= '</table>';
                    $message .= $items_table;
                }
            }

            if (empty($message)) {
                $this->errors[] = Tools::displayError($this->module->l('Please explain us your request', 'simplequotation'));
            }
                        
            if (!$this->errors) {
                if ($opart_quotation->sendQuotationRequest($customer, $invoice_address, $delivery_address, $message, $phone, $this->context)) {
                    $this->context->smarty->assign('confirmation', 1);
                } else {
                    $this->errors[] = Tools::displayError($this->module->l('An error occured during the send of your request', 'simplequotation'));
                }
            }
            
            $new_cart = new Cart();
            $this->context->cart = $new_cart;
            $this->context->cookie->id_cart = $new_cart->id;
            Tools::clearSmartyCache();
        }

        if ($this->isSeven) {
            $this->setTemplate('module:opartdevis/views/templates/front/ps17/simplequotation.tpl');
        } else {
            $this->setTemplate('simplequotation.tpl');
        }
    }

    public function setMedia($isNewTheme = false)
    {
        parent::setMedia();

        $this->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/opartdevis.css');

        if ($this->isSeven) {
            $this->addCSS(_MODULE_DIR_.$this->module->name.'/views/css/opartdevis_17.css');
        }
    }
}
