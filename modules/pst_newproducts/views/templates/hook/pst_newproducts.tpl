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

<section class="newproduct box-product">
<div class="container">
	<h2 class="h1 products-section-title">
		{l s='Latest Products' mod='pst_newproducts'}
	</h2>
   <div class="products tab-container">
	   <div class="homeproducts-row">
		  {assign var='sliderFor' value=5} <!-- Define Number of product for SLIDER -->
		  {if $slider == 1 && $no_prod >= $sliderFor}
		  <div class="product-carousel">
		 <ul id="pstnewproduct-carousel" class="pstnewproduct-carousel pst-carousel product_list">
		{else}
			<ul id="newproduct-grid" class="newproduct-grid grid row gridcount product_list">
		{/if}
		{foreach from=$products item="product"}
			<li class="{if $slider == 1 && $no_prod >= $sliderFor}item{else}product_item col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3{/if}">				
				{include file="catalog/_partials/miniatures/product.tpl" product=$product}
			</li>
		{/foreach}
		</ul>
		
		{if $slider == 1 && $no_prod >= $sliderFor}
			<div class="customNavigation">
				<a class="btn prev pstnewproduct_prev">&nbsp;</a>
				<a class="btn next pstnewproduct_next">&nbsp;</a>
			</div>
		{/if}
		
		{if $slider == 0 && $no_prod >= $sliderFor}
		<a class="all-product-link float-xs-left pull-md-right h4" href="{$allNewProductsLink}">
			{l s='View More Products' mod='pst_newproducts'}
		</a>
		{/if}
		{if $slider == 1 && $no_prod >= $sliderFor}
	  </div>
		{/if}
		</div>		
		</div>		
</section>