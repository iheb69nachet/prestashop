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

function adminer_object() {
    // required to run any plugin
    include_once "plugin.php";
    
    
        include_once "AdminerFrames.php";
    
    
    $plugins = array(
        // specify enabled plugins here
        new AdminerFrames,
       
    );
    
    /* It is possible to combine customization and plugins:
    class AdminerCustomization extends AdminerPlugin {
    }
    return new AdminerCustomization($plugins);
    */
    
    return new AdminerPlugin($plugins);
}

// include original Adminer or Adminer Editor
include "adminer.php";
?>