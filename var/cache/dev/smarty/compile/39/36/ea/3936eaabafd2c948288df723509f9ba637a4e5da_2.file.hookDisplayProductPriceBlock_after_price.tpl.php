<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:18:56
  from '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_after_price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60035840927581_63179407',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3936eaabafd2c948288df723509f9ba637a4e5da' => 
    array (
      0 => '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_after_price.tpl',
      1 => 1608503493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60035840927581_63179407 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['smartyVars']->value)) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value['after_price']) && isset($_smarty_tpl->tpl_vars['smartyVars']->value['after_price']['delivery_str_i18n'])) {?>
        <span class="aeuc_delivery_label">
            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartyVars']->value['after_price']['delivery_str_i18n'],'htmlall' )), ENT_QUOTES, 'UTF-8');?>

        </span>
    <?php }
}
}
}
