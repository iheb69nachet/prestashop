<?php
/* Smarty version 3.1.33, created on 2021-02-23 14:45:31
  from '/var/www/html/themes/woodlayout1/templates/catalog/_partials/miniatures/product-listgrid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_603506fbb00b09_47237530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c4d7b8426ee6d91e89065260e2600c307adc025' => 
    array (
      0 => '/var/www/html/themes/woodlayout1/templates/catalog/_partials/miniatures/product-listgrid.tpl',
      1 => 1608503495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_603506fbb00b09_47237530 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1828488323603506fbae65c2_76491200', 'product_miniature_item');
}
/* {block 'product_variants'} */
class Block_1450876789603506fbaeda61_88012673 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
			  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
			<?php }?>
		  <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_reviews'} */
class Block_1519069439603506fbaef632_23516067 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

		<?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_thumbnail'} */
class Block_1203524497603506fbae7626_19000509 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
        <img
		  class = "primary-image"
          src = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
          alt = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
          data-full-size-image-url = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
        >
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHoverImage",'id_product'=>$_smarty_tpl->tpl_vars['product']->value['id_product'],'home'=>'home_default','large'=>'large_default'),$_smarty_tpl ) );?>
		
      </a>
	 
		
		<div class="product-actions">
		
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary view-button" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View Detail','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">				
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View Detail','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

				<!--<span class="pst-product-view pst-product-tooltip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View Detail','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>-->
			</a>
					
		
		<div class="button-grup">
			<a href="#" class="quick-view" data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick View','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

				<!--<span class="pst-product-quickview pst-product-tooltip"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick View','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>-->
			</a>	
		</div>
		</div>	
		
		<!--<div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">	
		  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1450876789603506fbaeda61_88012673', 'product_variants', $this->tplIndex);
?>

		</div>-->
		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1519069439603506fbaef632_23516067', 'product_reviews', $this->tplIndex);
?>

		
		
    <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_flags'} */
class Block_243420559603506fbaf0809_45580391 extends Smarty_Internal_Block
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
class Block_398219217603506fbaf2879_35962044 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <h3 class="h3 product-title" itemprop="name"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],25,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
      <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_1691318581603506fbaf4be8_85410664 extends Smarty_Internal_Block
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
class Block_1667461249603506fbafa385_40139796 extends Smarty_Internal_Block
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
class Block_979380188603506fbafcaa8_25410437 extends Smarty_Internal_Block
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
/* {block 'product_description_short'} */
class Block_1384114287603506fbaff950_96149722 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		  <div class="product-detail" itemprop="description"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
		<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_miniature_item'} */
class Block_1828488323603506fbae65c2_76491200 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_1828488323603506fbae65c2_76491200',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_1203524497603506fbae7626_19000509',
  ),
  'product_variants' => 
  array (
    0 => 'Block_1450876789603506fbaeda61_88012673',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_1519069439603506fbaef632_23516067',
  ),
  'product_flags' => 
  array (
    0 => 'Block_243420559603506fbaf0809_45580391',
  ),
  'product_name' => 
  array (
    0 => 'Block_398219217603506fbaf2879_35962044',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_1691318581603506fbaf4be8_85410664',
  ),
  'product_quantities' => 
  array (
    0 => 'Block_1667461249603506fbafa385_40139796',
  ),
  'product_availability' => 
  array (
    0 => 'Block_979380188603506fbafcaa8_25410437',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_1384114287603506fbaff950_96149722',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1203524497603506fbae7626_19000509', 'product_thumbnail', $this->tplIndex);
?>

	
	
	</div>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_243420559603506fbaf0809_45580391', 'product_flags', $this->tplIndex);
?>
	
	
 </div>
	
    <div class="product-description">
	
		
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_398219217603506fbaf2879_35962044', 'product_name', $this->tplIndex);
?>

	  

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1691318581603506fbaf4be8_85410664', 'product_price_and_shipping', $this->tplIndex);
?>

	  
	  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1667461249603506fbafa385_40139796', 'product_quantities', $this->tplIndex);
?>
 
	  
	  
	  <!--<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_979380188603506fbafcaa8_25410437', 'product_availability', $this->tplIndex);
?>

-->
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1384114287603506fbaff950_96149722', 'product_description_short', $this->tplIndex);
?>
			
		
		
		
		
		
	</div>
</div>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
