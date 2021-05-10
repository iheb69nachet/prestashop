<?php
/**
* The module helps to integrate Database Management Tool Adminer
*
* NOTICE OF LICENSE
* 
* Each copy of the software must be used for only one production website, it may be used on additional
* test servers. You are not permitted to make copies of the software without first purchasing the
* appropriate additional licenses. This license does not grant any reseller privileges.
* 
* @author    Shahab
* @copyright 2007-2019 ShahabFK Enterprises
* @license   Prestashop Commercial Module License
*/

if (!defined('_PS_VERSION_'))
    exit;
header('X-Frame-Options: GOFORIT'); 

if ( _PS_VERSION_ >= '1.7') {
    include_once _PS_MODULE_DIR_.'sfkdbmanage/classes/Sfkdbmanage.php';
}

class Sfkdbmanage extends Module {

    public function __construct() {
        
        $this->bootstrap = true;
        $this->name = 'sfkdbmanage';
        $this->tab = 'front_office_features';
        $this->version = '1.1.0';
        $this->author = 'Shahab';
        $this->module_key = '52bd7994cec4b3222b0667f3c4f51926';
        $this->author_address = '0xfd95542428628BB79Df5B6ACa966fbF3c7FdD948';
        parent::__construct();
        $this->displayName = $this->l('SFK Database Management Tool Adminer.');
        $this->description = $this->l('The module helps to integrate Database Management Tool Adminer.');
        $this->confirmUninstall = $this->l('Are you sure you want to remove this module?');
        $this->need_instance = 0;
        
    }

