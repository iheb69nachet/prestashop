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

class AdminSfkdbmanageControllerCore extends AdminController {

    public function __construct() 
    {
        $this->bootstrap = true;
        $this->table = 'sfkdbmanage';
        $this->className = 'Sfkdbmanage';
        $this->addRowAction('edit');
        $this->addRowAction('delete');
        $this->context = Context::getContext();
        if (!Tools::getValue('realedit'))
            $this->deleted = false;
        $this->bulk_actions = array(
            'delete' => array(
                'text' => $this->l('Delete selected'),
                'confirm' => $this->l('Delete selected items?')
            )
        );
        
        
        if(!$this->ajax && !isset($this->display)){
            $this->context->smarty->assign(array(
                'modules_dir' => _MODULE_DIR_
            ));
            $this->content .= $this->context->smarty->fetch(_PS_MODULE_DIR_.'sfkdbmanage/views/templates/admin/sfkdbmanage.tpl');
        }
        
        parent::__construct();
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
