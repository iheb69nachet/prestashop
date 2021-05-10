<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:18:13
  from 'module:pstspecialsviewstemplates' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60035815c57913_41219205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29aced1e9290ae90e630daf580cdd4027aa48ee9' => 
    array (
      0 => 'module:pstspecialsviewstemplates',
      1 => 1608503493,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/pstspecialproduct.tpl' => 1,
  ),
),false)) {
function content_60035815c57913_41219205 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/modules/pst_specials/views/templates/hook/pst_specials.tpl -->
<section class="special-products">
<div class="container">	
<div class="special-wrapper">
	<!--<h2 class="h1 products-section-title">		
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Deal of the day','mod'=>'pst_specials'),$_smarty_tpl ) );?>

   </h2>-->
     
	<div class="products">
		<?php $_smarty_tpl->_assignInScope('sliderFor', 1);?> <!-- Define Number of product for SLIDER -->
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
			<div class="product-carousel">	
			<ul id="pstspecial-carousel" class="pstspecial-carousel pst-carousel product_list">
		<?php } else { ?>
			<ul id="pstspecial-grid" class="pstspecial-grid grid row gridcount product_list">
		<?php }?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
			<li class="<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>item<?php } else { ?>product_item col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12<?php }?>">				
				<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/pstspecialproduct.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
			</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
			<div class="customNavigation">
				<a class="btn prev pstspecial_prev">&nbsp;</a>
				<a class="btn next pstspecial_next">&nbsp;</a>
			</div>
		<?php }?>
		
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 0 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
		<a class="all-product-link float-xs-left pull-md-right h4" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['allSpecialProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View More Products','mod'=>'pst_specials'),$_smarty_tpl ) );?>

		</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['no_prod']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
	  </div>
	  <?php }?>
	</div>
</div>
</div>
</section>
<!-- end /var/www/html/modules/pst_specials/views/templates/hook/pst_specials.tpl --><?php }
}
