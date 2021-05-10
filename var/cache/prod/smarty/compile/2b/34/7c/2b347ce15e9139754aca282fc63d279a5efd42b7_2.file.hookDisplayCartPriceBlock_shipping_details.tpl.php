<?php
/* Smarty version 3.1.33, created on 2021-02-19 23:36:37
  from '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCartPriceBlock_shipping_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60303d75d9a352_00427120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b347ce15e9139754aca282fc63d279a5efd42b7' => 
    array (
      0 => '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayCartPriceBlock_shipping_details.tpl',
      1 => 1608503493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60303d75d9a352_00427120 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value, ENT_QUOTES, 'UTF-8');?>
" target="_blank">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Under conditions)','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>

 </a>
<?php }
}
