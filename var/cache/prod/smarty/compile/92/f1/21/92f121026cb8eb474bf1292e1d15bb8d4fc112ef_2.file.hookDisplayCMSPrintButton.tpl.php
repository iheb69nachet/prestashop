<?php
/* Smarty version 3.1.33, created on 2021-02-21 23:04:26
  from '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCMSPrintButton.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6032d8ea5f7ef2_31737330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92f121026cb8eb474bf1292e1d15bb8d4fc112ef' => 
    array (
      0 => '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCMSPrintButton.tpl',
      1 => 1608503493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6032d8ea5f7ef2_31737330 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['directPrint']->value) {?>
	<input type="submit" name="printCMSPage" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print this page','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>
" class="btn btn-secondary" onclick="window.print()" />
<?php } else { ?>
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['print_link']->value, ENT_QUOTES, 'UTF-8');?>
" class="btn btn-secondary" target="_blank"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print this page','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>
</a>
<?php }
}
}
