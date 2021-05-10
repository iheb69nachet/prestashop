<?php
/* Smarty version 3.1.33, created on 2021-02-23 14:09:14
  from 'module:pstbrandlogoviewstemplate' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6034fe7a24c463_30032290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99ef92ab9e77481411b7c03c895d6f8f1b53b6df' => 
    array (
      0 => 'module:pstbrandlogoviewstemplate',
      1 => 1611325068,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6034fe7a24c463_30032290 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="brands" >
<div class="container">
  <div class="product-carousel">
	<!--<h2 class="h1 products-section-title text-uppercase">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Our Brands','mod'=>'pst_brandlogo'),$_smarty_tpl ) );?>

	</h2>-->
  
	<div class="products">
    	<?php if ($_smarty_tpl->tpl_vars['brands']->value) {?>
     
			<?php $_smarty_tpl->_assignInScope('sliderFor', 5);?> <!-- Define Number of product for SLIDER -->
			<?php $_smarty_tpl->_assignInScope('brandCount', count($_smarty_tpl->tpl_vars['brands']->value));?>
	
			<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['brandCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
				<div class="customNavigation">
					<a class="btn prev pstbrand_prev">&nbsp;</a>
					<a class="btn next pstbrand_next">&nbsp;</a>
				</div>
				
				<ul id="pstbrand-carousel" class="pstbrand-carousel  pst-carousel product_list">
			<?php } else { ?>
				<ul id="pstbrand-grid" class="pstbrand-grid grid row gridcount product_list">
			<?php }?>
	 
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['brands']->value, 'brand', false, NULL, 'brand_list', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['brand']->value) {
?>
				<li class="<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['brandCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>item<?php } else { ?>product_item col-xs-12 col-sm-4 col-md-3<?php }?>">
					<div class="brand-image">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['brand']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getManufacturerImageLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer']), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" />
					</a>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['brandname']->value) {?>
						<span class="h3 product-title" itemprop="name">
							<a class="product-name" itemprop="url"  href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['brand']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['brand']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
						</span>
					<?php }?>
				</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	 		
			</ul>
			</ul>
		<?php } else { ?>
			<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No brand','mod'=>'pst_brandlogo'),$_smarty_tpl ) );?>
</p>
		<?php }?>
	</div>
	</div>
</div>
</section>
<?php }
}
