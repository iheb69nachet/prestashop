<?php
/**
* 2007-2020 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2020 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    # module validation
    exit;
}

class StProductSearch extends Module
{

    public function __construct()
    {
        $this->name = 'stproductsearch';
        $this->tab = 'search_filter';
        $this->version = '2.0.0';
        $this->author = 'Thementic';
        $this->need_instance = 0;
		$this->controllers = array('productsearch');

        parent::__construct();

        $this->displayName = $this->l('Advanced product search');
        $this->description = $this->l('Adds advanced product search field to your website.');
        $this->ps_versions_compliancy = array('min' => '1.6', 'max' => _PS_VERSION_);
    }

    public function install()
    {
        if (!parent::install() || !$this->registerHook('top') || !$this->registerHook('displayNavFullWidth') || !$this->registerHook('header') || !$this->registerHook('displayMobileTopSiteMap')) {
            return false;
        }
        $this->_installDataSample();
        return true;
    }

    private function _installDataSample()
    {
        if (!file_exists(_PS_MODULE_DIR_.'appagebuilder/libs/StDataSample.php')) {
            return false;
        }
        require_once( _PS_MODULE_DIR_.'appagebuilder/libs/StDataSample.php' );

        $sample = new Datasample(1);
        return $sample->processImport($this->name);
    }

    public function hookdisplayMobileTopSiteMap($params)
    {
        $this->smarty->assign(array('hook_mobile' => true, 'instantsearch' => false));
        $params['hook_mobile'] = true;
        return $this->hookTop($params);
    }

    public function hookHeader($params)
    {
		
        // $this->context->controller->addCSS(($this->_path).'assets/stsearch.css', 'all');
		$this->context->controller->registerStylesheet('modules-stsearch', 'modules/'.$this->name.'/css/stsearch.css', ['media' => 'all', 'priority' => 150]);
		// $this->context->controller->addCSS(_THEME_CSS_DIR_.'product_list.css');
		$this->context->controller->registerStylesheet('modules-product_list', _THEME_CSS_DIR_.'product_list.css', ['media' => 'all', 'priority' => 150]);
		// print_r(Configuration::get('PS_SEARCH_AJAX'));die();
        if (Configuration::get('PS_SEARCH_AJAX')) {
            // $this->context->controller->addJS(($this->_path).'assets/jquery.autocomplete_productsearch.js');		
			$this->context->controller->registerJavascript('modules-productsearchjs', 'modules/'.$this->name.'/js/jquery.autocomplete_productsearch.js', ['position' => 'bottom', 'priority' => 150]);
            // $this->context->controller->addCSS(($this->_path).'assets/jquery.autocomplete_productsearch.css');
			$this->context->controller->registerStylesheet('modules-autocomplete_productsearch', 'modules/'.$this->name.'/css/jquery.autocomplete_productsearch.css', ['media' => 'all', 'priority' => 150]);
            Media::addJsDef(
				array(
					'st_search_url' => $this->context->link->getModuleLink('stproductsearch', 'productsearch', array(), Tools::usingSecureMode()),
					'ajaxsearch' => Configuration::get('PS_SEARCH_AJAX'),
				)
			);
			//DONGND::
			// Media::addJsDef(array('ajaxsearch' => Configuration::get('PS_SEARCH_AJAX')));
            // $this->context->controller->addJS(($this->_path).'assets/stsearch.js');
			$this->context->controller->registerJavascript('modules-stsearchjs', 'modules/'.$this->name.'/js/stsearch.js', ['position' => 'bottom', 'priority' => 150]);
        }
    }

    public function hookLeftColumn($params)
    {
        if (Tools::getValue('search_query') || !$this->isCached('stsearch.tpl', $this->getCacheId())) {

            $this->calculHookCommon($params);
			$selectedCateName = '';
			if (Tools::getValue('cate') && Tools::getValue('cate') != '' && $category_obj = new Category(Tools::getValue('cate')))
			{				
				$selectedCateName = $category_obj->name;
			}
            $this->smarty->assign(array(
                'blocksearch_type' => 'block',
                'search_query' => (string)Tools::getValue('search_query'),
                'selectedCate' => (string)Tools::getValue('cate'),
				'selectedCateName' => $selectedCateName,
                'cates' => $this->getCategories($this->context->language->id),
            ));
        }
        Media::addJsDef(array('blocksearch_type' => 'block'));
//		$search_query = (string)Tools::getValue('search_query');
        return $this->display(__FILE__, 'stsearch.tpl', Tools::getValue('search_query') ? null : $this->getCacheId());
    }

    public function hookTop($params)
    {
		// print_r('test');die();
        if (Tools::getValue('search_query') || !$this->isCached('stsearch_top.tpl', $this->getCacheId())) {
            $this->calculHookCommon($params);
			$selectedCateName = '';
			if (Tools::getValue('cate') && Tools::getValue('cate') != '' && $category_obj = new Category(Tools::getValue('cate'),$this->context->language->id))
			{				
				$selectedCateName = $category_obj->name;
			}
			// print_r($selectedCateName);die();
            $this->smarty->assign(array(
                'blocksearch_type' => 'top',
                'search_query' => (string)Tools::getValue('search_query'),
                'selectedCate' => (string)Tools::getValue('cate'),
				'selectedCateName' => $selectedCateName,
                'cates' => $this->getCategories($this->context->language->id),
            ));
        }
		// print_r('aaaaaaaaa');die();
        // Media::addJsDef(array('blocksearch_type' => 'top'));
//		$search_query = (string)Tools::getValue('search_query');
        return $this->display(__FILE__, 'stsearch_top.tpl', Tools::getValue('search_query') ? null : $this->getCacheId());
    }

    public function hookDisplayNav($params)
    {
        return $this->hookTop($params);
    }
	  public function hookdisplayNavFullWidth($params)
    {
        return $this->hookTop($params);
    }

    private function calculHookCommon($params)
    {
        $this->smarty->assign(array(
            'ENT_QUOTES' => ENT_QUOTES,
            'search_ssl' => Tools::usingSecureMode(),
            'ajaxsearch' => Configuration::get('PS_SEARCH_AJAX'),
			// 'ajaxsearch' => 1,
            'instantsearch' => Configuration::get('PS_INSTANT_SEARCH'),
            'self' => dirname(__FILE__),
        ));

        unset($params);
        return true;
    }

    /**
     * copy from function hookFooter of class "modules/blockcategories/blockcategories"
     */
    public function getCategories($id_lang = false, $active = true)
    {
        $maxdepth = Configuration::get('BLOCK_CATEG_MAX_DEPTH');
        // Get all groups for this customer and concatenate them as a string: "1,2,3..."
        $groups = implode(', ', Customer::getGroupsStatic((int)$this->context->customer->id));
        $sql = '
				SELECT DISTINCT c.id_parent, c.id_category, cl.name, cl.description, cl.link_rewrite
				FROM `'._DB_PREFIX_.'category` c
				'.Shop::addSqlAssociation('category', 'c').'
				LEFT JOIN `'._DB_PREFIX_.'category_lang` cl ON (c.`id_category` = cl.`id_category` AND cl.`id_lang` = '.(int)$this->context->language->id.Shop::addSqlRestrictionOnLang('cl').')
				LEFT JOIN `'._DB_PREFIX_.'category_group` cg ON (cg.`id_category` = c.`id_category`)
				WHERE (c.`active` = 1 OR c.`id_category` = 1)
				'.((int)($maxdepth) != 0 ? ' AND `level_depth` <= '.(int)($maxdepth) : '').'
				AND cg.`id_group` IN ('.pSQL($groups).')
				ORDER BY `level_depth` ASC, '.(Configuration::get('BLOCK_CATEG_SORT') ? 'cl.`name`' : 'category_shop.`position`').' '.(Configuration::get('BLOCK_CATEG_SORT_WAY') ? 'DESC' : 'ASC');

        unset($id_lang);
        unset($active);
        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
    }
}
