<?php
/* Smarty version 3.1.33, created on 2021-02-23 14:35:34
  from '/var/www/html/themes/woodlayout1/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_603504a678bbd6_17081573',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f3725fb85c4bf96045d03a92ed33c94e771e450' => 
    array (
      0 => '/var/www/html/themes/woodlayout1/templates/catalog/_partials/miniatures/product.tpl',
      1 => 1608503495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_603504a678bbd6_17081573 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_757091123603504a6773854_62323599', 'product_miniature_item');
}
/* {block 'product_buy'} */
class Block_531304857603504a6777837_55347528 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>	
		<div class="product-actions">
		
		<div class="product-actions-button">
		<!--<input name="qty" type="text" class="form-control atc_qty" value="1" onfocus="if(this.value == '1') this.value = '';" onblur="if(this.value == '') this.value = '1';"/>-->
			<button class="add_to_cart btn btn-primary btn-sm add-to-cart" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
" onclick="mypresta_productListCart.add($(this));">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

			</button>
			
			<div class="button-grup">
				<a href="#" class="quick-view" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick View','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

				</a>	
			</div>
		</div>
		</div>
		<?php }?>
		<?php
}
}
/* {/block 'product_buy'} */
/* {block 'product_variants'} */
class Block_940709159603504a677af30_13195949 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?> <?php }?> <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_reviews'} */
class Block_764709715603504a677cbf2_65049849 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
 
		<?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_flags'} */
class Block_316764415603504a677d8b8_35032160 extends Smarty_Internal_Block
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
class Block_1337192330603504a677f8e4_84997915 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<span class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],25,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></span> 
	  <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_533203094603504a6781a83_22857921 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
		  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
			  <div class="product-price-and-shipping">
				 <span itemprop="price" class="price">
					<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

				 </span> 
				 <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?> 
					 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

					 <span class="regular-price">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>

					 </span> 
						<?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
					 <span class="discount-percentage">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>

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
class Block_1106952666603504a67868c9_70671166 extends Smarty_Internal_Block
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
class Block_311305444603504a6788cf4_99390943 extends Smarty_Internal_Block
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
/* {block 'product_thumbnail'} */
class Block_1639518115603504a6774c82_96157980 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
			 <img class="primary-image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
" data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"> 
			 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHoverImage",'id_product'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'home'=>'home_default','large'=>'large_default'),$_smarty_tpl ) );?>

		 </a>
		 
		 	
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_531304857603504a6777837_55347528', 'product_buy', $this->tplIndex);
?>

		 
		 <!--<div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_940709159603504a677af30_13195949', 'product_variants', $this->tplIndex);
?>

		 </div>-->
		 
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_764709715603504a677cbf2_65049849', 'product_reviews', $this->tplIndex);
?>

		 
	  </div>
	  
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_316764415603504a677d8b8_35032160', 'product_flags', $this->tplIndex);
?>

	  
	</div>
	<div class="product-description">
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1337192330603504a677f8e4_84997915', 'product_name', $this->tplIndex);
?>
 
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_533203094603504a6781a83_22857921', 'product_price_and_shipping', $this->tplIndex);
?>
 
	  
	  
	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1106952666603504a67868c9_70671166', 'product_quantities', $this->tplIndex);
?>
 
	  
	  
	  <!-- <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_311305444603504a6788cf4_99390943', 'product_availability', $this->tplIndex);
?>
 -->
	  
	  <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_miniature_item'} */
class Block_757091123603504a6773854_62323599 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_757091123603504a6773854_62323599',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_1639518115603504a6774c82_96157980',
  ),
  'product_buy' => 
  array (
    0 => 'Block_531304857603504a6777837_55347528',
  ),
  'product_variants' => 
  array (
    0 => 'Block_940709159603504a677af30_13195949',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_764709715603504a677cbf2_65049849',
  ),
  'product_flags' => 
  array (
    0 => 'Block_316764415603504a677d8b8_35032160',
  ),
  'product_name' => 
  array (
    0 => 'Block_1337192330603504a677f8e4_84997915',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_533203094603504a6781a83_22857921',
  ),
  'product_quantities' => 
  array (
    0 => 'Block_1106952666603504a67868c9_70671166',
  ),
  'product_availability' => 
  array (
    0 => 'Block_311305444603504a6788cf4_99390943',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1639518115603504a6774c82_96157980', 'product_thumbnail', $this->tplIndex);
?>
 
	  
	  
	  
	</div>
</div>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
