<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:19:44
  from '/var/www/html/bo/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60035870edb625_33981049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8abba11b3e86e4fe0d4a7f4612cccce9ffea062f' => 
    array (
      0 => '/var/www/html/bo/themes/new-theme/template/content.tpl',
      1 => 1608503491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60035870edb625_33981049 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
