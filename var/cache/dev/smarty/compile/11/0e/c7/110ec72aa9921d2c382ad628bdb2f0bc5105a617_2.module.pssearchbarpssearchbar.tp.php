<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:18:28
  from 'module:pssearchbarpssearchbar.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60035824196035_13057230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:pssearchbarpssearchbar.tp',
      1 => 1608503495,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60035824196035_13057230 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/themes/woodlayout1/modules/ps_searchbar/ps_searchbar.tpl --><!-- Block search module TOP -->
<div id="search_widget" class="col-lg-4 col-md-5 col-sm-12 search-widget" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
	<!--<span class="search_button"></span>-->
	<div class="searchtoggle">            
	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
		<input type="hidden" name="controller" value="search">
		<input type="text" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search our catalog','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
		<button type="submit">			
			<span class="tc-search-icon"></span>
		</button>
	</form>
	</div>
</div>
<!-- /Block search module TOP -->
<!-- end /var/www/html/themes/woodlayout1/modules/ps_searchbar/ps_searchbar.tpl --><?php }
}
