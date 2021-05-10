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
*  International Registred Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

require_once _PS_MODULE_DIR_.'pst_bannercmsblock/classes/PSTBannerCmsBlock.php';

class Pst_Bannercmsblock extends Module implements WidgetInterface
{
    private $templateFile;

    public function __construct()
    {
        $this->name = 'pst_bannercmsblock';
        $this->tab = 'front_office_features';
		$this->author = 'Thementic';
        $this->version = '1.0.0';
        $this->need_instance = 0;

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->trans('CMS Banner Block', array(), 'Modules.PSTBannerCmsBlock');
        $this->description = $this->trans('Add CMS Banner on your store.', array(), 'Modules.PSTBannerCmsBlock');

        $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => _PS_VERSION_);

        $this->templateFile = 'module:pst_bannercmsblock/views/templates/hook/pst_bannercmsblock.tpl';
    }

    public function install()
    {
        return  parent::install() &&
            $this->installDB() &&
			$this->registerHook('displayHeader') &&
            $this->registerHook('displayHome');
    }

    public function uninstall()
    {
        return parent::uninstall() && $this->uninstallDB();
    }

    public function installDB()
    {
        $return = true;
        $return &= Db::getInstance()->execute('
                CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'pstbannercmsblockinfo` (
                `id_pstbannercmsblockinfo` INT UNSIGNED NOT NULL AUTO_INCREMENT,
                `id_shop` int(10) unsigned DEFAULT NULL,
                PRIMARY KEY (`id_pstbannercmsblockinfo`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8 ;'
        );

        $return &= Db::getInstance()->execute('
                CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'pstbannercmsblockinfo_lang` (
                `id_pstbannercmsblockinfo` INT UNSIGNED NOT NULL,
                `id_lang` int(10) unsigned NOT NULL ,
                `text` text NOT NULL,
                PRIMARY KEY (`id_pstbannercmsblockinfo`, `id_lang`)
            ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8 ;'
        );

        return $return;
    }

    public function uninstallDB($drop_table = true)
    {
        $ret = true;
        if ($drop_table) {
            $ret &=  Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'pstbannercmsblockinfo`') && Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'pstbannercmsblockinfo_lang`');
        }

        return $ret;
    }

    public function getContent()
    {
        $output = '';

        if (Tools::isSubmit('savepst_bannercmsblock')) {
            if (!Tools::getValue('text_'.(int)Configuration::get('PS_LANG_DEFAULT'), false)) {
                $output = $this->displayError($this->trans('Please fill out all fields.', array(), 'Admin.Notifications.Error')) . $this->renderForm();
            } else {
                $update = $this->processSavePSTBannerCmsBlock();

                if (!$update) {
                    $output = '<div class="alert alert-danger conf error">'
                        .$this->trans('An error occurred on saving.', array(), 'Admin.Notifications.Error')
                        .'</div>';
                }

                $this->_clearCache($this->templateFile);
            }
        }

        return $output.$this->renderForm();
    }

   public function processSavePSTBannerCmsBlock()
    {
        $pstbannercmsblockinfo = new PSTBannerCmsBlock(Tools::getValue('id_pstbannercmsblockinfo', 1));

        $text = array();
        $languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            $text[$lang['id_lang']] = Tools::getValue('text_'.$lang['id_lang']);
        }

        $pstbannercmsblockinfo->text = $text;
		
        
		if (Shop::isFeatureActive() && !$pstbannercmsblockinfo->id_shop) {
            $saved = true;
            $shop_ids = Shop::getShops();
            foreach ($shop_ids as $id_shop) {
                $pstbannercmsblockinfo->id_shop = $id_shop;
                $saved &= $pstbannercmsblockinfo->add();
            }
        } else {
			$pstbannercmsblockinfo->id_shop = Shop::getContextShopID();
			$saved = $pstbannercmsblockinfo->save();
        }

        return $saved;
    }

    protected function renderForm()
    {
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

        $fields_form = array(
            'tinymce' => true,
            'legend' => array(
                'title' => $this->trans('CMS block', array(), 'Modules.CustomText'),
            ),
            'input' => array(
                'id_pstbannercmsblockinfo' => array(
                    'type' => 'hidden',
                    'name' => 'id_pstbannercmsblockinfo'
                ),
                'content' => array(
                    'type' => 'textarea',
                    'label' => $this->trans('Text block', array(), 'Modules.CustomText'),
                    'lang' => true,
                    'name' => 'text',
                    'cols' => 40,
                    'rows' => 10,
                    'class' => 'rte',
                    'autoload_rte' => true,
                ),
            ),
            'submit' => array(
                'title' => $this->trans('Save', array(), 'Admin.Actions'),
            ),
            'buttons' => array(
                array(
                    'href' => AdminController::$currentIndex.'&configure='.$this->name.'&token='.Tools::getAdminTokenLite('AdminModules'),
                    'title' => $this->trans('Back to list', array(), 'Admin.Actions'),
                    'icon' => 'process-icon-back'
                )
            )
        );

        if (Shop::isFeatureActive() && Tools::getValue('id_pstbannercmsblockinfo') == false) {
            $fields_form['input'][] = array(
                'type' => 'shop',
                'label' => $this->trans('Shop association', array(), 'Admin.Global'),
                'name' => 'checkBoxShopAsso_theme'
            );
        }


        $helper = new HelperForm();
        $helper->module = $this;
        $helper->name_controller = 'pst_bannercmsblock';
        $helper->identifier = $this->identifier;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        foreach (Language::getLanguages(false) as $lang) {
            $helper->languages[] = array(
                'id_lang' => $lang['id_lang'],
                'iso_code' => $lang['iso_code'],
                'name' => $lang['name'],
                'is_default' => ($default_lang == $lang['id_lang'] ? 1 : 0)
            );
        }

        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;
        $helper->toolbar_scroll = true;
        $helper->title = $this->displayName;
        $helper->submit_action = 'savepst_bannercmsblock';

        $helper->fields_value = $this->getFormValues();

        return $helper->generateForm(array(array('form' => $fields_form)));
    }

    public function getFormValues()
    {
        $fields_value = array();
        $id_pstbannercmsblockinfo = 1;

        foreach (Language::getLanguages(false) as $lang) {
            $pstbannercmsblockinfo = new PSTBannerCmsBlock((int)$id_pstbannercmsblockinfo);
            $fields_value['text'][(int)$lang['id_lang']] = $pstbannercmsblockinfo->text[(int)$lang['id_lang']];
        }

        $fields_value['id_pstbannercmsblockinfo'] = $id_pstbannercmsblockinfo;

        return $fields_value;
    }
	public function hookdisplayHeader($params)
    {
        $this->context->controller->registerStylesheet('modules-pst_bannercmsblock', 'modules/'.$this->name.'/views/css/pst_bannercmsblock.css', ['media' => 'all', 'priority' => 150]);        
    }
    public function renderWidget($hookName = null, array $configuration = [])
    {
        if (!$this->isCached($this->templateFile, $this->getCacheId('pst_bannercmsblock'))) {
            $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));
        }

        return $this->fetch($this->templateFile, $this->getCacheId('pst_bannercmsblock'));
    }
    public function getWidgetVariables($hookName = null, array $configuration = [])
    {
        $sql = 'SELECT r.`id_pstbannercmsblockinfo`, r.`id_shop`, rl.`text`
            FROM `'._DB_PREFIX_.'pstbannercmsblockinfo` r
            LEFT JOIN `'._DB_PREFIX_.'pstbannercmsblockinfo_lang` rl ON (r.`id_pstbannercmsblockinfo` = rl.`id_pstbannercmsblockinfo`)
            WHERE `id_lang` = '.(int)$this->context->language->id.' AND  `id_shop` = '.(int)$this->context->shop->id;

        return array(
            'pstbannercmsblockinfos' => Db::getInstance()->getRow($sql),
			'image_url' => $this->context->link->getMediaLink(_MODULE_DIR_.'pst_bannercmsblock/views/img'),
        );
    }
	
}
