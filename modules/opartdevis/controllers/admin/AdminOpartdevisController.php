<?php
/**
 * Prestashop module : OpartDevis
 *
 * @author Olivier CLEMENCE <manit4c@gmail.com>
 * @copyright  Op'art
 * @license Tous droits réservés / Le droit d'auteur s'applique (All rights reserved / French copyright law applies)
 */

require_once _PS_MODULE_DIR_ . 'opartdevis/models/OpartQuotation.php';

class AdminOpartdevisController extends ModuleAdminController
{
    /* @var Bool Is PS version >= 1.7 ? */
    private $isSeven;

    /* @var String html */
    private $html = '';

    public function __construct()
    {
        $this->table = 'opartdevis';
        $this->name = 'opartdevis';
        $this->className = 'OpartQuotation';
        $this->lang = false;
        $this->deleted = false;
        $this->colorOnBackground = false;
        $this->bootstrap = true;

        $this->context = Context::getContext();

        // set language for customer e-mail and attachment
        if (Tools::isSubmit('sendToCustomer')) {
            $id_lang = OpartQuotation::getCartLanguage(Tools::getValue('id_opartdevis'));

            if ($id_lang) {
                $this->context->language = new Language($id_lang);
            }
        }

        $this->isSeven = Tools::version_compare(_PS_VERSION_, '1.7', '>=') ? true : false;

        if (!(int) Configuration::get('PS_SHOP_ENABLE')) {
            $this->errors[] = Tools::displayError('Your shop is not enable: Carrier and customer list will not be loaded');
        }

        parent::__construct();

        // custom confirmation message (see AdminController class)
        $this->_conf[101] = $this->l('The quotation has been sent to the customer');
        $this->_conf[102] = $this->l('The quotation has been sent to the administrator');
        $this->_conf[103] = $this->l('The quotation has been validated');

        // custom error message (see AdminController class)
        $this->_error[101] = $this->l('You cannot edit an ordered quotation');

        $this->_select =
            'a.id_opartdevis id_quotation, a.date_add, a.id_cart company_name,
            CONCAT(LEFT(c.firstname, 1), \'. \', c.lastname) AS customer';

        $this->_join =
            'LEFT JOIN `'._DB_PREFIX_.'customer` c ON (
                c.id_customer = a.id_customer
            )';

        $this->_orderBy = 'a.date_add';
        $this->_orderWay = 'DESC';

        $this->fields_list = array(
            'id_opartdevis' => array(
                'title' => $this->l('ID'),
                'align' => 'center',
                'width' => 25
            ),
            'name' => array(
                'title' => $this->l('Name'),
                'width' => 'auto'
            ),
            'customer' => array(
                'title' => $this->l('Customer'),
                'width' => 'auto',
                'havingFilter' => true,
                'filter_key' => 'customer'
            ),
            'id_customer_thread' => array(
                'title' => $this->l('Message'),
                'width' => 'auto',
                'callback' => 'showMessageLink',
                'search' => false
            ),
            'date_add' => array(
                'title' => $this->l('Date'),
                'width' => 'auto',
                'filter_key' => 'a!date_add'
            ),
            'id_quotation' => array(
                'title' => $this->l('Expiration date'),
                'width' => 'auto',
                'callback' => 'displayExpirationDate',
                'search' => false
            ),
            'id_cart' => array(
                'title' => $this->l('Total (tax incl., shipping excl.)'),
                'width' => 'auto',
                'callback' => 'getTotalCart',
                'search' => false
            ),
            'company_name' => array(
                'title' => $this->l('Company'),
                'width' => 'auto',
                'callback' => 'getCompanyName',
                'search' => false
            ),
            'status' => array(
                'title' => $this->l('Status'),
                'width' => 'auto',
                'callback' => 'getStatusName',
                'search' => false
            )
        );
    }

    public function setMedia($isNewTheme = false)
    {
        parent::setMedia();

        $this->addJqueryPlugin(array('autocomplete'));

        $this->addCSS(__PS_BASE_URI__ . 'modules/opartdevis/views/css/opartdevis_admin.css');
    }

    public function renderList()
    {
        OpartQuotation::deleteQuotationsWithoutCart();
        OpartQuotation::checkAllQuotations();

        $this->addRowAction('View');
        $this->addRowAction('Edit');
        $this->addRowAction('ViewCustomer');
        $this->addRowAction('ViewOrder');
        $this->addRowAction('CreateOrder');
        $this->addRowAction('SendToCustomer');
        $this->addRowAction('SendToAdmin');
        $this->addRowAction('Validate');
        $this->addRowAction('Delete');

        return parent::renderList();
    }

