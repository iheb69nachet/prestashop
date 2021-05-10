<?php
/**
 * Prestashop module : OpartDevis
 *
 * @author Olivier CLEMENCE <manit4c@gmail.com>
 * @copyright  Op'art
 * @license Tous droits réservés / Le droit d'auteur s'applique (All rights reserved / French copyright law applies)
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(_PS_MODULE_DIR_.'opartdevis/models/OpartQuotation.php');

class Opartdevis extends PaymentModule
{
    private $html = '';
    private $postErrors = array();
    public $isSeven;

    public function __construct()
    {
        $this->name = 'opartdevis';
        $this->tab = 'payments_gateways';
        $this->version = '4.3.5';
        $this->author = 'Op\'art - Olivier CLEMENCE';
        $this->module_key = '5165c4489bcc64253b1c1cd98926a8a4';
        $this->need_instance = 0;
        $this->errors = array();
        $this->bootstrap = true;

        $this->ps_versions_compliancy = array(
            'min' => '1.6.0.0',
            'max' => _PS_VERSION_
        );

        parent::__construct();

        $this->displayName = $this->l('Op\'art devis');
        $this->description = $this->l('This module allows your customers to create quotations.');
        $this->confirmUninstall = $this->l('Are you sure you want to delete these details?');

        $this->isSeven = Tools::version_compare(_PS_VERSION_, '1.7', '>=') ? true : false;

        if (!Configuration::get('OPARTDEVIS_CONTACT_ID')) {
            $this->warning = $this->l('To allow guests to send quotation requests, you have to set an admin contact.');
        }
    }

    public function install()
    {
        // Create OpartDevis Table
        include(dirname(__FILE__).'/sql/install.php');

        $paymentHook = $this->isSeven ? 'paymentOptions' : 'Payment';

        return parent::install()
            && Configuration::updateValue('OPARTDEVIS_VALIDATION_TEXT', '')
            && Configuration::updateValue('OPARTDEVIS_AGREMENT_TEXT', '')
            && Configuration::updateValue('OPARTDEVIS_EMAIL_CUSTOMER', 0)
            && Configuration::updateValue('OPARTDEVIS_EMAIL_ADMIN', 0)
            && Configuration::updateValue('OPARTDEVIS_CONTACT_ID', 0)
            && Configuration::updateValue('OPARTDEVIS_PROD_FIRST', 7)
            && Configuration::updateValue('OPARTDEVIS_PROD_PAGE', 10)
            && Configuration::updateValue('OPARTDEVIS_IMG_ON_PDF', 0)
            && Configuration::updateValue('OPARTDEVIS_IMG_TYPE', 0)
            && Configuration::updateValue('OPARTDEVIS_VALIDITY', 0)
            && Configuration::updateValue('OPARTDEVIS_REDUC_PERCENT', 0)
            && Configuration::updateValue('OPARTDEVIS_SIMPLE_FORM', 1)
            && Configuration::updateValue('OPARTDEVIS_ALLOW_COMMENT', 0)
            && Configuration::updateValue('OPARTDEVIS_ADD_SIMPLE_CART', 0)
            && $this->registerHook($paymentHook)
            && $this->registerHook('displayHeader')
            && $this->registerHook('displayAdminView')
            && $this->registerHook('displayLeftColumn')
            && $this->registerHook('displayShoppingCart')
            && $this->registerHook('displayCustomerAccount')
            && $this->registerHook('displayShoppingCartFooter')
            && $this->registerHook('displayBeforeShoppingCartBlock')
            && $this->registerHook('actionOrderStatusUpdate')
            && $this->registerHook('actionBeforeCartUpdateQty')
            && $this->registerHook('actionCartUpdateQuantityBefore')
            && $this->registerHook('actionObjectProductInCartDeleteBefore')
            && $this->installModuleTab()
            && $this->setAdminContactID();
    }

    public function uninstall()
    {
        // Drop OpartDevis Table
        include(dirname(__FILE__).'/sql/uninstall.php');

        return parent::uninstall()
            && Configuration::deleteByName('OPARTDEVIS_VALIDATION_TEXT')
            && Configuration::deleteByName('OPARTDEVIS_AGREMENT_TEXT')
            && Configuration::deleteByName('OPARTDEVIS_EMAIL_CUSTOMER')
            && Configuration::deleteByName('OPARTDEVIS_EMAIL_ADMIN')
            && Configuration::deleteByName('OPARTDEVIS_CONTACT_ID')
            && Configuration::deleteByName('OPARTDEVIS_PROD_FIRST')
            && Configuration::deleteByName('OPARTDEVIS_PROD_PAGE')
            && Configuration::deleteByName('OPARTDEVIS_IMG_ON_PDF')
            && Configuration::deleteByName('OPARTDEVIS_IMG_TYPE')
            && Configuration::deleteByName('OPARTDEVIS_VALIDITY')
            && Configuration::deleteByName('OPARTDEVIS_REDUC_PERCENT')
            && Configuration::deleteByName('OPARTDEVIS_SIMPLE_FORM')
            && Configuration::deleteByName('OPARTDEVIS_ALLOW_COMMENT')
            && Configuration::deleteByName('OPARTDEVIS_ADD_SIMPLE_CART')
            && $this->uninstallModuleTab();
    }

    private function installModuleTab()
    {
        $tab = new Tab();
        $tab->module = $this->name;
        $tab->active = 1;
        $tab->class_name = 'AdminOpartdevis';
        $tab->id_parent = (int)Tab::getIdFromClassName('AdminParentOrders');
        $tab->position = Tab::getNewLastPosition($tab->id_parent);

        foreach (Language::getLanguages(false) as $lang) {
            if($lang['iso_code'] == "fr") {
                $tab->name[(int)$lang['id_lang']] = 'Devis';
            } else {
                $tab->name[(int)$lang['id_lang']] = 'Quotations';
            }
        }

        return $tab->add();
    }

    private function uninstallModuleTab()
    {
        $tab = new Tab((int)Tab::getIdFromClassName('AdminOpartdevis'));

        return $tab->delete();
    }

    private function setAdminContactID()
    {
        $contact_ids = Contact::getContacts($this->context->language->id);

        if (count($contact_ids)) {
            return Configuration::updateValue('OPARTDEVIS_CONTACT_ID', $contact_ids[0]['id_contact']);
        }

        return Configuration::updateValue('OPARTDEVIS_CONTACT_ID', null);
    }

    public function hookDisplayShoppingCartFooter($params)
    {
        return $this->hookdisplayBeforeShoppingCartBlock($params);
    }

    public function hookDisplayBeforeShoppingCartBlock($params)
    {
        if (!isset($params['cart'])) {
            return false;
        }

        $quotation = OpartQuotation::getByCartId($params['cart']->id);

        if (!Validate::isLoadedObject($quotation)) {
            return false;
        }

        $this->smarty->assign(array(
            'quotation' => $quotation,
        ));

        return $this->display(__FILE__, 'views/templates/hook/before_shopping_cart.tpl');
    }

    public function hookDisplayShoppingCart($params)
    {
        if (!OpartQuotation::isFreezedCart($params['cart'])) {
            $quotation = OpartQuotation::getByCartId($params['cart']->id);

            $this->smarty->assign(array(
                'quotation' => $quotation
            ));

            return $this->display(__FILE__, 'views/templates/hook/cart_button.tpl');
        }

        if ($this->isSeven) {
            if (!isset($params['cart'])) {
                return false;
            }

            $quotation = OpartQuotation::getByCartId($params['cart']->id);

            if (!Validate::isLoadedObject($quotation)) {
                return false;
            }

            $this->smarty->assign(array(
                'quotation' => $quotation,
            ));

            return $this->display(__FILE__, 'views/templates/hook/before_shopping_cart.tpl');
        }
    }

    public function hookPayment($params)
    {
        if (OpartQuotation::isFreezedCart($params['cart'])) {
            return false;
        }

        return $this->display(__FILE__, 'views/templates/hook/payment.tpl');
    }

    public function hookPaymentOptions($params)
    {
        if (!$this->active) {
            return false;
        }

        $options = new PrestaShop\PrestaShop\Core\Payment\PaymentOption;

        $options->setModuleName($this->name)
            ->setCallToActionText($this->l('Create a quotation'))
            ->setAction($this->context->link->getModuleLink($this->name, 'CreateQuotation', array('create'=>true, 'from'=>'payment'), true))
            ->setAdditionalInformation("<div id='opart-devis-payment'>".$this->l('Click on the "Create a quotation" button to finalize the request.')."</div>");

        return array($options);
    }

    public function hookDisplayHeader()
    {
        Media::addJsDefL(
            'order_button_content', $this->l('Create a quotation')
        );

        $this->context->controller->addCSS(_MODULE_DIR_.'opartdevis/views/css/opartdevis_1.css');

        if ($this->isSeven) {
            $this->context->controller->addJS(_MODULE_DIR_.'opartdevis/views/js/opartdevis.js');
        }

        if (Validate::isLoadedObject($this->context->customer)) {
            // redirect new customer to the quotation creation page after sign in/loggin/address creation
            if ($this->context->cookie->__get('opartdevis_no_address')) {
                $addresses = $this->context->customer->getAddresses($this->context->language->id);

                if (is_array($addresses) && count($addresses)) {
                    $this->context->cookie->__unset('opartdevis_no_address');

                    return Tools::redirect(
                        $this->context->link->getModuleLink(
                            'opartdevis',
                            'CreateQuotation',
                            array(
                                'create'=>true
                            )
                        )
                    );
                }
            }

            if ($this->context->cookie->__get('opartdevis_requested_' . $this->context->cart->id)) {
                $base_url_with_lang = $this->context->link->getPageLink('', null, $this->context->language->id);

                if (
                    $_SERVER['HTTP_REFERER'] == $base_url_with_lang . $this->l('login')
                    || $_SERVER['HTTP_REFERER'] == $base_url_with_lang . $this->l('login') . '?' . $this->l('create_account') . '=1'
                    || $_SERVER['HTTP_REFERER'] == $base_url_with_lang . $this->l('addresses')
                ) {
                    $this->context->cookie->__unset('opartdevis_requested_' . $this->context->cart->id);

                    $addresses = $this->context->customer->getAddresses($this->context->language->id);

                    if (is_array($addresses) && count($addresses)) {
                        $this->context->cookie->__unset('opartdevis_no_address');
                    }

                    return Tools::redirect(
                        $this->context->link->getModuleLink(
                            'opartdevis',
                            'CreateQuotation',
                            array(
                                'create'=>true
                            )
                        )
                    );
                }
            }
        }
    }

    public function hookActionBeforeCartUpdateQty($params)
    {
        return $this->hookActionCartUpdateQuantityBefore($params);
    }

    public function hookActionCartUpdateQuantityBefore($params)
    {
        $cart = $params['cart'];

        if (OpartQuotation::getByCartId($cart->id)) {
            $product = $params['product'];
            $id_product_attribute = $params['id_product_attribute'];
            $id_customization = $params['id_customization'];
            $quantity = $params['quantity'];
            $operator = $params['operator'];
            $id_address_delivery = $params['id_address_delivery'];

            if (OpartQuotation::isFreezedCart($cart)) {
                $this->ajaxDie(Tools::jsonEncode(array(
                    'hasError' => true,
                    'errors' => $this->isSeven ? '' : array(Tools::displayError($this->l('You are not allowed to modify this cart because it has been linked to a quotation. Go to your cart for more information'), false, $this->context)),
                    'modal' => $this->isSeven ? $this->fetch('module:opartdevis/views/templates/front/ps17/modal.tpl') : ''
                )));
            }

            SpecificPrice::deleteByIdCart($cart->id, $product->id, $id_product_attribute);

            if (function_exists('getProductQuantity')) {
                $cartProductQuantity = $cart->getProductQuantity($product->id, $id_product_attribute, $id_customization, $id_address_delivery);
            } else {
                $cartProductQuantity = $cart->containsProduct($product->id, $id_product_attribute, $id_customization, $id_address_delivery);
            }

            if ($operator == 'up') {
                $newProductQuantity = $cartProductQuantity['quantity'] + $quantity;
            } else if ($operator == 'down') {
                $newProductQuantity = $cartProductQuantity['quantity'] - $quantity;
            }

            $specific_price_output = null;
            $price = Product::getPriceStatic(
                $product->id,
                false,
                $id_product_attribute,
                6,
                null,
                false,
                true,
                (int)$newProductQuantity,
                false,
                $cart->id_customer,
                0,
                $id_address_delivery,
                $specific_price_output,
                false,
                true,
                $this->context,
                true
            );

            $specific_price = new SpecificPrice();

            $specific_price->id_cart = (int)$cart->id;
            $specific_price->id_specific_price_rule = 0;
            $specific_price->id_product = (int)$product->id;
            $specific_price->id_product_attribute = (int)$id_product_attribute;
            $specific_price->id_customer = $cart->id_customer;
            $specific_price->id_shop = (int)$cart->id_shop;
            $specific_price->id_country = 0;
            $specific_price->id_currency = $cart->id_currency;
            $specific_price->id_group = 0;
            $specific_price->from_quantity = (int)$newProductQuantity;
            $specific_price->price = $price;
            $specific_price->reduction_type = 0;
            $specific_price->reduction_tax = 0;
            $specific_price->reduction = 0;
            $specific_price->from = 0;
            $specific_price->to = 0;

            $specific_price->add();
        }
    }

    public function hookActionObjectProductInCartDeleteBefore($params)
    {
        if (OpartQuotation::isFreezedCart($params['cart'])) {
            $this->ajaxDie(Tools::jsonEncode(array(
                'hasError' => true,
                'errors' => $this->isSeven ? '' : array(Tools::displayError($this->l('You are not allowed to modify this cart because it has been linked to a quotation. Go to your cart for more information'), false, $this->context)),
                'modal' => $this->isSeven ? $this->fetch('module:opartdevis/views/templates/front/ps17/modal.tpl') : ''
            )));
        }
    }

    /**
     * Dies and echoes output value
     *
     * @param string|null $value
     * @param string|null $controller
     * @param string|null $method
     */
    private function ajaxDie($value = null, $controller = null, $method = null)
    {
        if ($controller === null) {
            $controller = get_class($this);
        }

        if ($method === null) {
            $bt = debug_backtrace();
            $method = $bt[1]['function'];
        }

        Hook::exec('actionBeforeAjaxDie', array('controller' => $controller, 'method' => $method, 'value' => $value));
        Hook::exec('actionBeforeAjaxDie'.$controller.$method, array('value' => $value));

        // PS 1.7
        Hook::exec('actionAjaxDie'.$controller.$method.'Before', array('value' => $value));

        die($value);
    }

    public function hookActionOrderStatusUpdate($params)
    {
        $order = new Order($params['id_order']);

        $quotation = OpartQuotation::getByCartId($order->id_cart);

        if (!Validate::isLoadedObject($quotation)) {
            return true;
        }

        $quotation->status = OpartQuotation::ORDERED;
        $quotation->id_order = $order->id;

        $quotation->save();

        //add msg to order
        $message = sprintf(
            $this->l('Order created from quotation number: %s'),
            $quotation->id_opartdevis
        );

        $msg = new Message();

        $msg->message = $message;
        $msg->id_cart = (int)$order->id_cart;
        $msg->id_customer = (int)($order->id_customer);
        $msg->id_order = (int)$order->id;
        $msg->private = 1;

        $msg->add();
    }

    public function hookDisplayLeftColumn()
    {
        $this->html = '';

        $this->html = $this->display(__FILE__, 'views/templates/hook/creation_button.tpl');

        if (Configuration::get('OPARTDEVIS_SIMPLE_FORM')) {
            $this->html .= $this->display(__FILE__, 'views/templates/hook/simple_form_button.tpl');
        }

        return $this->html;
    }

    public function hookDisplayRightColumn()
    {
        return $this->hookDisplayLeftColumn();
    }

    public function hookDisplayFooter()
    {
        return $this->hookDisplayLeftColumn();
    }

    public function hookDisplayCustomerAccount($params)
    {
        $sql =
            'SELECT COUNT(*)
            FROM `'._DB_PREFIX_.'opartdevis`
            WHERE id_customer = '.(int)$params['cart']->id_customer;

        $has_quotations = Db::getInstance()->getValue($sql);

        if (!$has_quotations) {
            return false;
        }

        if ($this->isSeven) {
            return $this->display(__FILE__, 'views/templates/front/ps17/myaccount.tpl');
        } else {
            return $this->display(__FILE__, 'views/templates/front/myaccount.tpl');
        }
    }

    public function hookDisplayAdminView()
    {
        if (Tools::getValue('controller') == 'AdminCarts') {
            $id_cart = Tools::getValue('id_cart');

            $token = Tools::getAdminToken('AdminOpartdevis'.(int)Tab::getIdFromClassName('AdminOpartdevis').(int)Context::getContext()->employee->id);
            $href = 'index.php?controller=AdminOpartdevis&transformThisCartId='.$id_cart.'&token='.$token;

            return '<a class="btn btn-default" href="'.$href.'"><i class="icon-shopping-cart"></i> '.$this->l('Create a quotation from this cart').'</a>';
        }
    }

    public function postValidation()
    {
        if (Tools::isSubmit('btnSubmit')) {
            // Validate switch fields (isBool)
            if (Tools::getValue('OPARTDEVIS_EMAIL_CUSTOMER')
                && !Validate::isBool(Tools::getValue('OPARTDEVIS_EMAIL_CUSTOMER'))
            ) {
                $this->postErrors[] = $this->l('The "Send an e-mail to customer" field is not valid.');
            }

            if (Tools::getValue('OPARTDEVIS_EMAIL_ADMIN')
                && !Validate::isBool(Tools::getValue('OPARTDEVIS_EMAIL_ADMIN'))
            ) {
                $this->postErrors[] = $this->l('The "Send an e-mail to admin" field is not valid.');
            }

            if (Tools::getValue('OPARTDEVIS_SIMPLE_FORM')
                && !Validate::isBool(Tools::getValue('OPARTDEVIS_SIMPLE_FORM'))
            ) {
                $this->postErrors[] = $this->l('The "Display simple quotation form" field is not valid.');
            }

            if (Tools::getValue('OPARTDEVIS_ALLOW_COMMENT')
                && !Validate::isBool(Tools::getValue('OPARTDEVIS_ALLOW_COMMENT'))
            ) {
                $this->postErrors[] = $this->l('The "Display free textarea" field is not valid.');
            }

            if (Tools::getValue('OPARTDEVIS_IMG_ON_PDF')
                && !Validate::isBool(Tools::getValue('OPARTDEVIS_IMG_ON_PDF'))
            ) {
                $this->postErrors[] = $this->l('The "Display product image on PDF" field is not valid.');
            }

            if (Tools::getValue('OPARTDEVIS_REDUC_PERCENT')
                && !Validate::isBool(Tools::getValue('OPARTDEVIS_REDUC_PERCENT'))
            ) {
                $this->postErrors[] = $this->l('The "Display reduction as percentage" field is not valid.');
            }

            // Validate select fields (isInt)
            if (Tools::getValue('OPARTDEVIS_CONTACT_ID')
                && !Validate::isInt(Tools::getValue('OPARTDEVIS_CONTACT_ID'))
            ) {
                $this->postErrors[] = $this->l('The "Administration contact" field is not valid.');
            }

            if (Tools::getValue('OPARTDEVIS_IMG_TYPE')
                && !Validate::isInt(Tools::getValue('OPARTDEVIS_IMG_TYPE'))
            ) {
                $this->postErrors[] = $this->l('The "Image type for PDF" field is not valid.');
            }


            // Validate lang fields (isMessage)
            foreach (Language::getLanguages(true) as $language) {
                // Validate validation text
                if (Tools::getValue('OPARTDEVIS_VALIDATION_TEXT_'.$language['id_lang'])
                    && !Validate::isMessage(Tools::getValue('OPARTDEVIS_VALIDATION_TEXT_'.$language['id_lang']))
                ) {
                    $this->postErrors[] = $this->l('The "Validation text" field is not valid. (Please avoid HTML)');
                }

                // Validate agrement text
                if (Tools::getValue('OPARTDEVIS_AGREMENT_TEXT_'.$language['id_lang'])
                    && !Validate::isMessage(Tools::getValue('OPARTDEVIS_AGREMENT_TEXT_'.$language['id_lang']))
                ) {
                    $this->postErrors[] = $this->l('The "Good for agrement text" field is not valid. (Please avoid HTML)');
                }
            }

            // Validate number fields (isInt)
            if (Tools::getValue('OPARTDEVIS_PROD_FIRST')
                && !Validate::isInt(Tools::getValue('OPARTDEVIS_PROD_FIRST'))
            ) {
                $this->postErrors[] = $this->l('The "Maximum products on first page" field is not valid.');
            }

            if (Tools::getValue('OPARTDEVIS_PROD_PAGE')
                && !Validate::isInt(Tools::getValue('OPARTDEVIS_PROD_PAGE'))
            ) {
                $this->postErrors[] = $this->l('The "Maximum products on other pages" field is not valid.');
            }

            if (Tools::getValue('OPARTDEVIS_VALIDITY')
                && !Validate::isInt(Tools::getValue('OPARTDEVIS_VALIDITY'))
            ) {
                $this->postErrors[] = $this->l('The "Quotations are valid for" field is not valid.');
            }

            if (Tools::getValue('OPARTDEVIS_ADD_SIMPLE_CART')
                && !Validate::isBool(Tools::getValue('OPARTDEVIS_ADD_SIMPLE_CART'))
            ) {
                $this->postErrors[] = $this->l('The "send cart with simple form" field is not valid.');
            }
        }
    }

    public function postProcess()
    {
        if (Tools::isSubmit('btnSubmit')) {
            // update switch fields
            Configuration::updateValue('OPARTDEVIS_EMAIL_CUSTOMER', Tools::getValue('OPARTDEVIS_EMAIL_CUSTOMER'));
            Configuration::updateValue('OPARTDEVIS_EMAIL_ADMIN', Tools::getValue('OPARTDEVIS_EMAIL_ADMIN'));
            Configuration::updateValue('OPARTDEVIS_SIMPLE_FORM', Tools::getValue('OPARTDEVIS_SIMPLE_FORM'));
            Configuration::updateValue('OPARTDEVIS_ALLOW_COMMENT', Tools::getValue('OPARTDEVIS_ALLOW_COMMENT'));
            Configuration::updateValue('OPARTDEVIS_ADD_SIMPLE_CART', Tools::getValue('OPARTDEVIS_ADD_SIMPLE_CART'));
            Configuration::updateValue('OPARTDEVIS_IMG_ON_PDF', Tools::getValue('OPARTDEVIS_IMG_ON_PDF'));
            Configuration::updateValue('OPARTDEVIS_REDUC_PERCENT', Tools::getValue('OPARTDEVIS_REDUC_PERCENT'));

            // update select fields
            Configuration::updateValue('OPARTDEVIS_CONTACT_ID', Tools::getValue('OPARTDEVIS_CONTACT_ID'));
            Configuration::updateValue('OPARTDEVIS_IMG_TYPE', Tools::getValue('OPARTDEVIS_IMG_TYPE'));

            // Update lang fields
            $validation_text = array();
            $agrement_text = array();
            foreach (Language::getLanguages(true) as $language) {
                $validation_text[$language['id_lang']] = Tools::getValue('OPARTDEVIS_VALIDATION_TEXT_'.$language['id_lang']);
                $agrement_text[$language['id_lang']] = Tools::getValue('OPARTDEVIS_AGREMENT_TEXT_'.$language['id_lang']);
            }

            Configuration::updateValue('OPARTDEVIS_VALIDATION_TEXT', $validation_text, true);
            Configuration::updateValue('OPARTDEVIS_AGREMENT_TEXT', $agrement_text, true);

            // Update number fields
            Configuration::updateValue('OPARTDEVIS_PROD_FIRST', Tools::getValue('OPARTDEVIS_PROD_FIRST'));
            Configuration::updateValue('OPARTDEVIS_PROD_PAGE', Tools::getValue('OPARTDEVIS_PROD_PAGE'));
            Configuration::updateValue('OPARTDEVIS_VALIDITY', Tools::getValue('OPARTDEVIS_VALIDITY'));
        }

        $this->html .= $this->displayConfirmation($this->l('Settings updated'));
    }

    public function getContent()
    {
        $this->html = '';

        if (Tools::isSubmit('btnSubmit')) {
            $this->postValidation();

            if (!count($this->postErrors)) {
                $this->postProcess();
            } else {
                foreach ($this->postErrors as $err) {
                    $this->html .= $this->displayError($err);
                }
            }
        }

        $this->html .= $this->renderForm();
        $this->html .= $this->display(__FILE__, 'views/templates/admin/help.tpl');

        return $this->html;
    }

    public function renderForm()
    {
        $fields_form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('OpartQuotation configuration'),
                    'icon' => 'icon-list-alt'
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Send an e-mail to customer'),
                        'desc' => $this->l('Send an email to the customer with the quotation as PDF in attachment'),
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Yes')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No')
                            )
                        ),
                        'name' => 'OPARTDEVIS_EMAIL_CUSTOMER'
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Send an e-mail to admin'),
                        'desc' => $this->l('Send an email to the administrator contact with the quotation as PDF in attachment'),
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Yes')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No')
                            )
                        ),
                        'name' => 'OPARTDEVIS_EMAIL_ADMIN'
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Administrator contact'),
                        'desc' => $this->l('The contact who will receive quotation requests'),
                        'options' => array(
                            'query' => Contact::getContacts($this->context->language->id),
                            'id' => 'id_contact',
                            'name' => 'name'
                        ),
                        'name' => 'OPARTDEVIS_CONTACT_ID'
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => $this->l('Validation text'),
                        'desc' => $this->l('Enter here the validation condition of your quotation. This text will appear at the bottom of the pdf file. Ex: To validate your order, you just need to send us back the quote signed to the following address: company name - address - postcode - city'),
                        'lang' => true,
                        'name' => 'OPARTDEVIS_VALIDATION_TEXT'
                    ),
                    array(
                        'type' => 'textarea',
                        'label' => $this->l('Good for agrement text'),
                        'desc' => $this->l('Enter here the text good for agrement or another text'),
                        'lang' => true,
                        'name' => 'OPARTDEVIS_AGREMENT_TEXT'
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Maximum product on first page'),
                        'desc' => $this->l('Set here the maximum number of product will be displaying on the first PDF page'),
                        'class' => 'col-lg-2',
                        'suffix' => $this->l('products'),
                        'name' => 'OPARTDEVIS_PROD_FIRST'
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Maximum product on others pages'),
                        'desc' => $this->l('Set here the maximum number of product will be displaying on PDF pages except first page'),
                        'class' => 'col-lg-2',
                        'suffix' => $this->l('products'),
                        'name' => 'OPARTDEVIS_PROD_PAGE'
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Display product image on PDF'),
                        'desc' => $this->l('Display product image on quotation PDF'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Yes')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No')
                            )
                        ),
                        'name' => 'OPARTDEVIS_IMG_ON_PDF'
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Image type for PDF'),
                        'desc' => $this->l('Select product image type for PDF'),
                        'is_bool' => true,
                        'options' => array(
                            'query' => ImageType::getImagesTypes('products', true),
                            'id' => 'id_image_type',
                            'name' => 'name'
                        ),
                        'name' => 'OPARTDEVIS_IMG_TYPE'
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Quotations are valid for'),
                        'desc' => $this->l('Set the maximum number of day during which quotes are valid. Leave it empty to disable this feature'),
                        'class' => 'col-lg-2',
                        'suffix' => $this->l('days'),
                        'name' => 'OPARTDEVIS_VALIDITY'
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Display reduction as percentage'),
                        'desc' => $this->l('Display reduction as percentage on PDF and front quotation form'),
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Yes')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No')
                            )
                        ),
                        'name' => 'OPARTDEVIS_REDUC_PERCENT'
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Display simple quotation form'),
                        'desc' => $this->l('Let guests send simple quotation requests'),
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Yes')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No')
                            )
                        ),
                        'name' => 'OPARTDEVIS_SIMPLE_FORM'
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Receive customer cart wih simple form ?'),
                        'desc' => $this->l('You will receive customer cart content by email'),
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Yes')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No')
                            )
                        ),
                        'name' => 'OPARTDEVIS_ADD_SIMPLE_CART'
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Display free textarea'),
                        'desc' => $this->l('Display a free textarea to let customers write a message visible on the quotation'),
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => 1,
                                'label' => $this->l('Yes')
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => 0,
                                'label' => $this->l('No')
                            )
                        ),
                        'name' => 'OPARTDEVIS_ALLOW_COMMENT'
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                )
            ),
        );

        $languages = Language::getLanguages(true);
        foreach ($languages as &$language) {
            $language['is_default'] = (bool)($language['id_lang'] == Configuration::get('PS_LANG_DEFAULT'));
        }

        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $lang = new Language((int)Configuration::get('PS_LANG_DEFAULT'));
        $helper->default_form_language = $lang->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') ? Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG') : 0;
        $this->fields_form = array();
        $helper->submit_action = 'btnSubmit';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false).'&configure='.$this->name.'&tab_module='.$this->tab.'&module_name='.$this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFieldsValues(),
            'languages' => $languages,
            'id_language' => $this->context->language->id
        );

        return $helper->generateForm(array($fields_form));
    }

    public function getConfigFieldsValues()
    {
        return array(
            'OPARTDEVIS_VALIDATION_TEXT' => Configuration::getInt('OPARTDEVIS_VALIDATION_TEXT'),
            'OPARTDEVIS_AGREMENT_TEXT' => Configuration::getInt('OPARTDEVIS_AGREMENT_TEXT'),

            'OPARTDEVIS_EMAIL_CUSTOMER' => Configuration::get('OPARTDEVIS_EMAIL_CUSTOMER'),
            'OPARTDEVIS_EMAIL_ADMIN' => Configuration::get('OPARTDEVIS_EMAIL_ADMIN'),
            'OPARTDEVIS_CONTACT_ID' => Configuration::get('OPARTDEVIS_CONTACT_ID'),
            'OPARTDEVIS_PROD_FIRST' => Configuration::get('OPARTDEVIS_PROD_FIRST'),
            'OPARTDEVIS_PROD_PAGE' => Configuration::get('OPARTDEVIS_PROD_PAGE'),
            'OPARTDEVIS_IMG_ON_PDF' => Configuration::get('OPARTDEVIS_IMG_ON_PDF'),
            'OPARTDEVIS_IMG_TYPE' => Configuration::get('OPARTDEVIS_IMG_TYPE'),
            'OPARTDEVIS_VALIDITY' => Configuration::get('OPARTDEVIS_VALIDITY'),
            'OPARTDEVIS_REDUC_PERCENT' => Configuration::get('OPARTDEVIS_REDUC_PERCENT'),
            'OPARTDEVIS_SIMPLE_FORM' => Configuration::get('OPARTDEVIS_SIMPLE_FORM'),
            'OPARTDEVIS_ALLOW_COMMENT' => Configuration::get('OPARTDEVIS_ALLOW_COMMENT'),
            'OPARTDEVIS_ADD_SIMPLE_CART' => Configuration::get('OPARTDEVIS_ADD_SIMPLE_CART')
        );
    }
}
