{*
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
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2019 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<section class="productscategory-products clearfix">
	<h2 class="h1 products-section-title">
	{if $products|@count == 1}
		{l s='%s other product in the same category:' sprintf=[$products|@count] d='Modules.Categoryproducts.Shop'}
	{else}
		{l s='%s other products in the same category:' sprintf=[$products|@count] d='Modules.Categoryproducts.Shop'}
	{/if}
	</h2>
  
	<div class="products">
		{assign var='sliderFor' value=4} <!-- Define Number of product for SLIDER -->
		{assign var='productCount' value=count($products)}
		
		{if $productCount >= $sliderFor}
		    <div class="product-carousel">
			<ul id="pstproductscategory-carousel" class="pstproductscategory-carousel pst-carousel product_list">
		{else}
			<ul id="pstproductscategory-grid" class="pstproductscategory-grid grid row gridcount product_list">
		{/if}
	
		{foreach from=$products item="product"}
			<li class="{if $productCount >= $sliderFor}item{else}product_item col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3{/if}">
				{include file="catalog/_partials/miniatures/product.tpl" product=$product}
			</li>
		{/foreach}
		</ul>
		
		{if $productCount >= $sliderFor}
			<div class="customNavigation">
				<a class="btn prev pstproductscategory_prev">&nbsp;</a>
				<a class="btn next pstproductscategory_next">&nbsp;</a>
			</div>
		{/if}
		{if $productCount >= $sliderFor}
	  </div>
	  {/if}
	</div>
</section>
