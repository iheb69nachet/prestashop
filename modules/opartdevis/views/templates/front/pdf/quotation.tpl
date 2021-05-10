{**
 * Prestashop module : OpartDevis
 *
 * @author Olivier CLEMENCE <manit4c@gmail.com>
 * @copyright  Op'art
 * @license Tous droits réservés / Le droit d'auteur s'applique (All rights reserved / French copyright law applies)
 *}

<div style="font-size: 8pt; color: #444">

    <!-- QUOTATION NAME -->
    <div style="text-align:center; font-size:1.2em; padding-bottom:3em; font-weight:bold;">
        {$quotation->name|escape:'htmlall':'UTF-8'}
    </div>
    <br />
    <!-- /QUOTATION NAME -->

    <!-- ADDRESSES -->
    <table style="width: 100%">
        <tr>
            <td>
                {if !empty($delivery_address)}
                    <table style="width: 100%">
                        <tr>
                            <td style="width: 50%">
                                <h4 style="color: #9E9F9E">{l s='Delivery Address' mod='opartdevis'}</h4>
                                <p>{$delivery_address}</p>
                            </td>
                            <td style="width: 50%">
                                <h4 style="color: #9E9F9E">{l s='Billing Address' mod='opartdevis'}</h4>
                                <p>{$invoice_address}</p>
                            </td>
                        </tr>
                    </table>
                {else}
                    <table style="width: 100%">
                        <tr>
                            <td style="width: 50%">
                                <h4 style="color: #9E9F9E">{l s='Billing & Delivery Address.' mod='opartdevis'}</h4>
                                <p>{$invoice_address}</p>
                            </td>
                            <td style="width: 50%"></td>
                        </tr>
                    </table>
                {/if}
            </td>
        </tr>
    </table>
    <br /><br />
    <!-- /ADDRESSES -->

    <!-- CART -->
    <table id="cart_summary" width="100%" style="text-align:left;" cellpadding="3">
        <thead>
            {assign var='odd' value=0}
            <tr style="color:#FFFFFF; background-color: #4D4D4D;">
                <td style="font-weight: bold; text-align:left; width:10%">{l s='Product' mod='opartdevis'}</td>
                <td style="font-weight: bold; text-align:left; width:30%">{l s='Description' mod='opartdevis'}</td>
                <td style="font-weight: bold; text-align:left; width:10%">{l s='Ref.' mod='opartdevis'}</td>
                <td style="font-weight: bold; text-align:left; width:10%">{l s='Standard price' mod='opartdevis'}{if $priceDisplay == 1} {l s='tax excl.' mod='opartdevis'}{else} {l s='tax incl.' mod='opartdevis'}{/if}</td>
                <td style="font-weight: bold; text-align:left; width:10%">{l s='Reduction' mod='opartdevis'}{if (!Configuration::get('OPARTDEVIS_REDUC_PERCENT'))}{if $priceDisplay == 1} {l s='tax excl.' mod='opartdevis'}{else} {l s='tax incl.' mod='opartdevis'}{/if}{/if}</td>
                <td style="font-weight: bold; text-align:left; width:10%">{l s='Unit price' mod='opartdevis'}{if $priceDisplay == 1} {l s='tax excl.' mod='opartdevis'}{else} {l s='tax incl.' mod='opartdevis'}{/if}</td>
                <td style="font-weight: bold; text-align:left; width:5%">{l s='Qty' mod='opartdevis'}</td>
                <td style="font-weight: bold; text-align:right; width:15%">{l s='Total' mod='opartdevis'}{if $priceDisplay == 1} {l s='tax excl.' mod='opartdevis'}{else} {l s='tax incl.' mod='opartdevis'}{/if}</td>
            </tr>
        </thead>
        {assign "firstpage" "true"}
        {assign "product_count" 1}
        <tbody>
            {foreach from=$products item=product}
                {cycle values='#FFF,#DDD' assign=bgcolor}
                {assign var='productId' value=$product.id_product}
                {assign var='productAttributeId' value=$product.id_product_attribute}
                {assign var='quantityDisplayed' value=0}
                {assign var='odd' value=($odd+1)%2}
                {assign var='ignoreProductLast' value=isset($customizedDatas.$productId.$productAttributeId) || count($gift_products)}

                {* Display the product line *}
                {if $firstpage == "true"}
                    {assign "modulo" $maxProdFirstPage}
                {else}
                    {assign "modulo" $maxProdPage}
                {/if}
                {if $product_count != 1 && ($product_count % $modulo == 1 || $modulo == 1)}
                    {assign "product_count" 1}
                    {assign "firstpage" "false"}
                    <br pagebreak="true"/>
                {/if}
                {assign "product_count" $product_count+1}

                {include file="$pdf_shopping_cart_template" productLast=$product@last productFirst=$product@first cannotModify=1}

                {* Then the customized datas ones *}
                {if isset($customizedDatas.$productId.$productAttributeId)}
                    {foreach $customizedDatas.$productId.$productAttributeId[$product.id_address_delivery] as $id_customization=>$customization}
                        {if ((int)$id_customization === (int)$product.id_customization)}
                            <tr id="product_{$product.id_product|escape:'htmlall':'UTF-8'}_{$product.id_product_attribute|escape:'htmlall':'UTF-8'}_{$id_customization|escape:'htmlall':'UTF-8'}_{$product.id_address_delivery|intval}" style="background-color: {$bgcolor|escape:'htmlall':'UTF-8'};">
                                <td></td>
                                <td colspan="4">
                                    {foreach $customization.datas as $type => $custom_data}
                                        {if $type == $CUSTOMIZE_FILE}
                                            <div>
                                                <ul>
                                                    {foreach $custom_data as $picture}
                                                        <li>
                                                            <img src="{$PS_UPLOAD_DIR|escape:'htmlall':'UTF-8'}{$picture.value|escape:'htmlall':'UTF-8'}_small" alt="" />
                                                        </li>
                                                    {/foreach}
                                                </ul>
                                            </div>
                                        {elseif $type == $CUSTOMIZE_TEXTFIELD}
                                            <ul>
                                                {foreach $custom_data as $textField}
                                                    {if $textField.name}
                                                        <li>{$textField.name|escape:'htmlall':'UTF-8'}
                                                    {else}
                                                        <li>{l s='Text #' mod='opartdevis'}{$textField@index+1|escape:'htmlall':'UTF-8'}
                                                    {/if}
                                                    : {$textField.value nofilter}</li>
                                                {/foreach}
                                            </ul>
                                        {/if}
                                    {/foreach}
                                </td>
                                <td>
                                    {if isset($cannotModify) AND $cannotModify == 1}
                                        {if $quantityDisplayed == 0 AND isset($customizedDatas.$productId.$productAttributeId)}
                                            {$customizedDatas.$productId.$productAttributeId|@count}
                                        {else}
                                            {$product.cart_quantity-$quantityDisplayed|escape:'htmlall':'UTF-8'}
                                        {/if}
                                    {else}
                                        {$customization.quantity|escape:'htmlall':'UTF-8'}
                                    {/if}
                                </td>
                                <td>
                                    &nbsp;
                                </td>
                            </tr>
                            {assign var='quantityDisplayed' value=$quantityDisplayed+$customization.quantity}
                        {/if}
                    {/foreach}

                    {* If it exists also some uncustomized products *}
                    {if $product.quantity-$quantityDisplayed > 0}
                        {include file="$pdf_shopping_cart_template" productLast=$product@last productFirst=$product@first cannotModify=1}
                    {/if}
                {/if}
            {/foreach}
            {assign var='last_was_odd' value=$product@iteration%2}
            {foreach $gift_products as $product}
                {assign var='productId' value=$product.id_product}
                {assign var='productAttributeId' value=$product.id_product_attribute}
                {assign var='quantityDisplayed' value=0}
                {assign var='odd' value=($product@iteration+$last_was_odd)%2}
                {assign var='ignoreProductLast' value=isset($customizedDatas.$productId.$productAttributeId)}
                {assign var='cannotModify' value=1}

                {* Display the gift product line *}
                {include file="$pdf_shopping_cart_template" productLast=$product@last productFirst=$product@first cannotModify=1}
            {/foreach}

            {if sizeof($discounts)}
                {foreach $discounts as $discount}
                    <tr>
                        <td colspan="5" style="text-align:left; width:70%">
                            {$discount.name|escape:'htmlall':'UTF-8'}
                        </td>
                        <td style="text-align:left; width:10%">
                            <span>
                                {if !$priceDisplay}
                                    {Tools::displayPrice($discount.value_real*-1)}
                                {else}
                                    {Tools::displayPrice($discount.value_tax_exc*-1)}
                                {/if}
                            </span>
                        </td>
                        <td style="text-align:left; width:5%">
                            1
                        </td>
                        <td style="text-align:right; width:15%">
                            <span>
                                {if !$priceDisplay}
                                    {Tools::displayPrice($discount.value_real*-1)}
                                {else}
                                    {Tools::displayPrice($discount.value_tax_exc*-1)}
                                {/if}
                            </span>
                        </td>
                        <td>
                            &nbsp;
                        </td>
                    </tr>
                {/foreach}
            {/if}
        </tbody>
        <tfoot>
            {if $total_wrapping != 0}
                <tr>
                    <td colspan="7" style="text-align:right; font-weight:bold;">
                        {if $use_taxes && $priceDisplay == 0}
                            {l s='Total gift wrapping (tax incl.):' mod='opartdevis'}
                        {else}
                            {l s='Total gift-wrapping cost:' mod='opartdevis'}
                        {/if}
                    </td>
                    <td colspan="1"style="text-align:right;">
                        {if $use_taxes}
                            {if $priceDisplay}
                                {Tools::displayPrice($total_wrapping_tax_exc)}
                            {else}
                                {Tools::displayPrice($total_wrapping)}
                            {/if}
                        {else}
                            {Tools::displayPrice($total_wrapping_tax_exc)}
                        {/if}
                    </td>
                </tr>
            {/if}
            {if $total_discounts != 0}
                <tr>
                    <td colspan="7" style="text-align:right; font-weight:bold;">
                        {if $use_taxes && $priceDisplay == 0}
                            {l s='Total vouchers (tax incl.) :' mod='opartdevis'}
                        {else}
                            {l s='Total vouchers (tax excl.) :' mod='opartdevis'}
                        {/if}
                    </td>
                    <td colspan="1" style="text-align:right;">
                        {if $use_taxes && $priceDisplay == 0}
                            {assign var='total_discounts_negative' value=$total_discounts * -1}
                        {else}
                            {assign var='total_discounts_negative' value=$total_discounts_tax_exc * -1}
                        {/if}
                        {Tools::displayPrice($total_discounts_negative)}
                    </td>
                </tr>
            {/if}
            {if $use_taxes}
                <tr>
                    <td colspan="7" style="text-align:right; font-weight:bold;">
                        {l s='Total products (tax excl.) :' mod='opartdevis'}
                    </td>
                    <td colspan="1" id="total_price_without_tax" style="text-align:right;">
                        {Tools::displayPrice($total_products)}
                    </td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align:right; font-weight:bold;">
                        {l s='Shipping (tax excl.)' mod='opartdevis'} ({$carrier->name}) :
                    </td>
                    <td colspan="1" style="text-align:right;">
                        <span id="total_price">
                            {Tools::displayPrice($total_shipping_tax_exc)}
                        </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align:right; font-weight:bold;">
                        {l s='Total tax :' mod='opartdevis'}
                    </td>
                    <td colspan="1" style="text-align:right;">
                        {Tools::displayPrice($total_tax)}
                    </td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align:right; font-weight:bold;">
                        {if $priceDisplay == 1}
                            {l s='Total :' mod='opartdevis'}
                        {else}
                            {l s='Total (tax incl.) :' mod='opartdevis'}
                        {/if}
                    </td>
                    <td colspan="1" style="text-align:right;">
                        <span id="total_price">{Tools::displayPrice($total_price)}</span>
                    </td>
                </tr>
            {else}
                <tr>
                    <td colspan="7" style="text-align:right; font-weight:bold;">
                        {l s='Total products :' mod='opartdevis'}
                    </td>
                    <td colspan="1" style="text-align:right;">
                        <span id="total_price">{Tools::displayPrice($total_products)}</span>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align:right; font-weight:bold;">
                        {l s='Shipping cost :' mod='opartdevis'}
                    </td>
                    <td colspan="1" style="text-align:right;">
                        <span id="total_price">
                            {Tools::displayPrice($total_shipping_tax_exc)}
                        </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="7" style="text-align:right; font-weight:bold;">
                        {l s='Total' mod='opartdevis'}
                    </td>
                    <td colspan="1" style="text-align:right;">
                        <span id="total_price">{Tools::displayPrice($total_price_without_tax)}</span>
                    </td>
                </tr>
            {/if}
        </tfoot>
    </table>
    <!-- /CART -->

    <!-- DETAIL TAX -->
    {if count($tax_details)>0 && $use_taxes}
        <br />
        <table cellpadding="3">
            <thead>
                <tr style="color:#FFFFFF; background-color: #4D4D4D; font-weight:bold; padding:2px;">
                    <th style="width: 40%;">{l s='TAX DETAILS' mod='opartdevis'}</th>
                    <th style="width: 20%;">{l s='Tax rate' mod='opartdevis'}</th>
                    <th style="width: 20%;">{l s='Total without tax' mod='opartdevis'}</th>
                    <th style="width: 20%;text-align: right;">{l s='Total tax' mod='opartdevis'}</th>
                </tr>
            </thead>
            {foreach $tax_details as $tax}
                <tr>
                    <td style="width: 40%;">{$tax.prefix|escape:'htmlall':'UTF-8'}</td>
                    <td style="width: 20%;">{$tax.name|escape:'htmlall':'UTF-8'}</td>
                    <td style="width: 20%;">{Tools::displayPrice($tax.total_ht)}</td>
                    <td style="width: 20%;text-align: right;">{Tools::displayPrice($tax.total_tax)}</td>
                </tr>
            {/foreach}
        </table>
    {/if}
    <!-- /DETAIL TAX -->

    <!-- MESSAGE -->
    {if count($message_visible)}
        <table cellpadding="3">
            <tr><td>&nbsp;</td></tr>
            <tr style="color:#FFFFFF; background-color: #4D4D4D; font-weight:bold;">
                <th>{l s='ADDITIONNAL INFORMATIONS' mod='opartdevis'}</th>
            </tr>
            {foreach $message_visible as $message}
            <tr>
                <td>{$message|escape:'htmlall':'UTF-8'}</td>
            </tr>
            {/foreach}
        </table>
    {/if}
    <!-- /MESSAGE -->

    <!-- STATUS -->
    <table>
        <tr>
            <td>
                {if $quotation->status == OpartQuotation::NOT_VALIDATED}
                    <p>{l s='This quotation is not yet validated, you can modify it' mod='opartdevis'}</p>
                {/if}
                {if $quotation->status == OpartQuotation::VALIDATED}
                    <p>{l s='This quotation has been validated' mod='opartdevis'}</p>
                {/if}
                {if $quotation->status == OpartQuotation::ORDERED}
                    <p>{l s='This quotation has been ordered' mod='opartdevis'}</p>
                {/if}
                {if $quotation->status == OpartQuotation::EXPIRED}
                    <p>{l s='This quotation is expired' mod='opartdevis'}</p>
                {/if}
            </td>
        </tr>
        <tr>
            <td>
                {if $validity != 0 && $quotation->status == OpartQuotation::VALIDATED}
                    <p>{l s='This quotation will be valid for %d days' sprintf=[$validity] mod='opartdevis'}</p>
                {/if}
            </td>
        </tr>
    </table>
    <!-- /STATUS -->

    <!-- VALIDATION TEXT -->
    {if count($validationText)}
    <table>
        {foreach $validationText as $validation}
        <tr style="text-align:left;font-weight:bold;">
            <td>{$validation|escape:'htmlall':'UTF-8'}</td>
        </tr>
        {/foreach}
    </table>
    {/if}
    <!-- /VALIDATION TEXT -->

    <!-- GOODFORAGREMENT TEXT -->
    {if count($goodforagrementText)}
    <table>
        {foreach $goodforagrementText as $goodforagrement}
        <tr style="text-align: right; font-weight:bold">
            <td>{$goodforagrement|escape:'htmlall':'UTF-8'}</td>
        </tr>
        {/foreach}
    </table>
    {/if}
    <!-- /GOODFORAGREMENT TEXT -->

</div>
