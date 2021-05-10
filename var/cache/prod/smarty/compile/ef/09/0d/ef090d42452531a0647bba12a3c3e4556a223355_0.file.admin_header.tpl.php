<?php
/* Smarty version 3.1.33, created on 2021-02-15 11:12:16
  from '/var/www/html/modules/psproductcountdown/views/templates/hook/admin_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_602a4900369ea2_60838368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef090d42452531a0647bba12a3c3e4556a223355' => 
    array (
      0 => '/var/www/html/modules/psproductcountdown/views/templates/hook/admin_header.tpl',
      1 => 1608503493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602a4900369ea2_60838368 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var pspc_psv = <?php echo floatval($_smarty_tpl->tpl_vars['psv']->value);?>
;
<?php echo '</script'; ?>
><?php }
}