    public function getStatusName($status)
    {
        $status_name = array(
            $this->l('Validation needed'),
            $this->l('Validated'),
            $this->l('Ordered'),
            $this->l('Expired'),
        );

        return $status_name[$status];
    }

    public function displayExpirationDate($id_opartdevis)
    {
        if (!Configuration::get('OPARTDEVIS_VALIDITY')) {
            return "--";
        }

        $quotation = new OpartQuotation($id_opartdevis);

        $status = $quotation->getStatus();

        if ($status == OpartQuotation::VALIDATED || $status == OpartQuotation::EXPIRED) {
            return OpartQuotation::getExpirationDate($quotation->date_add);
        }
    }

    public function getTotalCart($id_cart)
    {
        $context = Context::getContext();
        $context->cart = new Cart($id_cart);

        if (!$context->cart->id) {
            return 'error';
        }

        $context->currency = new Currency((int)$context->cart->id_currency);
        $context->customer = new Customer((int)$context->cart->id_customer);

        return Cart::getTotalCart($id_cart, false, Cart::BOTH_WITHOUT_SHIPPING);
    }

    public static function getCompanyName($id_cart)
    {
        $cart = new Cart($id_cart);
        $address_invoice = new Address($cart->id_address_invoice);

        if ($address_invoice->company) {
            return $address_invoice->company;
        }

        return "--";
    }

    public function showMessageLink($id_customer_thread)
    {
        if ($id_customer_thread) {
            $token = Tools::getAdminToken('AdminCustomerThreads'
                .(int)Tab::getIdFromClassName('AdminCustomerThreads')
                .(int) $this->context->cookie->id_employee);
            $href = 'index.php?controller=AdminCustomerThreads&id_customer_thread='.$id_customer_thread.'&viewcustomer_thread&token='.$token;

            return '<a href="'.$href.'">'.$this->l('read').'</a>';
        }

        return '--';
    }

    public function displayEditLink($token, $id_opartdevis)
    {
        $quotation_status = (new OpartQuotation($id_opartdevis))
            ->getStatus();

        if ((int)$quotation_status === OpartQuotation::ORDERED) {
            return false;
        }

        $this->context->smarty->assign(array(
            'href' => self::$currentIndex.'&'.$this->identifier.'='.$id_opartdevis.'&updateopartdevis&token='.($token ? $token : $this->token),
            'confirm' => null,
            'action' => $this->l('Edit')
        ));

        return $this->context->smarty->fetch(
            _PS_MODULE_DIR_.'opartdevis/views/templates/admin/helpers/lists/list_action_edit.tpl'
        );
    }

    public function displayViewCustomerLink($token, $id_opartdevis)
    {
        $token = Tools::getAdminToken('AdminCustomers'
            .(int)Tab::getIdFromClassName('AdminCustomers')
            .(int)$this->context->cookie->id_employee);

        $quotation = new OpartQuotation($id_opartdevis);

        $this->context->smarty->assign(array(
            'href' => "index.php?controller=AdminCustomers&id_customer={$quotation->id_customer}&viewcustomer&token={$token}",
            'confirm' => null,
            'action' => $this->l('View customer')
        ));

        return $this->context->smarty->fetch(
            _PS_MODULE_DIR_.'opartdevis/views/templates/admin/helpers/lists/list_action_view_customer.tpl'
        );
    }

    public function displayViewOrderLink($token, $id_opartdevis)
    {
        $quotation = new OpartQuotation($id_opartdevis);

        if ($quotation->getStatus() != OpartQuotation::ORDERED || !$quotation->id_order) {
            return false;
        }

        $token = Tools::getAdminToken('AdminOrders'
            .(int)Tab::getIdFromClassName('AdminOrders')
            .(int)$this->context->cookie->id_employee);

        $quotation = new OpartQuotation($id_opartdevis);

        $this->context->smarty->assign(array(
            'href' => "index.php?controller=AdminOrders&id_order={$quotation->id_order}&vieworder&token={$token}",
            'confirm' => null,
            'action' => $this->l('View order')
        ));

        return $this->context->smarty->fetch(
            _PS_MODULE_DIR_.'opartdevis/views/templates/admin/helpers/lists/list_action_view_order.tpl'
        );
    }

