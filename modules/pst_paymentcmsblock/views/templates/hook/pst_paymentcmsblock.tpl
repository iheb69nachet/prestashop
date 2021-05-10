{*
* 2007-2020 PrestaShop
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
*  @copyright  2007-2020 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div id="pstpaymentcmsblock">
   <div class="payment-block links wrapper footer-blocks">
   <h3 class="block-payment-title hidden-md-down"><a href="{$urls.pages.stores}">{l s='Payment Method' d='Shop.Theme.Global'}</a></h3>
      
		<div class="title clearfix hidden-lg-up" data-target="#block-payment_list" data-toggle="collapse">
		  <span class="h3">{l s='Payment Method' d='Shop.Theme.Global'}</span>
		  <span class="float-xs-right">
			  <span class="navbar-toggler collapse-icons">
				<i class="material-icons add">&#xE313;</i>
				<i class="material-icons remove">&#xE316;</i>
			  </span>
		  </span>
		</div>
		<div id="block-payment_list" class="collapse">
      {if $pstpaymentcmsblockinfos.text != ""}
      {$pstpaymentcmsblockinfos.text nofilter}
      {else}		
      <ul class="payment-block-inner">
		<li class="master icon"><a href="#"><img src="{$image_url}/maestro.png" alt=""></a></li>
		<li class="paypal icon"><a href="#"><img src="{$image_url}/paypal.png" alt=""></a></li>
		<li class="visa icon"><a href="#"><img src="{$image_url}/visa.png" alt=""></a></li>
		<li class="paypal icon"><a href="#"><img src="{$image_url}/cirrus.png" alt=""></a></li>
		<li class="ebay icon"><a href="#"><img src="{$image_url}/ebay.png" alt=""></a></li>
	  </ul>
      {/if}
	  </div>
   </div>
</div>