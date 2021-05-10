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

class TopCmsblock extends ObjectModel
{
    /** @var int $id_topcmsblockinfo - the ID of TopCmsblock */
	public $id_topcmsblockinfo;

    /** @var String $text - HTML format of TopCmsblock values */
	public $text;

	/**
	 * @see ObjectModel::$definition
	 */
	public static $definition = array(
		'table' => 'topcmsblockinfo',
		'primary' => 'id_topcmsblockinfo',
		'multilang' => true,
		'multilang_shop' => true,
		'fields' => array(
			'id_topcmsblockinfo' =>			array('type' => self::TYPE_NOTHING, 'validate' => 'isUnsignedId'),
			// Lang fields
			'text' =>			array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml', 'required' => true),
		)
	);

	/**
	 * Return the TopCmsblock ID By shop ID
	 * 
	 * @param int $shopId
	 * @return bool|int
	 */
	public static function getTestimonialCmsblockIdByShop($shopId)
	{
		$sql = 'SELECT i.`id_topcmsblockinfo` FROM `' . _DB_PREFIX_ . 'topcmsblockinfo` i
		LEFT JOIN `' . _DB_PREFIX_ . 'topcmsblockinfo_shop` ish ON ish.`id_topcmsblockinfo` = i.`id_topcmsblockinfo`
		WHERE ish.`id_shop` = ' . (int)$shopId;
		
		if ($result = Db::getInstance()->executeS($sql)) {
			return (int) reset($result)['id_topcmsblockinfo'];
		}

		return false;
	}
}