    public function displayCreateOrderLink($token, $id_opartdevis)
    {
        $quotation = new OpartQuotation($id_opartdevis);

        if ($quotation->getStatus() != OpartQuotation::VALIDATED) {
            return false;
        }

        $token = Tools::getAdminToken('AdminOrders'
            .(int)Tab::getIdFromClassName('AdminOrders')
            .(int)$this->context->cookie->id_employee);

        $quotation = new OpartQuotation($id_opartdevis);

        $this->context->smarty->assign(array(
            'href' => "index.php?controller=AdminOrders&id_cart={$quotation->id_cart}&addorder&token={$token}",
            'confirm' => $this->l('Are you sure you want to create an order using this quotation ?'),
            'action' => $this->l('Create order')
        ));

        return $this->context->smarty->fetch(
            _PS_MODULE_DIR_.'opartdevis/views/templates/admin/helpers/lists/list_action_create_order_from_quotation.tpl'
        );
    }

    public function displayValidateLink($token, $id_opartdevis)
    {
        $quotation_status = (new OpartQuotation($id_opartdevis))
            ->getStatus();

        if ($quotation_status != OpartQuotation::NOT_VALIDATED) {
            return false;
        }

        $this->context->smarty->assign(array(
            'href' => self::$currentIndex.'&'.$this->identifier.'='.$id_opartdevis.'&validate&token='.($token ? $token : $this->token),
            'confirm' => $this->l('Are you sure you want to validate this quotation ?'),
            'action' => $this->l('Validate')
        ));

        return $this->context->smarty->fetch(
            _PS_MODULE_DIR_.'opartdevis/views/templates/admin/helpers/lists/list_action_validate_quotation.tpl'
        );
    }

    public function displaySendToCustomerLink($token, $id_opartdevis)
    {
        $this->context->smarty->assign(array(
            'href' => self::$currentIndex.'&'.$this->identifier.'='.$id_opartdevis.'&sendToCustomer&token='.($token ? $token : $this->token),
            'confirm' => $this->l('Are you sure you want to send this quotation to customer ?'),
            'action' => $this->l('Send to Customer'),
            'id_opartdevis' => $id_opartdevis
        ));

        return $this->context->smarty->fetch(
            _PS_MODULE_DIR_.'opartdevis/views/templates/admin/helpers/lists/list_action_send_email.tpl'
        );
    }

    public function displaySendToAdminLink($token, $id_opartdevis)
    {
        $this->context->smarty->assign(array(
            'href' => self::$currentIndex.'&'.$this->identifier.'='.$id_opartdevis.'&sendToAdmin&token='.($token != null ? $token : $this->token),
            'confirm' => $this->l('Are you sure you want to send this quotation to admin ?'),
            'action' => $this->l('Send to admin'),
            'id_opartdevis' => $id_opartdevis
        ));

        return $this->context->smarty->fetch(
            _PS_MODULE_DIR_.'opartdevis/views/templates/admin/helpers/lists/list_action_send_email.tpl'
        );
    }

