<?php
/**
* The module helps to integrate Database Management Tool Adminer.
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

class SfkdbmanageCore extends ObjectModel {

    public $sfk_title;
    public $sfk_status;
    public $sfk_dates;

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array('table' => 'sfkdbmanage', 'primary' => 'id_sfkdbmanage', 'multilang' => false, 'fields' =>
        array(
            'sfk_title' => array('type' => self::TYPE_STRING, 'lang' => false, 'validate' => 'isGenericName', 'required' => true, 'size' => 300), 
            'sfk_status' => array('type' => self::TYPE_BOOL, 'lang' => false, 'validate' => 'isBool', 'required' => false), 
            'sfk_dates' => array('type' => self::TYPE_DATE, 'lang' => false, 'validate' => 'isDateFormat', 'copy_post' => false)));

    public static function getSfkdbmanage($id_lang = null) {
        if (is_null($id_lang))
            $id_lang = Context::getContext()->language->id;
        $sfkdbmanage = new Collection('Sfkdbmanage', $id_lang);
        return $sfkdbmanage;
    }

    public function __construct($id = null, $id_lang = null, $id_shop = null) {
        parent::__construct($id, $id_lang, $id_shop);
        $this->image_dir = _PS_GENDERS_DIR_;
    }

}
