{**
 * Prestashop module : OpartDevis
 * 
 * @author Olivier CLEMENCE <manit4c@gmail.com>
 * @copyright  Op'art
 * @license Tous droits réservés / Le droit d'auteur s'applique (All rights reserved / French copyright law applies)
 *}

<tr style="background-color: {$bgcolor|escape:'htmlall':'UTF-8'};">
    <td style="text-align:left; width:10%">
        {if $product.display_img}
            <img src="{$product.img_link}" alt="{$product.name|escape:'htmlall':'UTF-8'}">
        {/if}
    </td>
    <td style="width:30%">
        <table>
            <tr>
                <td>
                    {$product.name|escape:'htmlall':'UTF-8'}
                </td>
            </tr>
            {if isset($product.attributes) && $product.attributes}
                <tr>
                    <td>
                        {$product.attributes|escape:'htmlall':'UTF-8'}
                    </td>
                </tr>
            {/if}
            {if $product.ecotax != 0}
                <tr>
                    <td>
                        {l s='ecotax per product' mod='opartdevis'}: {Tools::displayPrice($product.ecotax)}
                    </td>
                </tr>
            {/if}
        </table>
    </td>
    <td style="text-align:left; width:10%">
        {if $product.reference}
            {$product.reference|escape:'htmlall':'UTF-8'}
        {else}
            --
        {/if} 
        {$smarty.foreach.foo.iteration|escape:'htmlall':'UTF-8'}
    </td>
    <td style="text-align:left; width:10%">
        {if $product.standard_price}
            {Tools::displayPrice($product.standard_price)}
        {/if}
    </td>
    <td style="text-align:left; width:10%">
        {if $product.reduction_value}
            {if (Configuration::get('OPARTDEVIS_REDUC_PERCENT'))}
                {$product.reduction_value} %
            {else}
                {Tools::displayPrice($product.reduction_value)}
            {/if}
        {/if}
    </td>
    <td style="text-align:left; width:10%">
        {if !empty($product.gift)}
            <span>{l s='Gift!'  mod='opartdevis'}</span>
        {else}
            {if !$priceDisplay}
                {Tools::displayPrice($product.price_wt)}
            {else}
                {Tools::displayPrice($product.price)}
            {/if}
        {/if}
    </td>
    <td style="text-align:left; width:5%">
        {$product.cart_quantity|escape:'htmlall':'UTF-8'}
    </td>
    <td style="text-align:right; width:15%">
        <span id="total_product_price_{$product.id_product|escape:'htmlall':'UTF-8'}_{$product.id_product_attribute|escape:'htmlall':'UTF-8'}{if $quantityDisplayed > 0}_nocustom{/if}_{$product.id_address_delivery|intval}{if !empty($product.gift)}_gift{/if}">
            {if !empty($product.gift)}
                <span>{l s='Gift!' mod='opartdevis'}</span>
            {else}
                {if $quantityDisplayed == 0 AND isset($customizedDatas.$productId.$productAttributeId)}
                    {if !$priceDisplay}
                        {Tools::displayPrice($product.total_customization_wt)}
                    {else}
                        {Tools::displayPrice($product.total_customization)}
                    {/if}
                {else}
                    {if !$priceDisplay}
                        {Tools::displayPrice($product.total_wt)}
                    {else}
                        {Tools::displayPrice($product.total)}
                    {/if}
                {/if}
            {/if}
        </span>
    </td>
</tr>
