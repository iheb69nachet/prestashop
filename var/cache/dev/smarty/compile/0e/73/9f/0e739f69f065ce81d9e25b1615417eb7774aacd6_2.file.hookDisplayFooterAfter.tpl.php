<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:18:56
  from '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayFooterAfter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60035840ad4955_09071564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e739f69f065ce81d9e25b1615417eb7774aacd6' => 
    array (
      0 => '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayFooterAfter.tpl',
      1 => 1608503493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60035840ad4955_09071564 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="aeuc_footer_info">
	<?php if (isset($_smarty_tpl->tpl_vars['delivery_additional_information']->value)) {?>
		* <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['delivery_additional_information']->value, ENT_QUOTES, 'UTF-8');?>

		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_shipping']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shipping and payment','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>
</a>
	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['tax_included']->value) {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All prices are mentioned tax included','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>

		<?php } else { ?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All prices are mentioned tax excluded','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>

		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['show_shipping']->value) {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'and','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>

			<?php if ($_smarty_tpl->tpl_vars['link_shipping']->value) {?>
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link_shipping']->value, ENT_QUOTES, 'UTF-8');?>
">
			<?php }?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'shipping excluded','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>

			<?php if ($_smarty_tpl->tpl_vars['link_shipping']->value) {?>
				</a>
			<?php }?>
		<?php }?>
	<?php }?>
</div>
<?php }
}
