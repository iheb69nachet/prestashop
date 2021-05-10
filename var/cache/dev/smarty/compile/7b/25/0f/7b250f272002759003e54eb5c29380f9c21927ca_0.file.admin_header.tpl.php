<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:19:48
  from '/var/www/html/modules/psproductcountdown/views/templates/hook/admin_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600358742c21b9_76500062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b250f272002759003e54eb5c29380f9c21927ca' => 
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
function content_600358742c21b9_76500062 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    var pspc_psv = <?php echo floatval($_smarty_tpl->tpl_vars['psv']->value);?>
;
<?php echo '</script'; ?>
><?php }
}
