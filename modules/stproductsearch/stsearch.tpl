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
<!-- Block search module -->
<div id="st_search_block_left" class="block exclusive">
	<h4 class="title_block">{l s='Search' mod='stproductsearch'}</h4>
	<form method="get" action="{$link->getPageLink('productsearch', true)|escape:'html':'UTF-8'}" id="stsearchbox">
		<input type="hidden" name="fc" value="module" />
		<input type="hidden" name="module" value="stproductsearch" />
		<input type="hidden" name="controller" value="productsearch" />
		
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		
    	<label for="search_query_block">{l s='Search products:' mod='stproductsearch'}</label>
		<div class="block_content clearfix">
			{*
			<select class="form-control" name="cate" id="cate">
				<option value="">{l s='All Categories' mod='stproductsearch'}</option>
			     {foreach $cates item = cate key= "key"}
			     <option value="{$cate.id_category|escape:'htmlall':'UTF-8'|stripslashes}" {if isset($selectedCate) && $cate.id_category eq $selectedCate}selected{/if} >{$cate.name}</option>
			     {/foreach}
            </select>
			*}
			<div class="list-cate-wrapper">
				<input id="stsearch-cate-id" name="cate" value="{if isset($selectedCate)}{$selectedCate}{/if}" type="hidden">
				<a id="dropdownListCate" class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span>{if $selectedCateName != ''}{$selectedCateName}{else}{l s='All Categories' mod='stproductsearch'}{/if}</span>
					<i class="material-icons pull-xs-right">keyboard_arrow_down</i>
				</a>
				<div class="list-cate dropdown-menu" aria-labelledby="dropdownListCate">
					<a href="#" data-cate-id="" data-cate-name="{l s='All Categories' mod='stproductsearch'}" class="cate-item{if $selectedCate == ''} active{/if}" >{l s='All Categories' mod='stproductsearch'}</a>
				{foreach $cates item = cate key= "key"}
					<a href="#" data-cate-id="{$cate.id_category|escape:'htmlall':'UTF-8'|stripslashes}" data-cate-name="{$cate.name}" class="cate-item{if isset($selectedCate) && $cate.id_category eq $selectedCate} active{/if}" >{$cate.name}</a>
				{/foreach}
				</div>
			</div>
			<input class="search_query form-control grey" type="text" id="st_search_query_block" name="search_query" value="{$search_query|escape:'htmlall':'UTF-8'|stripslashes}" />
			<button type="submit" id="st_search_button" class="btn btn-default button button-small"><span><i class="material-icons search">search</i></span></button> 
		</div>
	</form>
</div>
<!-- /Block search module -->