    public function renderForm()
    {
        if (!($quotation = $this->loadObject(true))) {
            return;
        }

        if ((int)$quotation->getStatus() === OpartQuotation::ORDERED && Tools::getIsset('updateopartdevis')) {
            Tools::redirectAdmin(self::$currentIndex.'&error=101&token='.$this->token);
        }

        if (isset($quotation->id_customer) && is_numeric($quotation->id_customer)) {
            $this->context->customer = new Customer($quotation->id_customer);
        }

        if (isset($quotation->id_cart) && is_numeric($quotation->id_cart)) {
            $this->context->cart = new Cart($quotation->id_cart);
            $products = $this->context->cart->getProducts();
            $customized_datas = Product::getAllCustomizedDatas($this->context->cart->id);
            $this->context->currency = new Currency((int)$this->context->cart->id_currency);
        }

        if (isset($products) && count($products)) {
            foreach ($products as &$product) {
                $yourPrice = $this->getYourPrice(
                    $quotation->id_cart,
                    $product['id_product'],
                    $product['id_product_attribute'],
                    $quotation->id_customer,
                    true
                );

                $product['your_price'] = $yourPrice['price'];
                $product['specific_qty'] = $yourPrice['from_quantity'];

                $specific_price_output = null;

                //get catalog price
                $product['catalogue_price'] = Product::getPriceStatic(
                    $product['id_product'],
                    false,
                    $product['id_product_attribute'],
                    2,
                    null,
                    false,
                    true,
                    1,
                    false,
                    null,
                    null,
                    null,
                    $specific_price_output,
                    false,
                    false,
                    null,
                    false
                );

                if ($yourPrice == $product['catalogue_price'] || !$yourPrice) {
                    $use_customer_price = false;
                } else {
                    $use_customer_price = true;
                }

                $product['specific_price'] = Product::getPriceStatic(
                    $product['id_product'],
                    false,
                    $product['id_product_attribute'],
                    2,
                    null,
                    false,
                    true,
                    $product['cart_quantity'],
                    false,
                    $this->context->cart->id_customer,
                    $this->context->cart->id,
                    null,
                    $specific_price_output,
                    false,
                    true,
                    $this->context,
                    $use_customer_price
                );

                switch (Configuration::get('PS_ROUND_TYPE')) {
                    case Order::ROUND_TOTAL:
                        $product['total'] = $product['specific_price'] * $product['cart_quantity'];
                        break;
                    case Order::ROUND_LINE:
                        $product['total'] = Tools::ps_round(
                            $product['specific_price'] * $product['cart_quantity'],
                            _PS_PRICE_COMPUTE_PRECISION_
                        );
                        break;
                    case Order::ROUND_ITEM:
                    default:
                        $product['total'] = Tools::ps_round(
                                $product['specific_price'],
                                _PS_PRICE_COMPUTE_PRECISION_
                            ) * $product['cart_quantity'];
                        break;
                }

                $product['customization_datas_json'] = '';
            }
        }

        if (isset($customized_datas)) {
            foreach ($products as &$product) {
                if (!isset($customized_datas[$product['id_product']][$product['id_product_attribute']][$product['id_address_delivery']])) {
                    continue;
                }

                if ($this->isSeven) {
                    foreach ($customized_datas[$product['id_product']][$product['id_product_attribute']][$product['id_address_delivery']] as $customized_data) {
                        if ($customized_data['datas'][1][0]['id_customization'] == $product['id_customization']) {
                            $product['customization_datas'][] = $customized_data;
                        }
                    }
                } else {
                    foreach ($customized_datas[$product['id_product']][$product['id_product_attribute']][$product['id_address_delivery']] as $customized_data) {
                        $product['customization_datas'][] = $customized_data;
                    }
                }

                $product['customization_datas_json'] = addslashes(Tools::jsonEncode($product['customization_datas']));
            }
        }

        $this->context->smarty->assign(array(
            'quotation' => $quotation,
            'customer' => (isset($this->context->customer)) ? $this->context->customer : null,
            'cart' => (isset($this->context->cart)) ? $this->context->cart : null,
            'summary' => (isset($this->context->cart)) ? $this->context->cart->getSummaryDetails() : null,
            'products' => (isset($products)) ? $products : null,
            'upload_url' => _MODULE_DIR_.'opartdevis/uploads/'.Tools::getValue('id_opartdevis'),
            'upload_path' => _PS_MODULE_DIR_.'opartdevis/uploads/'.Tools::getValue('id_opartdevis'),
            'cart_rules' => $this->getAllCartRules(),
            'id_lang_default' => $this->context->language->id,
            'href' => self::$currentIndex.'&AdminOpartdevis&addopartdevis&token='.$this->token,
            'hrefCancel' => self::$currentIndex.'&token='.$this->token,
            'opart_token' => $this->token,
            'currency_sign' => $this->context->currency->sign,
            'json_carrier_list' => (isset($this->context->cart)) ? Tools::jsonEncode($quotation->createCarrierList($this->context->cart)) : Tools::jsonEncode(array()),
            'ajax_url' => $this->context->link->getAdminLink('AdminOpartdevis')
        ));

        $this->addJS(_MODULE_DIR_ . $this->name . '/views/js/admin.js');

        return $this->context->smarty->fetch(
            _PS_MODULE_DIR_.$this->name.'/views/templates/admin/form_quotation.tpl'
        );
    }

    private function getAllCartRules()
    {
        $sql =
            'SELECT c.id_cart_rule, c.code, c.description, cl.name
            FROM `'._DB_PREFIX_.'cart_rule` c
            LEFT JOIN `'._DB_PREFIX_.'cart_rule_lang` cl ON (
                c.id_cart_rule = cl.id_cart_rule
            )
            WHERE c.active = 1
                AND cl.id_lang = '.(int)$this->context->language->id.'
            GROUP BY c.id_cart_rule ORDER BY c.id_cart_rule';

        $rules = db::getInstance()->executeS($sql);

        return $rules;
    }

