<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:18:13
  from '/var/www/html/themes/woodlayout1/templates/catalog/_partials/miniatures/pstspecialproduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60035815c79bd6_80037998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9abf7a847e19563e36a907ba0ee7788dab969cf3' => 
    array (
      0 => '/var/www/html/themes/woodlayout1/templates/catalog/_partials/miniatures/pstspecialproduct.tpl',
      1 => 1608503495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60035815c79bd6_80037998 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54442523460035815c5f403_84242183', 'product_miniature_item');
}
/* {block 'product_thumbnail'} */
class Block_38343837560035815c60c55_58188334 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                    <img class="primary-image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
                </a>

                <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_buy'} */
class Block_135666249060035815c63444_92980113 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>

            </div>
            <?php }?> <?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_flags'} */
class Block_191526392060035815c64728_63773183 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <ul class="product-flags">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
            <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_name'} */
class Block_95868088160035815c66837_63093715 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<span class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],22,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></span> 
			<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_description_short'} */
class Block_16142714060035815c68a20_11528344 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product-details" itemprop="description"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['description_short'],150,'...' ));?>
</div>
			<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_price_and_shipping'} */
class Block_186866085160035815c6a662_66993330 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
				<?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
					<div class="product-price-and-shipping">
						<span itemprop="price" class="price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span> 
							<?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?> 
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

				
								<span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span> 
								<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
								<span class="discount-percentage"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span> 
								<?php }?> 
							<?php }?> 
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>
 
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

					</div>
				<?php }?> 
			<?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_quantities'} */
class Block_70070696060035815c70db5_90195142 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <div class="product-quantities">
				  <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock:','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</label>
				  <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'items','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'item','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?></span>
			  </div>
			  <?php
}
}
/* {/block 'product_quantities'} */
/* {block 'product_availability'} */
class Block_119381397660035815c738e9_65396519 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<span class="product-availability">
					  
						<?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
						  <i class="material-icons product-available">&#xE5CA;</i>
						  <sapn class="prod_available"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'stock available','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
						<?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
						  <i class="material-icons product-last-items">&#xE002;</i>
						  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Almost sold out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

						<?php } else { ?>
						  <i class="material-icons product-unavailable">&#xE14B;</i>
						  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'sold out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

						<?php }?>
						
					 
					</span>
				  <?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_reviews'} */
class Block_180546284860035815c76798_15735037 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
 
			<?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_miniature_item'} */
class Block_54442523460035815c5f403_84242183 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_54442523460035815c5f403_84242183',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_38343837560035815c60c55_58188334',
  ),
  'product_buy' => 
  array (
    0 => 'Block_135666249060035815c63444_92980113',
  ),
  'product_flags' => 
  array (
    0 => 'Block_191526392060035815c64728_63773183',
  ),
  'product_name' => 
  array (
    0 => 'Block_95868088160035815c66837_63093715',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_16142714060035815c68a20_11528344',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_186866085160035815c6a662_66993330',
  ),
  'product_quantities' => 
  array (
    0 => 'Block_70070696060035815c70db5_90195142',
  ),
  'product_availability' => 
  array (
    0 => 'Block_119381397660035815c738e9_65396519',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_180546284860035815c76798_15735037',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" itemscope itemtype="http://schema.org/Product">
        <div class="thumbnail-container">
            <div class="image-block">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38343837560035815c60c55_58188334', 'product_thumbnail', $this->tplIndex);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135666249060035815c63444_92980113', 'product_buy', $this->tplIndex);
?>


        </div>
		
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191526392060035815c64728_63773183', 'product_flags', $this->tplIndex);
?>


   

    <div class="product-description">
		<div class="product-desc-wrapper">

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_95868088160035815c66837_63093715', 'product_name', $this->tplIndex);
?>
 
			
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16142714060035815c68a20_11528344', 'product_description_short', $this->tplIndex);
?>

			
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_186866085160035815c6a662_66993330', 'product_price_and_shipping', $this->tplIndex);
?>
 
		
			
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70070696060035815c70db5_90195142', 'product_quantities', $this->tplIndex);
?>
 
			  
			  
			  <!--<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_119381397660035815c738e9_65396519', 'product_availability', $this->tplIndex);
?>
-->
				  
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180546284860035815c76798_15735037', 'product_reviews', $this->tplIndex);
?>


			
			<div class="product-counter">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'PSProductCountdown','id_product'=>$_smarty_tpl->tpl_vars['product']->value['id_product']),$_smarty_tpl ) );?>

			</div>

			<div class="product-actions">
				<div class="product-actions-button">
				<!--<input name="qty" type="text" class="form-control atc_qty" value="1" onfocus="if(this.value == '1') this.value = '';" onblur="if(this.value == '') this.value = '1';"/>-->
					<button class="add_to_cart btn btn-primary add-to-cart" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" onclick="mypresta_productListCart.add($(this));">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

					</button>
		
					<a href="#" class="quick-view btn btn-secondary" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick View','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

					</a>	
				</div>
			</div>

		</div>
	</div>
	 </div>

    <?php
}
}
/* {/block 'product_miniature_item'} */
}
