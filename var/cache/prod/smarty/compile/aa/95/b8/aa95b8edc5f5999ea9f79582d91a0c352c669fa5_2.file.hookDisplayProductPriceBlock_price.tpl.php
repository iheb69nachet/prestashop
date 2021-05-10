<?php
/* Smarty version 3.1.33, created on 2021-02-23 14:39:00
  from '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_price.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60350574826a90_60908177',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa95b8edc5f5999ea9f79582d91a0c352c669fa5' => 
    array (
      0 => '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayProductPriceBlock_price.tpl',
      1 => 1608503493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60350574826a90_60908177 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['smartyVars']->value)) {?>
        <?php if (isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship']) && isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['link_ship_pay']) && isset($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['ship_str_i18n'])) {?>
        <span class="aeuc_shipping_label">
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['smartyVars']->value['ship']['link_ship_pay'], ENT_QUOTES, 'UTF-8');?>
" class="iframe">
                <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['smartyVars']->value['ship']['ship_str_i18n'],'htmlall' )), ENT_QUOTES, 'UTF-8');?>

            </a>
        </span>
    <?php }
}
}
}
