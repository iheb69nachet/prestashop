<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:18:56
  from '/var/www/html/modules/pm_advancedtopmenu/views/templates/front/pm_advancedtopmenu_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600358407574e6_95977459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69ff98650c8977f3bd82acd507f69f3e561c4e7b' => 
    array (
      0 => '/var/www/html/modules/pm_advancedtopmenu/views/templates/front/pm_advancedtopmenu_header.tpl',
      1 => 1608503493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600358407574e6_95977459 (Smarty_Internal_Template $_smarty_tpl) {
if (version_compare(@constant('_PS_VERSION_'),'1.7.0.0','>=')) {?>
	<?php $_smarty_tpl->_assignInScope('atm_base_uri', $_smarty_tpl->tpl_vars['urls']->value['base_url']);
} else { ?>
	<?php $_smarty_tpl->_assignInScope('atm_base_uri', $_smarty_tpl->tpl_vars['content_dir']->value);
}?>
<!-- MODULE PM_AdvancedTopMenu || Presta-Module.com -->
<!--[if lt IE 8]>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['atm_base_uri']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
modules/pm_advancedtopmenu/js/pm_advancedtopmenuiefix.js"><?php echo '</script'; ?>
>
<![endif]-->
<?php echo '<script'; ?>
 type="text/javascript">
	<?php if (isset($_smarty_tpl->tpl_vars['adtm_isToggleMode']->value) && $_smarty_tpl->tpl_vars['adtm_isToggleMode']->value) {?>
	var adtm_isToggleMode = true;
	<?php } else { ?>
	var adtm_isToggleMode = false;
	<?php }?>
	var adtm_menuHamburgerSelector = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['adtm_menuHamburgerSelector']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
<?php echo '</script'; ?>
>
<!-- /MODULE PM_AdvancedTopMenu || Presta-Module.com -->
<?php }
}
