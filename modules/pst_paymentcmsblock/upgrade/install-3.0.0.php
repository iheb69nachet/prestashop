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

if (!defined('_PS_VERSION_')) {
    exit;
}

/**
 * Upgrade the Pst_PSTPaymentCmsBlock module to V3.0.0
 *
 * @param Pst_PSTPaymentCmsBlock $module
 * @return bool
 */
function upgrade_module_3_0_0($module)
{
    require_once _PS_MODULE_DIR_.$module->name.'/classes/MigrateData.php';
    $migration = new MigrateData();

    $return = true;

    $migration->retrieveOldData();
    $return &= $module->uninstallDB();

    /** Register the hook responsible for adding custom text when adding a new store */
    $return &= $module->registerHook('actionShopDataDuplication');

    $return &= $module->installDB();

    /** Reset DB data */
    $return &= $migration->insertData();

    return $return;
}
