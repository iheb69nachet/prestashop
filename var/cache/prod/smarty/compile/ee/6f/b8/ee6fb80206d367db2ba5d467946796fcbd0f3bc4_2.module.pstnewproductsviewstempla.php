<?php
/* Smarty version 3.1.33, created on 2021-02-23 14:09:14
  from 'module:pstnewproductsviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6034fe7a29dbf3_34148044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee6fb80206d367db2ba5d467946796fcbd0f3bc4' => 
    array (
      0 => 'module:pstnewproductsviewstempla',
      1 => 1611325068,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_6034fe7a29dbf3_34148044 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="newproduct box-product">
<div class="container">
	<h2 class="h1 products-section-title">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest Products','mod'=>'pst_newproducts'),$_smarty_tpl ) );?>

	</h2>
   <div class="products tab-container">
	   <div class="homeproducts-row">
		  <?php $_smarty_tpl->_assignInScope('sliderFor', 5);?> <!-- Define Number of product for SLIDER -->
		  <?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
		  <div class="product-carousel">
		 <ul id="pstnewproduct-carousel" class="pstnewproduct-carousel pst-carousel product_list">
		<?php } else { ?>
			<ul id="newproduct-grid" class="newproduct-grid grid row gridcount product_list">
		<?php }?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
			<li class="<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>item<?php } else { ?>product_item col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3<?php }?>">				
				<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
			</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
			<div class="customNavigation">
				<a class="btn prev pstnewproduct_prev">&nbsp;</a>
				<a class="btn next pstnewproduct_next">&nbsp;</a>
			</div>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 0 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
		<a class="all-product-link float-xs-left pull-md-right h4" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allNewProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View More Products','mod'=>'pst_newproducts'),$_smarty_tpl ) );?>

		</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
	  </div>
		<?php }?>
		</div>		
		</div>		
</section><?php }
}
