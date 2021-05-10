{**
 * 2007-2019 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
 
{block name='product_miniature_item'}
	<div class="product-miniature js-product-miniature" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}" itemscope itemtype="http://schema.org/Product">
        <div class="thumbnail-container">
            <div class="image-block">
                {block name='product_thumbnail'}
                <a href="{$product.url}" class="thumbnail product-thumbnail">
                    <img class="primary-image" src="{$product.cover.large.url}" alt="{$product.cover.legend}" data-full-size-image-url="{$product.cover.large.url}">
                </a>

                {/block} {block name='product_buy'} {if !$configuration.is_catalog}

            </div>
            {/if} {/block}

        </div>
		
        {block name='product_flags'}
        <ul class="product-flags">
            {foreach from=$product.flags item=flag}
            <li class="{$flag.type}">{$flag.label}</li>
            {/foreach}
        </ul>
        {/block}

   

    <div class="product-description">
		<div class="product-desc-wrapper">

			{block name='product_name'}
				<span class="h3 product-title" itemprop="name"><a href="{$product.url}" title="{$product.name}">{$product.name|truncate:22:'...'}</a></span> 
			{/block} 
			
			{block name='product_description_short'}
			  <div id="product-description-short-{$product.id}" class="product-details" itemprop="description">{$product.description_short|truncate:150:'...' nofilter}</div>
			{/block }
			
			{block name='product_price_and_shipping'} 
				{if $product.show_price}
					<div class="product-price-and-shipping">
						<span itemprop="price" class="price">{$product.price}</span> 
							{if $product.has_discount} 
								{hook h='displayProductPriceBlock' product=$product type="old_price"}
				
								<span class="regular-price">{$product.regular_price}</span> 
								{if $product.discount_type === 'percentage'}
								<span class="discount-percentage">{$product.discount_percentage}</span> 
								{/if} 
							{/if} 
						{hook h='displayProductPriceBlock' product=$product type="before_price"} {hook h='displayProductPriceBlock' product=$product type='unit_price'} 
						{hook h='displayProductPriceBlock' product=$product type='weight'}
					</div>
				{/if} 
			{/block} 
		
			
			{block name='product_quantities'}
			  <div class="product-quantities">
				  <label class="label">{l s='In stock:' d='Shop.Theme.Actions'}</label>
				  <span>{$product.quantity} {if $product.quantity > 1 }{l s='items' d='Shop.Theme.Actions'}{else}{l s='item' d='Shop.Theme.Actions'}{/if}</span>
			  </div>
			  {/block} 
			  
			  
			  <!--{block name='product_availability'}
					<span class="product-availability">
					  
						{if $product.availability == 'available'}
						  <i class="material-icons product-available">&#xE5CA;</i>
						  <sapn class="prod_available">{l s='stock available' d='Shop.Theme.Actions'}</span>
						{elseif $product.availability == 'last_remaining_items'}
						  <i class="material-icons product-last-items">&#xE002;</i>
						  {l s='Almost sold out' d='Shop.Theme.Actions'}
						{else}
						  <i class="material-icons product-unavailable">&#xE14B;</i>
						  {l s='sold out' d='Shop.Theme.Actions'}
						{/if}
						
					 
					</span>
				  {/block}-->
				  
			{block name='product_reviews'} 
				{hook h='displayProductListReviews' product=$product} 
			{/block}

			
			<div class="product-counter">
				{hook h='PSProductCountdown' id_product=$product.id_product}
			</div>

			<div class="product-actions">
				<div class="product-actions-button">
				<!--<input name="qty" type="text" class="form-control atc_qty" value="1" onfocus="if(this.value == '1') this.value = '';" onblur="if(this.value == '') this.value = '1';"/>-->
					<button class="add_to_cart btn btn-primary add-to-cart" title="{l s='Add to cart' d='Shop.Theme.Actions'}" onclick="mypresta_productListCart.add({literal}$(this){/literal});">
						{l s='Add to cart' d='Shop.Theme.Actions'}
					</button>
		
					<a href="#" class="quick-view btn btn-secondary" data-link-action="quickview" title="{l s='Quick View' d='Shop.Theme.Actions'}">
						{l s='Quick view' d='Shop.Theme.Actions'}
					</a>	
				</div>
			</div>

		</div>
	</div>
	 </div>

    {/block}