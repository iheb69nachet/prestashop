<?php
/* Smarty version 3.1.33, created on 2021-02-23 14:39:00
  from '/var/www/html/themes/woodlayout1/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60350574852a56_95250884',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5570de0bbe7da4163d4ad84a3ddd92f8dd6d442' => 
    array (
      0 => '/var/www/html/themes/woodlayout1/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1608503495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60350574852a56_95250884 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
