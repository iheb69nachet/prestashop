<?php
/* Smarty version 3.1.33, created on 2021-02-11 16:13:22
  from '/var/www/html/bo/themes/default/template/helpers/list/list_action_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60254992dc8149_90708898',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '180e24d6f373e135a2d1931a3c9ca0938002768f' => 
    array (
      0 => '/var/www/html/bo/themes/default/template/helpers/list/list_action_view.tpl',
      1 => 1608503491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60254992dc8149_90708898 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" >
	<i class="icon-search-plus"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
