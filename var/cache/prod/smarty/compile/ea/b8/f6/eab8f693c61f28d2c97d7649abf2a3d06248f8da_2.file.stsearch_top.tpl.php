<?php
/* Smarty version 3.1.33, created on 2021-04-15 07:39:20
  from '/var/www/html/modules/stproductsearch/stsearch_top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6077d1881a8821_75987986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eab8f693c61f28d2c97d7649abf2a3d06248f8da' => 
    array (
      0 => '/var/www/html/modules/stproductsearch/stsearch_top.tpl',
      1 => 1611325068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6077d1881a8821_75987986 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Block search module -->
<div id="_desktop_st_search_block_top" class="block exclusive st_search_block_top">
	<!--<h4 class="title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'stproductsearch'),$_smarty_tpl ) );?>
</h4>-->
	<form method="get" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('productsearch',true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" id="stsearchtopbox">
		<input type="hidden" name="fc" value="module" />
		<input type="hidden" name="module" value="stproductsearch" />
		<input type="hidden" name="controller" value="productsearch" />
		    <!--	<label for="search_query_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search products:','mod'=>'stproductsearch'),$_smarty_tpl ) );?>
</label>-->
		<div class="block_content clearfix">
						
			<div class="product_search">
			<div class="list-cate-wrapper">
				<input id="stsearchtop-cate-id" name="cate" value="<?php if (isset($_smarty_tpl->tpl_vars['selectedCate']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['selectedCate']->value, ENT_QUOTES, 'UTF-8');
}?>" type="hidden">
				<a id="dropdownListCateTop" class="select-title" rel="nofollow" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span><?php if ($_smarty_tpl->tpl_vars['selectedCateName']->value != '') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['selectedCateName']->value, ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Categories','mod'=>'stproductsearch'),$_smarty_tpl ) );
}?></span>
					<i class="material-icons pull-xs-right">keyboard_arrow_down</i>
				</a>
				<div class="list-cate dropdown-menu" aria-labelledby="dropdownListCateTop">
					<a href="#" data-cate-id="" data-cate-name="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Categories','mod'=>'stproductsearch'),$_smarty_tpl ) );?>
" class="cate-item<?php if ($_smarty_tpl->tpl_vars['selectedCate']->value == '') {?> active<?php }?>" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All Categories','mod'=>'stproductsearch'),$_smarty_tpl ) );?>
</a>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cates']->value, 'cate', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['cate']->value) {
?>
					<a href="#" data-cate-id="<?php echo htmlspecialchars(stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cate']->value['id_category'],'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" data-cate-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cate']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="cate-item<?php if (isset($_smarty_tpl->tpl_vars['selectedCate']->value) && $_smarty_tpl->tpl_vars['cate']->value['id_category'] == $_smarty_tpl->tpl_vars['selectedCate']->value) {?> active<?php }?>" ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cate']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
			<input class="search_query form-control grey" type="text" id="st_search_query_top" name="search_query" value="<?php echo htmlspecialchars(stripslashes(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_query']->value,'htmlall','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
" placeholder="Search here..." />
			</div>
			
			<button type="submit" id="st_search_top_button" class="btn btn-default button button-small">search</button> 
		</div>
	</form>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	var blocksearch_type = 'top';
<?php echo '</script'; ?>
>
<!-- /Block search module -->
<?php }
}