    public function getYourPrice($id_cart, $id_product, $id_product_attribute, $id_customer, $get_row = false)
    {
        $sql =
            'SELECT price,from_quantity
            FROM `'._DB_PREFIX_.'specific_price`
            WHERE id_cart = '.(int)$id_cart.'
                AND id_product = '.(int)$id_product.'
                AND id_product_attribute = '.(int)$id_product_attribute.'
                AND id_customer = '.(int)$id_customer;

        $row = db::getInstance()->getRow($sql);

        if ($get_row) {
            return $row;
        }

        return $row['price'];
    }

    private function postValidation()
    {
        if (Tools::isSubmit('submitAddOpartDevis')) {
            if (!Tools::getIsset('opart_devis_customer_id') || !Validate::isInt(Tools::getValue('opart_devis_customer_id'))) {
                $this->errors[] = Tools::displayError('Error : You have to choose a customer');
            }

            if (!Tools::getIsset('id_cart') || !Validate::isInt(Tools::getValue('id_cart'))) {
                $this->errors[] = Tools::displayError('Error : The cart id is not valid');
            }

            if (!Validate::isInt(Tools::getValue('id_opartdevis'))) {
                $this->errors[] = Tools::displayError('Error : The quotation id is not valid');
            }

            if (!Validate::isGenericName(Tools::getValue('quotation_name'))) {
                $this->errors[] = Tools::displayError('Error : The "Quotation Name" is not valid');
            }

            if (!Validate::isMessage(Tools::getValue('message_visible'))) {
                $this->errors[] = Tools::displayError('Error : The "Message Visible" is not valid');
            }

            if (isset($_FILES['fileopartdevis']) && ($_FILES['fileopartdevis']['name'][0] !== '')) {
                $count = count($_FILES['fileopartdevis']['name']);

                $file_max_size = 5242880;
                $allowed_extensions = array('.png', '.gif', '.jpg', '.jpeg', '.pdf',
                    '.doc', '.docx', '.txt', '.ppt', '.xls');

                for ($i = 0; $i < $count; $i++) {
                    $size = filesize($_FILES['fileopartdevis']['tmp_name'][$i]);
                    $extension = Tools::strtolower(strrchr($_FILES['fileopartdevis']['name'][$i], '.'));

                    if (!in_array($extension, $allowed_extensions)) {
                        $this->errors[] = sprintf(
                            Tools::displayError("Error : The type of the file %s is not valid"),
                            $_FILES['fileopartdevis']['name'][$i]
                        );
                    }

                    if ($size > $file_max_size) {
                        $this->errors[] = sprintf(
                            Tools::displayError('The %s file is too big'),
                            $_FILES['fileopartdevis']['name'][$i]
                        );
                    }
                }
            }
        }
    }

