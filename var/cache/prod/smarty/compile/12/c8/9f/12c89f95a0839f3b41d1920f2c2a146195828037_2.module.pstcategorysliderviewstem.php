<?php
/* Smarty version 3.1.33, created on 2021-02-23 14:09:13
  from 'module:pstcategorysliderviewstem' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6034fe797970c0_00270844',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12c89f95a0839f3b41d1920f2c2a146195828037' => 
    array (
      0 => 'module:pstcategorysliderviewstem',
      1 => 1611325068,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_6034fe797970c0_00270844 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="pstcategorytabs" class="tabs products_block clearfix"> 	
<div class="container">
	<div class="categoryslider-wrapper">
	<h2 class="h1 products-section-title">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Top Categories','mod'=>'pst_categoryslider'),$_smarty_tpl ) );?>

	</h2>
	
	
	<ul id="pstcategory-tabs" class="nav nav-tabs clearfix">
		<?php $_smarty_tpl->_assignInScope('count', 0);?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pstcategorysliderinfos']->value, 'pstcategorysliderinfo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pstcategorysliderinfo']->value) {
?>
			<li class="nav-item">
				<a href="#tab_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pstcategorysliderinfo']->value['id'], ENT_QUOTES, 'UTF-8');?>
" data-toggle="tab" class="nav-link <?php if ($_smarty_tpl->tpl_vars['count']->value == 0) {?>active<?php }?>"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pstcategorysliderinfo']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
			</li>
			<?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ul>
	<div class="tab-content">
		<?php $_smarty_tpl->_assignInScope('tabcount', 0);?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pstcategorysliderinfos']->value, 'pstcategorysliderinfo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pstcategorysliderinfo']->value) {
?>
			<div id="tab_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pstcategorysliderinfo']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="tab-pane <?php if ($_smarty_tpl->tpl_vars['tabcount']->value == 0) {?>active<?php }?>">
				<?php if (isset($_smarty_tpl->tpl_vars['pstcategorysliderinfo']->value['product']) && $_smarty_tpl->tpl_vars['pstcategorysliderinfo']->value['product']) {?>

					<?php $_smarty_tpl->_assignInScope('sliderFor', 5);?>
					<?php $_smarty_tpl->_assignInScope('productCount', count($_smarty_tpl->tpl_vars['pstcategorysliderinfo']->value['product']));?>
					
					
					
					<div class="products">
						<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['productCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
						<div class="product-carousel">
							<ul id="pstcategory<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pstcategorysliderinfo']->value['id'], ENT_QUOTES, 'UTF-8');?>
-carousel" class="pst-carousel product_list product_slider_grid" data-catid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pstcategorysliderinfo']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
						<?php } else { ?>
							<ul id="pstcategory<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pstcategorysliderinfo']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="product_list grid row gridcount product_slider_grid" data-catid="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pstcategorysliderinfo']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
						<?php }?>
						
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pstcategorysliderinfo']->value['product'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
								<li class="<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['productCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>item<?php } else { ?>product_item col-xs-12 col-sm-6 col-md-4 col-lg-3 col-xl-3<?php }?>">
								<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
								</li>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
						
						<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['productCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
							<div class="customNavigation">
								<a class="btn prev pstcategory_prev">&nbsp;</a>
								<a class="btn next pstcategory_next">&nbsp;</a>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['slider']->value == 1 && $_smarty_tpl->tpl_vars['productCount']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
	  					</div>
	  					<?php }?>						
					</div>
				<?php } else { ?>
					<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No Products in current tab at this time.','mod'=>'pst_categoryslider'),$_smarty_tpl ) );?>
</div>
				<?php }?>
				
				<?php if (isset($_smarty_tpl->tpl_vars['pstcategorysliderinfo']->value['cate_id']) && $_smarty_tpl->tpl_vars['pstcategorysliderinfo']->value['cate_id']) {?>
					<?php if ($_smarty_tpl->tpl_vars['pstcategorysliderinfo']->value['id'] == $_smarty_tpl->tpl_vars['pstcategorysliderinfo']->value['cate_id']['id_category']) {?>
						<div class="categoryimage">
							<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pstcategorysliderinfo']->value['cate_id']['image'], ENT_QUOTES, 'UTF-8');?>
" alt="" class="category_img"/>
						</div>
					<?php }?>
				<?php }?>
				
			</div> 
		<?php $_smarty_tpl->_assignInScope('tabcount', $_smarty_tpl->tpl_vars['tabcount']->value+1);?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div> 
	</div>
</div>
</div><?php }
}
