<?php
/* Smarty version 3.1.33, created on 2021-02-23 14:45:31
  from '/var/www/html/modules/pst_imagehover/views/templates/hook/pst_imagehover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_603506fbbaae85_04178718',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd039bc3090098f166e920b8c142c41fdd14946a2' => 
    array (
      0 => '/var/www/html/modules/pst_imagehover/views/templates/hook/pst_imagehover.tpl',
      1 => 1611325068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603506fbbaae85_04178718 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['home_image']->value) {?>
	<img class="replace-2x img_hover img-responsive secondary-image" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['home_image']->value, ENT_QUOTES, 'UTF-8');?>
" data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['large_image']->value, ENT_QUOTES, 'UTF-8');?>
" alt="" />
<?php }
}
}