    private function uploadFiles($id_opartdevis)
    {
        $count = count($_FILES['fileopartdevis']['name']);
        $upload_dir = _PS_MODULE_DIR_.'opartdevis/uploads';

        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755);
        }

        $upload_dir .= DIRECTORY_SEPARATOR.$id_opartdevis;

        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0755);
        }

        for ($i = 0; $i < $count; $i++) {
            $file = $_FILES['fileopartdevis']['name'][$i];
            if (isset($_FILES['fileopartdevis']['error'][$i])) {
                move_uploaded_file(
                    $_FILES['fileopartdevis']['tmp_name'][$i],
                    $upload_dir.DIRECTORY_SEPARATOR.$file
                );
            }
        }
    }

    private function saveOpartDevis()
    {
        if (Tools::isSubmit('submitAddOpartDevis')) {
            $customer = new Customer(Tools::getValue('opart_devis_customer_id'));
            $cart = OpartQuotation::createCart(Tools::getValue('id_cart'));
            $id_opartdevis = Tools::getValue('id_opartdevis');

            $quotation = OpartQuotation::createQuotation(
                $cart,
                $customer,
                $id_opartdevis,
                Tools::getValue('quotation_name'),
                Tools::getValue('message_visible'),
                null,
                false
            );

            if (isset($_FILES['fileopartdevis']) && ($_FILES['fileopartdevis']['name'][0] !== '')) {
                $this->uploadFiles($quotation->id);
            }

            // set confirmation message (3 for creation, 4 for update) - see AdminController class
            $conf = ($id_opartdevis) ? 4 : 3;

            Tools::redirectAdmin(self::$currentIndex.'&conf='.$conf.'&token='.$this->token);
        }
    }

    public function postProcess()
    {
        // save or update quotation
        if (Tools::isSubmit('submitAddOpartDevis')) {
            $this->postValidation();

            if (!count($this->errors)) {
                $this->saveOpartDevis();
            }

            return $this->renderForm();
        }

        // send quotation to Customer by e-mail
        if (Tools::isSubmit('sendToCustomer')) {
            $this->processSendToCustomer(Tools::getValue('id_opartdevis'));
        }

        // send quotation to administrator by e-mail
        if (Tools::isSubmit('sendToAdmin')) {
            $this->processSendToAdmin(Tools::getValue('id_opartdevis'));
        }

        // validate quotation
        if (Tools::isSubmit('validate')) {
            $this->processValidation(Tools::getValue('id_opartdevis'));
        }

        // view quotation file (PDF)
        if (Tools::isSubmit('view'.$this->table)) {
            $this->processView(Tools::getValue('id_opartdevis'));
        }

        // Create quotation based on cart (from adminCarts controller)
        if (Tools::getIsset('transformThisCartId')) {
            $this->processTransformCartToQuotation(Tools::getValue('transformThisCartId'));
        }

        return parent::postProcess();
    }

    public function ajaxProcessLoadCarrierList()
    {
        die(Tools::jsonEncode(
            (new OpartQuotation)->getCarriers(true)
        ));
    }

    public function ajaxProcessSearchCustomer()
    {
        $query = Tools::getValue('q', false);

        $sql =
            'SELECT c.`id_customer`, c.`firstname`, c.`lastname`, c.`email`
            FROM `'._DB_PREFIX_.'customer` c
            WHERE (
                c.firstname LIKE "%'.pSQL($query).'%"
                OR c.lastname LIKE "%'.pSQL($query).'%"
                OR c.email LIKE "%'.pSQL($query).'%"
            )
            GROUP BY c.id_customer';

        $customers = Db::getInstance()->executeS($sql);

        die(Tools::jsonEncode(
            $customers
        ));
    }

    public function ajaxProcessSearchProduct()
    {
        $query = Tools::getValue('q', false);
        $id_customer = Tools::getIsset('id_customer') ? Tools::getValue('id_customer') : null;

        $sql =
            'SELECT p.`id_product`, pl.`link_rewrite`, p.`reference`, p.`price`, pl.`name`
            FROM `'._DB_PREFIX_.'product` p
            LEFT JOIN `'._DB_PREFIX_.'product_lang` pl ON (
                pl.id_product = p.id_product
                AND pl.id_lang = '.(int)$this->context->language->id.'
            )
            WHERE (
                (pl.name LIKE "%'.pSQL($query).'%"
                OR p.reference LIKE "%'.pSQL($query).'%")
                AND p.active = 1
                AND p.available_for_order = 1
            )
            GROUP BY p.id_product';

        $products = Db::getInstance()->executeS($sql);

        $formated_products = array();
        foreach ($products as $product) {
            $product['name'] = $product['name'].' ['.$product['reference'].']';

            $specific_price_output = null;

            $price = Product::getPriceStatic(
                $product['id_product'],
                false,
                null,
                4,
                null,
                false,
                true,
                1,
                false,
                null,
                null,
                null,
                $specific_price_output,
                false,
                true,
                null,
                false
            );

            $reduced_price = Product::getPriceStatic(
                $product['id_product'],
                false,
                null,
                4,
                null,
                false,
                true,
                1,
                false,
                $id_customer,
                null,
                0,
                $specific_price_output,
                false,
                true,
                $this->context,
                true
            );

            $formated_products[] = array(
                'id_product' => $product['id_product'],
                'name' => $product['name'],
                'price' => $price,
                'reduced_price' => $reduced_price
            );
        }

        die(Tools::jsonEncode(
            $formated_products
        ));
    }

    public function ajaxProcessAddCartRule()
    {
        $id_cart = (int)Tools::getValue('id_cart');
        $id_cart_rule = (int)Tools::getValue('id_cart_rule');

        $cart = OpartQuotation::createCart($id_cart);
        $cart->getProducts();

        $this->context->cart = $cart;

        $cart_rule = new CartRule($id_cart_rule);

        $isNotValid = $cart_rule->checkValidity($this->context);

        if ($isNotValid) {
            die(Tools::jsonEncode(
                $isNotValid
            ));
        } else {
            die(Tools::jsonEncode(
                $cart_rule
            ));
        }
    }

    public function ajaxProcessDeleteCartRule()
    {
        $id_cart = Tools::getValue('id_cart');
        $id_cart_rule = Tools::getValue('id_cart_rule');

        $cart = new Cart($id_cart);

        $cart->removeCartRule($id_cart_rule);

        die(Tools::jsonEncode(
            $cart->update()
        ));
    }

    public function ajaxProcessLoadProductCombinations()
    {
        $id_product = Tools::getValue('id_product');

        $product = new Product($id_product);
        $combinations = OpartQuotation::getAttributesResume(
            $product->id,
            $this->context->language->id
        );

        if (empty($combinations)) {
            die();
        }

        $formated_combinations = array();
        foreach ($combinations as $combination) {
            $formated_combinations[$combination['id_product_attribute']] = $combination;
        }

        die(Tools::jsonEncode(
            $formated_combinations
        ));
    }

    public function ajaxProcessGetTotalCart()
    {
        $cart = OpartQuotation::createCart((int)Tools::getValue('id_cart'));

        $summary = $cart->getSummaryDetails(null, true);
        $summary['id_cart'] = $cart->id;
        $summary["group_tax_method"] = false;

        $customer = new Customer($cart->id_customer);

        if (function_exists('getPriceDisplayMethod')) {
            $summary["group_tax_method"] = (bool)Group::getPriceDisplayMethod($customer->id_default_group);
        }

        die(Tools::jsonEncode(
            $summary
        ));
    }

    public function ajaxProcessDeleteUploadedFile()
    {
        $directory = Tools::getValue('upload_id');
        $file = Tools::getValue('upload_name');

        Tools::deleteFile($directory.'/'.$file);

        die(Tools::jsonEncode(
            "{$file} successfully deleted..."
        ));
    }

    public function ajaxProcessDeleteSpecificPrice()
    {
        $id_cart = Tools::getValue('id_cart');

        die(Tools::jsonEncode(
            OpartQuotation::deleteSpecificPrice($id_cart)
        ));
    }

    public function ajaxProcessGetAddresses()
    {
        $id_customer = Tools::getValue('id_customer', false);

        $sql =
            'SELECT  a.`alias`, a.`id_address`, a.`lastname`, a.`firstname`, a.`lastname`, a.`company`,
            a.`address1`, a.`address2`, a.`postcode`, a.`city`, cl.`name` as `country_name`
            FROM `'._DB_PREFIX_.'address` a
            LEFT JOIN `'._DB_PREFIX_.'country_lang` cl ON (
                a.`id_country` = cl.`id_country`
                AND cl.id_lang = '.(int)$this->context->language->id.'
            )
            WHERE a.id_customer = '.(int)$id_customer.' AND a.deleted = 0 AND a.active = 1';

        $addresses = Db::getInstance()->executeS($sql);

        if (!count($addresses)) {
            die(Tools::jsonEncode(array(
                'return' => false,
                'error' => $this->module->l('No address found')
            )));
        }

        die(Tools::jsonEncode(array(
            'return' => true,
            'addresses' => $addresses
        )));
    }

    public function ajaxProcessGetReducedPrices()
    {
        $id_cart = (int)Tools::getValue('id_cart');
        $id_customer = (int)Tools::getValue('opart_devis_customer_id', false);
        $who_is_list = Tools::getValue('whoIs');
        $attribute_list = Tools::getValue('add_attribute');
        $qty_list = Tools::getValue('add_prod');
        $specific_price_list = Tools::getValue('specific_price');

        // get cart and currency
        $cart = OpartQuotation::createCart($id_cart);
        $this->context->currency = new Currency($cart->id_currency);

        if (empty($who_is_list)) {
            die(Tools::jsonEncode(array(
                'return' => false,
                'error' => $this->module->l('No product found')
            )));
        }

        $reduced_prices = array();
        foreach ($who_is_list as $key => $id_product) {
            $id_attribute = (isset($attribute_list[$key])) ? $attribute_list[$key] : 0;

            $qty = $qty_list[$key];

            $your_price = ($specific_price_list[$key]) ? $specific_price_list[$key] : $this->getYourPrice($id_cart, $id_product, $id_attribute, $id_customer);

            $specific_price_output = null;
            $price = Product::getPriceStatic(
                $id_product,
                false,
                $id_attribute,
                2,
                null,
                false,
                true,
                1,
                false,
                null,
                null,
                null,
                $specific_price_output,
                false,
                false,
                null,
                false
            );

            if ($your_price == $price || !$your_price) {
                $use_customer_price = false;
            } else {
                $use_customer_price = true;
            }

            $reduced_price = Product::getPriceStatic(
                $id_product,
                false,
                $id_attribute,
                2,
                null,
                false,
                true,
                $qty,
                false,
                $id_customer,
                $cart->id,
                0,
                $specific_price_output,
                false,
                true,
                $this->context,
                $use_customer_price
            );

            $computed_id = $id_product.'_'.$id_attribute;

            switch (Configuration::get('PS_ROUND_TYPE')) {
                case Order::ROUND_TOTAL:
                    $reduced_prices[$key]['total'] = $reduced_price * $qty;
                    break;
                case Order::ROUND_LINE:
                    $reduced_prices[$key]['total'] = Tools::ps_round(
                        $reduced_price * $qty,
                        _PS_PRICE_COMPUTE_PRECISION_
                    );
                    break;
                case Order::ROUND_ITEM:
                default:
                    $reduced_prices[$key]['total'] = Tools::ps_round(
                            $reduced_price,
                            _PS_PRICE_COMPUTE_PRECISION_
                        ) * $qty;
                    break;
            }

            $reduced_prices[$key]['computed_id'] = $computed_id;
            $reduced_prices[$key]['stock_available'] = StockAvailable::getQuantityAvailableByProduct($id_product, $id_attribute);
            $reduced_prices[$key]['real_price'] = $price;
            $reduced_prices[$key]['reduced_price'] = $reduced_price;
            $reduced_prices[$key]['your_price'] = $your_price;
        }

        die(Tools::jsonEncode(array(
            'return' => true,
            'id_cart' => $cart->id,
            'reduced_prices' => $reduced_prices,
        )));
    }

    public function processSendToCustomer($id_opartdevis)
    {
        $quotation = new OpartQuotation($id_opartdevis);

        if (!Validate::isLoadedObject($quotation)
            || !$quotation->sendToCustomer()
        ) {
            $this->errors[] = Tools::displayError('Error : An error occured while sending the quotation to the customer');
        }

        Tools::redirectAdmin(self::$currentIndex.'?conf=101&token='.$this->token);
    }

    public function processSendToAdmin($id_opartdevis)
    {
        $quotation = new OpartQuotation($id_opartdevis);

        if (!Validate::isLoadedObject($quotation)
            || !$quotation->sendToAdmin()
        ) {
            $this->errors[] = Tools::displayError('Error : An error occured while sending the quotation to the administrator');
        }

        Tools::redirectAdmin(self::$currentIndex.'?conf=102&token='.$this->token);
    }

    public function processValidation($id_opartdevis)
    {
        $quotation = new OpartQuotation($id_opartdevis);

        if (!Validate::isLoadedObject($quotation)
            || !$quotation->validate()
        ) {
            $this->errors[] = Tools::displayError('Error : An error occured while validating the quotation');
        }

        Tools::redirectAdmin(self::$currentIndex.'?conf=103&token='.$this->token);
    }

    public function processView($id_opartdevis)
    {
        $quotation = new OpartQuotation($id_opartdevis);

        if (!Validate::isLoadedObject($quotation)) {
            $this->errors[] = Tools::displayError('Error : An error occured while loading the quotation');
        }

        $quotation->renderPdf(true);
    }

    public function processTransformCartToQuotation($id_cart)
    {
        $cart = new Cart($id_cart);
        $customer = new Customer($cart->id_customer);

        Context::getContext()->cart = $cart;
        Context::getContext()->customer = $customer;

        $quotation = OpartQuotation::createQuotation($cart, $customer);

        if (!Validate::isLoadedObject($quotation)) {
            $this->errors[] = Tools::displayError('Error : An error occured while loading the quotation');
        }

        Tools::redirectAdmin(self::$currentIndex.'&id_opartdevis='.$quotation->id.'&updateopartdevis&token='.$this->token);
    }

    public function processDelete()
    {
        if (Validate::isLoadedObject($quotation = $this->loadObject())) {
            $cart = new Cart($quotation->id_cart);

            $id_order = Order::getOrderByCartId($cart->id);

            if ($id_order) {
                $this->errors[] = Tools::displayError('Error : Can\'t delete this quotation because it has been ordered');
            }
        }

        return parent::processDelete();
    }
}
