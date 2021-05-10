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

/** Allow using Adminer inside a frame (disables ClickJacking protection)
* @link https://www.adminer.org/plugins/#use
* @author Jakub Vrana, https://www.vrana.cz/
* @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
*/
class AdminerFrames {
	/** @access protected */
	var $sameOrigin;
	
	/**
	* @param bool allow running from the same origin only
	*/
	function __construct($sameOrigin = false) {
		$this->sameOrigin = $sameOrigin;
	}
	
	function headers() {
		if ($this->sameOrigin) {
			header("X-Frame-Options: SameOrigin");
		} elseif (function_exists('header_remove')) {
			header_remove("X-Frame-Options");
		}
	}
	
}
