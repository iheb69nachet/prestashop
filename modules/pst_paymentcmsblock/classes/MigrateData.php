<?php
/**
* 2007-2019 PrestaShop
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
*  @copyright 2007-2019 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registred Trademark & Property of PrestaShop SA
*/

/**
 * Database may change between two version of the module, or between the 1.6 and 1.7 modules.
 * This class allow the data to be kept during upgrades and migrations.
 */
class MigrateData
{
    private $loadedData = array();

    /**
     * This methods retrieves data from older database models
     * - pst_paymentcmsblock < v3.0.0
     * - blockcmsinfo (1.6 equivalent module)
     *
     * @return array
     */
    public function retrieveOldData()
    {
        $this->loadedData = array();
        $texts = Db::getInstance()->executeS('SELECT i.`id_shop`, il.`id_lang`, il.`text` FROM `' . _DB_PREFIX_ . 'pstpaymentcmsblockinfo` i
            INNER JOIN `' . _DB_PREFIX_ . 'pstpaymentcmsblockinfo_lang` il ON il.`id_pstpaymentcmsblockinfo` = i.`id_pstpaymentcmsblockinfo`'
        );

        if (is_array($texts) && !empty($texts)) {
            foreach ($texts as $text) {
                $this->loadedData[(int)$text['id_shop']][(int)$text['id_lang']] = $text['text'];
            }
        }

        return $this->loadedData;
    }

    /**
     * Import the old PSTPaymentCmsBlock data in the new structure
     *
     * @return bool
     */
    public function insertData()
    {
        if (empty($this->loadedData)) {
            return true;
        }
        
        $return = true;
        $shopsIds = Shop::getShops(true, null, true);
        $customTexts = array_intersect_key($this->loadedData, $shopsIds);

        $pstpaymentcmsblockinfo = new PSTPaymentCmsBlock();
        $pstpaymentcmsblockinfo->text = reset($customTexts);
        $return &= $pstpaymentcmsblockinfo->add();

        if (sizeof($customTexts) > 1) {
            foreach ($customTexts as $key => $text) {
                Shop::setContext(Shop::CONTEXT_SHOP, (int) $key);
                $pstpaymentcmsblockinfo->text = $text;
                $return &= $pstpaymentcmsblockinfo->save();
            }
        }

        return $return;
    }
}
