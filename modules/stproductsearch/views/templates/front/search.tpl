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

{extends file=$layout}

{block name='content'}

	{capture name=path}{l s='Search' mod='stproductsearch'}{/capture}

	<h1 
	{if isset($instant_search) && $instant_search}id="instant_search_results"{/if} 
	class="page-heading {if !isset($instant_search) || (isset($instant_search) && !$instant_search)} product-listing{/if}">
		{l s='Search' mod='stproductsearch'}&nbsp;
		{if $nbProducts > 0}
			<span class="lighter">
				"{if isset($search_query) && $search_query}{$search_query|escape:'html':'UTF-8'}{elseif $search_tag}{$search_tag|escape:'html':'UTF-8'}{elseif $ref}{$ref|escape:'html':'UTF-8'}{/if}"
			</span>
		{/if}
		{if isset($instant_search) && $instant_search}
			<a href="#" class="close">
				{l s='Return to the previous page' mod='stproductsearch'}
			</a>
		{else}
			<span class="heading-counter">
				{if $nbProducts == 1}{l s='%d result has been found.' sprintf=[$nbProducts|intval] mod='stproductsearch'}{else}{l s='%d results have been found.' sprintf=[$nbProducts|intval] mod='stproductsearch'}{/if}
			</span>
		{/if}
	</h1>
	
	{if !$nbProducts}
		<p class="alert alert-warning">
			{if isset($search_query) && $search_query}
				{l s='No results were found for your search' mod='stproductsearch'}&nbsp;"{if isset($search_query)}{$search_query|escape:'html':'UTF-8'}{/if}"
			{elseif isset($search_tag) && $search_tag}
				{l s='No results were found for your search' mod='stproductsearch'}&nbsp;"{$search_tag|escape:'html':'UTF-8'}"
			{else}
				{l s='Please enter a search keyword' mod='stproductsearch'}
			{/if}
		</p>
	{else}
		{if isset($instant_search) && $instant_search}
			<p class="alert alert-info">
				{if $nbProducts == 1}{l s='%d result has been found.' sprintf=[$nbProducts|intval] mod='stproductsearch'}{else}{l s='%d results have been found.' sprintf=[$nbProducts|intval] mod='stproductsearch'}{/if}
			</p>
		{/if}
		
		<section id="products">
			<div id="">
			  {block name='product_list_top'}
				{include file='catalog/_partials/products-top.tpl' listing=$search_products}
			  {/block}
			</div>

			{block name='product_list_active_filters'}
			  <div id="" class="hidden-sm-down">
				{$search_products.rendered_active_filters nofilter}
			  </div>
			{/block}
			<div id="">
				{block name='product_list'}
					{include file='catalog/_partials/products.tpl' listing=$search_products}
				{/block}
			</div>
		</section>
		
	{/if}
{/block}
