{**
 * Prestashop module : OpartDevis
 *
 * @author Olivier CLEMENCE <manit4c@gmail.com>
 * @copyright  Op'art
 * @license Tous droits réservés / Le droit d'auteur s'applique (All rights reserved / French copyright law applies)
 *}

<form action="{$href|escape:'htmlall':'UTF-8'}" method="post" enctype="multipart/form-data" id="opartDevisForm">	
    <input type="hidden" value="{if ($quotation->id_cart)}{$quotation->id_cart|escape:'htmlall':'UTF-8'}{/if}" name="id_cart" id="opart_devis_id_cart" />

    {if isset($quotation->id_opartdevis) && $quotation->id_opartdevis}
        <input type="hidden" value="{$quotation->id_opartdevis|escape:'htmlall':'UTF-8'}" name="id_opartdevis" />
    {/if}

    <!-- name -->
    <div class="panel">
        <h3><i class="icon-list-alt"></i> {l s='Quotation' mod='opartdevis'}</h3>
        <div class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-lg-3">
                    {l s='Quotation name :' mod='opartdevis'}
                </label>
                <div class="col-lg-6">
                    <input type="text" value="{if isset($quotation)}{$quotation->name|escape:'htmlall':'UTF-8'}{/if}" name="quotation_name" />
                </div>
            </div>
        </div>
        <div class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-lg-3">
                    {l s='Message :' mod='opartdevis'}
                </label>
                <div class="col-lg-6">			
                    <textarea name="message_visible">{if isset($quotation->message_visible) && $quotation->message_visible!=""}{$quotation->message_visible|escape:'htmlall':'UTF-8'}{/if}</textarea>	
                    <p class="help-block">{l s='Visible on quotation.' mod='opartdevis'}</p>						
                </div>
            </div>
        </div>
        <div class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-lg-3" for="opart_devis_product_autocomplete_input">
                    {l s='Attachments (5MB max) :' mod='opartdevis'}
                </label>
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="hidden" name="MAX_FILE_SIZE" value="5242880">
                        <input id="file-name" type="file" name="fileopartdevis[]" multiple enctype="multipart/form-data">
                    </div>
                    {if (is_dir($upload_path) && $quotation->id_opartdevis)}
                        {assign var=files value=opendir($upload_path)}
                        {while $file = readdir($files)}
                            {if $file != '.' AND $file != '..'}
                                <div class="">
                                    <a href="{$upload_url}/{$file|escape:'htmlall':'UTF-8'}" target="_blank">{$file|escape:'htmlall':'UTF-8'}</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="button" class="delete_attachement" data-name="{$file|escape:'htmlall':'UTF-8'}" data-id="{$upload_path|escape:'htmlall':'UTF-8'}" style="background: transparent; border: 0px; padding: 0px; opacity:0.2px; -webkit-appearance: none;" data-dismiss="alert"><i class="icon-trash"></i></button>
                                </div>
                            {/if}
                        {/while}
                        {closedir($files)}{* can't escape *}
                    {/if}
                </div>
            </div>
        </div>
    </div>
    <!-- user -->
    <div class="panel">
        <h3><i class="icon-user"></i> {l s='Customer' mod='opartdevis'}</h3>
        <div class="form-horizontal">
            <div class="form-group redirect_product_options redirect_product_options_product_choise">	
                <label class="control-label col-lg-3" for="opart_devis_customer_autocomplete_input">
                    {l s='choose customer:' mod='opartdevis'}
                </label>
                <div class="col-lg-6">
                    <input type="hidden" value="" name="id_product_redirected" />
                    <div class="input-group">
                        <input type="text" id="opart_devis_customer_autocomplete_input" name="opart_devis_customer_autocomplete_input" autocomplete="off" class="ac_input" />
                        <span class="input-group-addon"><i class="icon-search"></i></span>
                    </div>
                    <p class="help-block">{l s='Start by typing the first letters of the customer\'s firstname or lastname, then select the customer from the drop-down list.' mod='opartdevis'}</p>				
                    <h2>
                        <i class="icon-user"></i> 
                        <span href="" id="opart_devis_customer_info"><span style="color:red">{l s='Please choose a customer' mod='opartdevis'}</span></span>
                    </h2>			
                </div>
                <input type="hidden" name="opart_devis_customer_id" id="opart_devis_customer_id" value=""/>
            </div>
        </div>
        <div class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-lg-3" for="opart_devis_customer_autocomplete_input">
                    {l s='Invoice address:' mod='opartdevis'}
                </label>
                <div class="col-lg-6">
                    <select id="opart_devis_invoice_address_input" name="invoice_address"></select>	
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-3" for="opart_devis_customer_autocomplete_input">
                    {l s='delivery address:' mod='opartdevis'}
                </label>					
                <div class="col-lg-6">
                    <select id="opart_devis_delivery_address_input" name="delivery_address"></select>				
                    <p class="help-block">{l s='First, you have to choose a customer and you will be able to choose one of his addresses.' mod='opartdevis'}</p>
                </div>			
            </div>
            <input type="hidden" name="selected_invoice" id="selected_invoice" value="{if isset($cart->id_address_invoice)}{$cart->id_address_invoice|escape:'htmlall':'UTF-8'}{/if}" />
            <input type="hidden" name="selected_delivery" id="selected_delivery" value="{if isset($cart->id_address_delivery)}{$cart->id_address_delivery|escape:'htmlall':'UTF-8'}{/if}" />
        </div>
    </div>
    <!-- Cart -->
    <div class="panel">
        <h3><i class="icon-shopping-cart"></i> {l s='Cart' mod='opartdevis'}</h3>
        <div class="form-horizontal">
            <div class="panel">
                <div class="form-group">
                    <h3>
                        <label class="col-lg-1" for="opart_devis_product_autocomplete_input">
                            {l s='Products :' mod='opartdevis'}
                        </label>
                        <div class="col-lg-11">
                            <input type="hidden" value="" name="id_product_redirected" />
                            <div class="input-group">
                                <input type="text" id="opart_devis_product_autocomplete_input" name="opart_devis_product_autocomplete_input" autocomplete="off" class="ac_input" />
                                <span class="input-group-addon"><i class="icon-search"></i></span>					
                            </div>
                        </div>
                    </h3>
                    <div class="col-lg-12">
                        <table class="table product" id="opartDevisProdList">
                            <thead>
                                <tr>
                                    <th style="width:5%">{l s='Id' mod='opartdevis'}</th>
                                    <th>{l s='Name' mod='opartdevis'}</th>
                                    <th>{l s='Attributes' mod='opartdevis'}</th>
                                    <th style="width:2%">{l s='Stock' mod='opartdevis'}</th>
                                    <th style="width:10%">{l s='Catalog price without tax' mod='opartdevis'}</th>
                                    <th style="width:10%">{l s='Your price' mod='opartdevis'}</th>
                                    <th style="width:10%">{l s='Reduced price without tax' mod='opartdevis'}</th>
                                    <th style="width:10%">{l s='Quantity' mod='opartdevis'}</th>
                                    <th style="width:10%">{l s='Total' mod='opartdevis'}</th>
                                    <th style="width:1%">&nbsp;</th>
                                </tr>	
                            </thead>
                        </table>	
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div id="opartDevisCartRulesMsgError" style="display:none;"></div>
            </div>
            <div class="panel">
                <div class="form-group">
                    <h3>
                        <label class="col-lg-1" for="opart_devis_product_autocomplete_input">
                            {l s='Discounts :' mod='opartdevis'}
                        </label>
                        <div class="col-lg-11">
                            <div class="input-group">
                                <select id="opart_devis_select_cart_rules">
                                    {if count($cart_rules)>0}
                                        <option value="-1">--- {l s='cart rules' mod='opartdevis'} ---</option>
                                        {foreach $cart_rules as $rule}
                                            <option value="{$rule.id_cart_rule|escape:'htmlall':'UTF-8'}">{$rule.name|escape:'htmlall':'UTF-8'}</option>
                                        {/foreach}
                                    {else}						
                                        <option value="-1">--- {l s='no cart rules avaibles' mod='opartdevis'} ---</option>
                                    {/if}
                                </select>
                            </div>
                        </div>
                    </h3>
                    <div class="col-lg-12">
                        <table class="table product" id="opartDevisCartRuleList">
                            <thead>
                                <tr>
                                    <th style="width:5%">{l s='Id' mod='opartdevis'}</th>
                                    <th>{l s='Name' mod='opartdevis'}</th>
                                    <th>{l s='Description' mod='opartdevis'}</th>
                                    <th>{l s='Code' mod='opartdevis'}</th>
                                    <th>{l s='Free shipping' mod='opartdevis'}</th>
                                    <th>{l s='Reduction percent' mod='opartdevis'}</th>
                                    <th>{l s='Reduction amount' mod='opartdevis'}</th>
                                    <th>{l s='Reduction type' mod='opartdevis'}</th>
                                    <th>{l s='Gift product' mod='opartdevis'}</th>
                                    <th>&nbsp;</th>
                                </tr>	
                            </thead>
                        </table>	
                    </div>
                </div>
            </div>
		</div>
    </div>
    <!-- Shipping -->
    <div class="panel">
        <h3><i class="icon-truck"></i> {l s='Carriers' mod='opartdevis'}</h3>
        <div class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-lg-3" for="opart_devis_product_autocomplete_input">
                    {l s='Select a carrier :' mod='opartdevis'}
                </label>
                <div class="col-lg-6">			
                    <select id="opart_devis_carrier_input" name="opart_devis_carrier_input" onchange="$('#selected_carrier').val($(this).val())" class="calcTotalOnChange"></select>	
                    <p class="help-block">{l s='First you have to choose customer, addresses and all products then click on the reload button and you will be able to choose a carrier.' mod='opartdevis'}</p>				
                </div>
                <input type="hidden" name="selected_carrier" value="{if isset($cart->id_carrier)}{$cart->id_carrier|escape:'htmlall':'UTF-8'}{/if}" id="selected_carrier" />
            </div>
        </div>
        <div class="panel-footer">
            <button id="opart_devis_refresh_carrier_list" class="btn btn-default pull-right">
                <i class="process-icon-refresh"></i>
                {l s='Reload carrier list' mod='opartdevis'}
            </button>
        </div>
    </div>

    <!-- TOTAL -->
    <div class="panel">
        <h3><i class="icon-list"></i> {l s='Total' mod='opartdevis'}</h3>
        <div class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-lg-3" style="padding-top:0">
                    {l s='Products (tax excl.)' mod='opartdevis'} :
                </label>
                <div class="col-lg-9"><span id="totalProductHt"></span></div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-3" style="padding-top:0">
                    {l s='Discounts (tax excl.)' mod='opartdevis'} :
                </label>
                <div class="col-lg-9"><span id="totalDiscountsHt"></span></div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-3" style="padding-top:0">
                    {l s='Shipping (tax excl.)' mod='opartdevis'} :
                </label>
                <div class="col-lg-9"><span id="totalShippingHt"></span></div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-3" style="padding-top:0">
                    {l s='Tax' mod='opartdevis'} :
                </label>
                <div class="col-lg-9"><span id="totalTax"></span></div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-3" style="padding-top:0; font-size:1.5em;">
                    {l s='Total (tax incl.)' mod='opartdevis'} :
                </label>
                <div class="col-lg-9"><span id="totalQuotationWithTax" style="color:red; font-weight:bold; font-size:1.5em;"></span></div>
            </div>
        </div>
        <div class="panel-footer">
            <a href="{$hrefCancel|escape:'htmlall':'UTF-8'}" class="btn btn-default">
                <i class="process-icon-cancel"></i>
                {l s='cancel' mod='opartdevis'}
            </a>
            <button id="opartBtnSubmit" disable="true" type="submit" name="submitAddOpartDevis" class="btn btn-default pull-right"><i class="process-icon-save"></i> {l s='save' mod='opartdevis'}</button>
            <button id="opart_devis_refresh_total_quotation" class="btn btn-default pull-right">
                <i class="process-icon-refresh"></i>
                {l s='Refresh Total' mod='opartdevis'}
            </button>
        </div>
    </div>
</form>

{strip}
    {addJsDef ajaxUrl=$ajax_url}
    {addJsDef token=$token|escape:'htmlall':'UTF-8'}
    {addJsDef id_lang_default=$id_lang_default|intval}
    {addJsDef currency_sign=$currency_sign}
    {addJsDefL name=specific_price_txt}{l s='Specific price' js=1 mod='opartdevis'}{/addJsDefL}
    {addJsDefL name=from_qty_text}{l s='from' js=1 mod='opartdevis'}{/addJsDefL}
    {addJsDefL name=qty_text}{l s='quantity' js=1 mod='opartdevis'}{/addJsDefL}
{/strip}

<script type="text/javascript">
    $(document).ready(function() {
        {if $customer}
            opartDevisAddCustomerToQuotation(
                {$customer->id|escape:'htmlall':'UTF-8'},
                '{$customer->firstname|escape:'htmlall':'UTF-8'}',
                '{$customer->lastname|escape:'htmlall':'UTF-8'}',
                '{$customer->email|escape:'htmlall':'UTF-8'}'
            );
        {/if}

        {if $cart}
            {foreach $products AS $product}
                opartDevisAddProductToQuotation(
                    {$product.id_product|escape:'htmlall':'UTF-8'},
                    '{$product.name|escape:'htmlall':'UTF-8'}',
                    '{$product.quantity_available|escape:'htmlall':'UTF-8'}',
                    '{$product.catalogue_price|escape:'htmlall':'UTF-8'}',
                    {$product.cart_quantity|escape:'htmlall':'UTF-8'},
                    {$product.id_product_attribute|escape:'htmlall':'UTF-8'},
                    '{$product.specific_price|escape:'htmlall':'UTF-8'}',
                    '{$product.your_price|escape:'htmlall':'UTF-8'}',
                    '{$product.customization_datas_json}',
                    '{$product.total}'
                );
            {/foreach}
        {/if}

        {if $cart && !empty($summary.discounts)}
            {foreach $summary.discounts AS $rule}
                {if $rule.reduction_product == -2}
                    reduction_type = "{l s='selected product' mod='opartdevis'}"
                {else if $rule.reduction_product == -1}
                    reduction_type = "{l s='cheapest product' mod='opartdevis'}"
                {else if $rule.reduction_product == 0}
                    reduction_type = "{l s='order' mod='opartdevis'}"
                {else}
                    reduction_type = "{l s='specific product' mod='opartdevis'} ({$rule.reduction_product})"
                {/if}

                opartDevisAddRuleToQuotation(
                    {$rule.id_cart_rule|escape:'htmlall':'UTF-8'},
                    '{$rule.name|escape:'htmlall':'UTF-8'}',
                    '{$rule.description|escape:'htmlall':'UTF-8'}',
                    '{$rule.code|escape:'htmlall':'UTF-8'}',
                    {$rule.free_shipping|escape:'htmlall':'UTF-8'},
                    '{$rule.reduction_percent|escape:'htmlall':'UTF-8'}',
                    '{$rule.reduction_amount|escape:'htmlall':'UTF-8'}',
                    reduction_type,
                    {$rule.gift_product|escape:'htmlall':'UTF-8'}
                );
            {/foreach}
        {/if}

        opartDevisPopulateSelectCarrier({$json_carrier_list});
    });
</script>
