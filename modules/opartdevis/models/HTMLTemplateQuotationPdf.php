<?php
/**
 * Prestashop module : OpartDevis
 *
 * @author Olivier CLEMENCE <manit4c@gmail.com>
 * @copyright  Op'art
 * @license Tous droits réservés / Le droit d'auteur s'applique (All rights reserved / French copyright law applies)
 */

class HTMLTemplateQuotationPdf extends HTMLTemplate
{
    public $cart;
    public $quotation;
    public $context;
    private $isSeven;

    public function __construct($quotation, $smarty)
    {
        $this->module = Module::getInstanceByName('opartdevis');

        $this->quotation = $quotation;
        $this->smarty = $smarty;

        $this->context = Context::getContext();
        $this->cart = new Cart($quotation->id_cart);
        $this->shop = new Shop(Context::getContext()->shop->id);
        $this->context->language = new Language($this->cart->id_lang);

        $this->isSeven = Tools::version_compare(_PS_VERSION_, '1.7', '>=') ? true : false;

        $this->context->currency = new Currency((int)$this->cart->id_currency);
    }

    public function getContent()
    {
        $max_prod_page = ((int)Configuration::get('OPARTDEVIS_PROD_PAGE') == 0) ? 13 : (int)Configuration::get('OPARTDEVIS_PROD_PAGE');
        $max_prod_first_page = ((int)Configuration::get('OPARTDEVIS_PROD_FIRST') == 0) ? 8 : (int)Configuration::get('OPARTDEVIS_PROD_FIRST');

        $priceDisplay = ((int)Configuration::get('PS_TAX') == 0) ? 1 : Product::getTaxCalculationMethod((int)$this->cart->id_customer);
        $customized_datas = Product::getAllCustomizedDatas($this->cart->id);

        $this->smarty->assign(array(
            'quotation' => $this->quotation,
            'cart' => $this->cart,
            'customizedDatas' => $customized_datas,
            'message_visible' => explode(PHP_EOL, $this->quotation->message_visible),
            'validity' => (int)Configuration::get('OPARTDEVIS_VALIDITY'),
            'priceDisplay' => $priceDisplay,
            'use_taxes' => (int)Configuration::get('PS_TAX'),
            'validationText' => explode(PHP_EOL, Configuration::get('OPARTDEVIS_VALIDATION_TEXT', $this->context->language->id)),
            'goodforagrementText' => explode(PHP_EOL, Configuration::get('OPARTDEVIS_AGREMENT_TEXT', $this->context->language->id)),
            'maxProdFirstPage' => $max_prod_first_page,
            'maxProdPage' => $max_prod_page,
            'pdf_shopping_cart_template' => $this->opartdevisGetTemplate('shopping-cart-product-line'),
            'tax_details' => $this->quotation->getDetailsTax($this->cart),
        ));

        return $this->smarty->fetch($this->opartdevisGetTemplate('quotation'));
    }

    public function getHeader()
    {
        $this->assignCommonHeaderData();

        $this->smarty->assign(array(
            'header' => $this->module->l('Quotation', 'htmltemplatequotationpdf'),
            'title' => '# '.$this->quotation->id,
            'date' => Tools::displayDate($this->cart->date_upd),
        ));

        return $this->smarty->fetch($this->getTemplate('header'));
    }

    public function getFooter()
    {
        $shop_address = $this->getShopAddress();

        $this->smarty->assign(array(
            'available_in_your_account' => $this->available_in_your_account,
            'shop_address' => $shop_address,
            'shop_fax' => Configuration::get('PS_SHOP_FAX', null, null, (int)$this->cart->id_shop),
            'shop_phone' => Configuration::get('PS_SHOP_PHONE', null, null, (int)$this->cart->id_shop),
            'shop_details' => Configuration::get('PS_SHOP_DETAILS', null, null, (int)$this->cart->id_shop),
            'free_text' => Configuration::get('PS_INVOICE_FREE_TEXT', (int)Context::getContext()->language->id, null, (int)$this->cart->id_shop)
        ));

        return $this->smarty->fetch($this->opartdevisGetTemplate('footer'));
    }

    public function getFilename()
    {
        return $this->module->l('quotation', 'htmltemplatequotationpdf').'_'.$this->quotation->id.'.pdf';
    }

    public function getBulkFilename()
    {
        return $this->module->l('quotation', 'htmltemplatequotationpdf').'.pdf';
    }

    /**
     * If the template is not present in the theme directory, it will return the default template
     * in opartdevis/views/templates/front/pdf/ directory
     *
     * @param $template_name
     *
     * @return string
     */
    protected function opartdevisGetTemplate($template_name)
    {
        $template = false;
        $default_template = rtrim(_PS_MODULE_DIR_, DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR.'opartdevis/views/templates/front/pdf'.DIRECTORY_SEPARATOR.$template_name.'.tpl';

        if ($this->isSeven) {
            $overridden_template = _PS_ALL_THEMES_DIR_.$this->shop->theme->getName().DIRECTORY_SEPARATOR.'modules/opartdevis/views/templates/front/pdf'.DIRECTORY_SEPARATOR.$template_name.'.tpl';
        } else {
            $overridden_template = _PS_ALL_THEMES_DIR_.$this->shop->getTheme().DIRECTORY_SEPARATOR.'modules/opartdevis/views/templates/front/pdf'.DIRECTORY_SEPARATOR.$template_name.'.tpl';
        }

        if (file_exists($overridden_template)) {
            $template = $overridden_template;
        } elseif (file_exists($default_template)) {
            $template = $default_template;
        }

        return $template;
    }
}
