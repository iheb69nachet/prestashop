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
<section class="featured-products clearfix m-t-3">
	<h1 class="h1 products-section-title text-uppercase ">
		{l s='Best Sellers' d='Shop.Theme.Global'}
	</h1>
	<div class="products">
		<ul class="bestsellers_grid product_list grid row gridcount">
			{foreach from=$products item="product"}
				<li class="product_item col-xs-12 col-sm-6 col-md-4 col-lg-3">
					{include file="catalog/_partials/miniatures/product.tpl" product=$product}
				</li>
			{/foreach}
		</ul>
		<a class="all-product-link float-xs-left pull-md-right h4" href="{$allBestSellers}">
			{l s='All best sellers' d='Shop.Theme.Global'}<i class="material-icons">&#xE315;</i>
		</a>
	</div>	
</section>
