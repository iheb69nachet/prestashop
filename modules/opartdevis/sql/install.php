<?php
/**
 * Prestashop module : OpartDevis
 *
 * @author Olivier CLEMENCE <manit4c@gmail.com>
 * @copyright  Op'art
 * @license Tous droits réservés / Le droit d'auteur s'applique (All rights reserved / French copyright law applies)
 */

$sql = array();
$sql[] =
    'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'opartdevis` (
        `id_opartdevis` int(10) NOT NULL AUTO_INCREMENT,
        `id_cart` int(10) NOT NULL,
        `id_customer` int(10) NOT NULL,
        `name` varchar(128),
        `message_visible` TEXT,
        `id_customer_thread` int(10),
        `date_add` DATETIME NOT NULL,
        `status` int(2) DEFAULT 0,
        `id_order` int(10) NULL,
        PRIMARY KEY (`id_opartdevis`)
    ) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8';

//1.6.1.0 specific price bug fix
if (version_compare(_PS_VERSION_, '1.6.1.0', '=')) {
    $sql[] = "ALTER TABLE "._DB_PREFIX_."specific_price DROP INDEX id_product_2";
    $sql[] = "ALTER TABLE "._DB_PREFIX_."specific_price ADD INDEX id_product_2 (id_product,id_shop,id_shop_group,id_currency,id_country,id_group,id_customer,id_product_attribute,from_quantity,id_specific_price_rule,id_cart,`from`,`to`)";
}

foreach ($sql as $s) {
    if (!Db::getInstance()->execute($s)) {
        return false;
    }
}
