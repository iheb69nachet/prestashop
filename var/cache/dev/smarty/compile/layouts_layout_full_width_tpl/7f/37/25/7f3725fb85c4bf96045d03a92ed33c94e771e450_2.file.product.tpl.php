<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:18:56
  from '/var/www/html/themes/woodlayout1/templates/catalog/_partials/miniatures/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600358409c3f00_98859410',
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
function content_600358409c3f00_98859410 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
	 
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2011386602600358409a9522_29277862', 'product_miniature_item');
}
/* {block 'product_buy'} */
class Block_1698244061600358409adf60_04705958 extends Smarty_Internal_Block
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
class Block_58835121600358409b1a42_32745369 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?> <?php }?> <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_reviews'} */
class Block_1921238988600358409b3455_08773876 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
 
		<?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_flags'} */
class Block_1940831623600358409b42a3_90439902 extends Smarty_Internal_Block
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
class Block_1505027568600358409b62b5_81392448 extends Smarty_Internal_Block
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
class Block_1069123953600358409b86d6_24902858 extends Smarty_Internal_Block
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
class Block_533484078600358409bdd17_15163373 extends Smarty_Internal_Block
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
class Block_552561312600358409c08b8_29160006 extends Smarty_Internal_Block
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
class Block_749177341600358409aa7b0_29649661 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1698244061600358409adf60_04705958', 'product_buy', $this->tplIndex);
?>

		 
		 <!--<div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58835121600358409b1a42_32745369', 'product_variants', $this->tplIndex);
?>

		 </div>-->
		 
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1921238988600358409b3455_08773876', 'product_reviews', $this->tplIndex);
?>

		 
	  </div>
	  
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1940831623600358409b42a3_90439902', 'product_flags', $this->tplIndex);
?>

	  
	</div>
	<div class="product-description">
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1505027568600358409b62b5_81392448', 'product_name', $this->tplIndex);
?>
 
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1069123953600358409b86d6_24902858', 'product_price_and_shipping', $this->tplIndex);
?>
 
	  
	  
	 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_533484078600358409bdd17_15163373', 'product_quantities', $this->tplIndex);
?>
 
	  
	  
	  <!-- <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_552561312600358409c08b8_29160006', 'product_availability', $this->tplIndex);
?>
 -->
	  
	  <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_miniature_item'} */
class Block_2011386602600358409a9522_29277862 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_2011386602600358409a9522_29277862',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_749177341600358409aa7b0_29649661',
  ),
  'product_buy' => 
  array (
    0 => 'Block_1698244061600358409adf60_04705958',
  ),
  'product_variants' => 
  array (
    0 => 'Block_58835121600358409b1a42_32745369',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_1921238988600358409b3455_08773876',
  ),
  'product_flags' => 
  array (
    0 => 'Block_1940831623600358409b42a3_90439902',
  ),
  'product_name' => 
  array (
    0 => 'Block_1505027568600358409b62b5_81392448',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_1069123953600358409b86d6_24902858',
  ),
  'product_quantities' => 
  array (
    0 => 'Block_533484078600358409bdd17_15163373',
  ),
  'product_availability' => 
  array (
    0 => 'Block_552561312600358409c08b8_29160006',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_749177341600358409aa7b0_29649661', 'product_thumbnail', $this->tplIndex);
?>
 
	  
	  
	  
	</div>
</div>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
