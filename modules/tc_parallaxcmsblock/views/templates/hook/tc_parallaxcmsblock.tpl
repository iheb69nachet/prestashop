{**
* 2007-2018 PrestaShop
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2018 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div id="tmparallaxcmsblock" class="block parallax" data-source-url="{$image_url}/parallax-bg.jpg">
	<div class="container">
			{if $tmparallaxcmsblockinfos.text != ""}
			{$tmparallaxcmsblockinfos.text nofilter}
		{else}
			<div class="parallax-wrapper">
			<div class="parallax-text">
			<div class="text1">5000+ Furniture Designs</div>
			<div class="text2">Happy Furniture to You!</div>
			<a href="#" class="button">SHOP NOW</a></div>
			</div>
		{/if}
	</div>
</div>