    public function install() {
	
        // New Tab
        if (_PS_VERSION_ >= '1.7') {
            $parentTabID = Tab::getIdFromClassName('AdminAdmin');
            $tab = new Tab();
            $tab->active = 1;
            $tab->id_parent = $parentTabID;
        } else {
           // $parentTabID = Tab::getIdFromClassName('AdminAdmin');
            $tab = new Tab();
            $tab->active = 1;
            $tab->id_parent = 0;
        }
        $tab->class_name = "AdminSfkdbmanage"; 
        $tab->name = array();

        foreach (Language::getLanguages() as $lang){
            $tab->name[$lang['id_lang']] = "Database Management Tool";
        }

        if (_PS_VERSION_ < '1.6') {
            $tab->id_parent  = (int)Tab::getIdFromClassName('AdminAdmin');
        }
        
        $tab->module = 'sfkdbmanage';
        $tab->add();
        if (Validate::isLoadedObject($tab))
                Configuration::updateValue('PS_SFKDBMANAGE_MODULE_IDTAB', (int)$tab->id);
        else
                return $this->_abortInstall($this->l('Unable to load the "AdminSfkdbmanage" tab'));
		
        Db::getInstance()->Execute('
		CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'sfkdbmanage` (
                    `id_sfkdbmanage` int(11) NOT NULL AUTO_INCREMENT,
                    `sfk_title` varchar(500) DEFAULT NULL,
                    `sfk_status` int(11) DEFAULT 0,
                    `sfk_dates` date DEFAULT NULL,
                    `sfk_language` varchar(500) DEFAULT NULL,
                    `created_date` date DEFAULT NULL,
                    `active` int(11) DEFAULT 0,
                    `type` int(11) DEFAULT 0,
                PRIMARY KEY (`id_sfkdbmanage`)
                ) ENGINE=' . _MYSQL_ENGINE_ . ' default CHARSET=utf8');
        Db::getInstance()->Execute('
                CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'sfkdbmanage_lang` (
                        `id_sfkdbmanage` int(10) unsigned NOT NULL,
                        `id_lang` int(10) unsigned NOT NULL,
                        PRIMARY KEY (`id_sfkdbmanage`,`id_lang`),
                        KEY `id_sfkdbmanage` (`id_sfkdbmanage`)
                ) ENGINE=' . _MYSQL_ENGINE_ . ' default CHARSET=utf8');
        
        if (parent::install()) {
            
            Db::getInstance()->Execute('UPDATE `'._DB_PREFIX_.'tab` SET module=NULL WHERE class_name="AdminSfkdbmanage" ');
            
                if (_PS_VERSION_ < '1.6') {
                    
                    //Move class and controllers files - Permission required on Linux machine.
                    copy(dirname(__FILE__).DIRECTORY_SEPARATOR.'/controllers/admin/AdminSfkdbmanageController.php', _PS_ROOT_DIR_.DIRECTORY_SEPARATOR.'controllers'.
                    DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'AdminSfkdbmanageController.php');
                    copy(dirname(__FILE__).DIRECTORY_SEPARATOR.'/classes/Sfkdbmanage.php', _PS_ROOT_DIR_.DIRECTORY_SEPARATOR.'classes'.
                    DIRECTORY_SEPARATOR.'Sfkdbmanage.php');
                    // Copy Images
                    copy(dirname(__FILE__).DIRECTORY_SEPARATOR.'/views/img/admin/tab-sfkdbmanage.gif', _PS_ROOT_DIR_.DIRECTORY_SEPARATOR.'img'.
                    DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'tab-sfkdbmanage.gif');
                    copy(dirname(__FILE__).DIRECTORY_SEPARATOR.'/views/img/admin/AdminSfkdbmanage.gif', _PS_ROOT_DIR_.DIRECTORY_SEPARATOR.'img'.
                    DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'AdminSfkdbmanage.gif');			
                
                } else {

                    //Move class and controllers files - Permission required on Linux machine.
                    Tools::copy(dirname(__FILE__).DIRECTORY_SEPARATOR.'/controllers/admin/AdminSfkdbmanageController.php', _PS_ROOT_DIR_.DIRECTORY_SEPARATOR.'controllers'.
                    DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'AdminSfkdbmanageController.php');
                    Tools::copy(dirname(__FILE__).DIRECTORY_SEPARATOR.'/classes/Sfkdbmanage.php', _PS_ROOT_DIR_.DIRECTORY_SEPARATOR.'classes'.
                    DIRECTORY_SEPARATOR.'Sfkdbmanage.php');
                    // Copy Images
                    Tools::copy(dirname(__FILE__).DIRECTORY_SEPARATOR.'/views/img/admin/tab-sfkdbmanage.gif', _PS_ROOT_DIR_.DIRECTORY_SEPARATOR.'img'.
                    DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'tab-sfkdbmanage.gif');
                    Tools::copy(dirname(__FILE__).DIRECTORY_SEPARATOR.'/views/img/admin/AdminSfkdbmanage.gif', _PS_ROOT_DIR_.DIRECTORY_SEPARATOR.'img'.
                    DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'AdminSfkdbmanage.gif');			

                    // Clear cache
                    include_once(_PS_ROOT_DIR_.'/config/config.inc.php');
                    include_once(_PS_ROOT_DIR_.'/init.php');
                    Tools::clearSmartyCache();
                    Tools::clearXMLCache();
                    Media::clearCache();
                    Tools::generateIndex();                    
                    
                }
 
                
            return true;
        } else
            return false;
        //return parent::install();
    }

    public function uninstall() {
        
        if ($id_tab = Tab::getIdFromClassName('AdminSfkdbmanage')) {
            $tab = new Tab((int) $id_tab);
            $tab->delete();
        }
        
        Db::getInstance()->Execute(' DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'sfkdbmanage`, `' . _DB_PREFIX_ . 'sfkdbmanage_lang`; ');
        return parent::uninstall();
    }

    /**
    * Surcharge de la fonction de traduction sur PS 1.7 et supérieur.
    * La fonction globale ne fonctionne pas
    * @param type $string
    * @param type $class
    * @param type $addslashes
    * @param type $htmlentities
    * @return type
    */
    public function l($string, $class = null, $addslashes = false, $htmlentities = true)
    {
        if ( _PS_VERSION_ >= '1.7') {
            return Context::getContext()->getTranslator()->trans($string);
        } else {
            return parent::l($string, $class, $addslashes, $htmlentities);
        }
    }
    
	
}


?>
