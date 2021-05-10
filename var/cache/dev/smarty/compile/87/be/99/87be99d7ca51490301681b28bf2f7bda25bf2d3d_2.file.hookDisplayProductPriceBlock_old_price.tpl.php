<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:18:13
  from '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_old_price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60035815c8b4a0_16642238',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87be99d7ca51490301681b28bf2f7bda25bf2d3d' => 
    array (
      0 => '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_old_price.tpl',
      1 => 1608503493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60035815c8b4a0_16642238 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['smartyVars']->value)) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value['old_price']) && isset($_smarty_tpl->tpl_vars['smartyVars']->value['old_price']['before_str_i18n'])) {?>
        <span class="aeuc_before_label">
            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartyVars']->value['old_price']['before_str_i18n'],'htmlall' )), ENT_QUOTES, 'UTF-8');?>

        </span>
    <?php }
}
}
}
