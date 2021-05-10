
<section class="featured-products clearfix">
	<h1 class="h1 products-section-title text-uppercase ">
		{l s='Popular Products' d='Shop.Theme.Global'}
	</h1>
	
	<div class="products">
		<ul class="featured_grid product_list grid row gridcount">
		{foreach from=$products item="product"}
			<li class="product_item col-xs-12 col-sm-6 col-md-4 col-lg-3">
			{include file="catalog/_partials/miniatures/product.tpl" product=$product}
			</li>
		{/foreach}
		</ul>
		<a class="all-product-link float-xs-left pull-md-right h4" href="{$allProductsLink}">
			{l s='All products' d='Shop.Theme.Global'}<i class="material-icons">&#xE315;</i>
		</a>
	</div>
</section>