<?php
/* Smarty version 3.1.33, created on 2021-04-15 07:39:20
  from '/var/www/html/modules/psproductcountdown/views/templates/hook/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6077d188073b49_53481221',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75231cbdbb7d9af1e6214ba5156488e27eb3f2bf' => 
    array (
      0 => '/var/www/html/modules/psproductcountdown/views/templates/hook/header.tpl',
      1 => 1608503493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6077d188073b49_53481221 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- module psproductcountdown start -->
<?php echo '<script'; ?>
 type="text/javascript">
    <?php if ($_smarty_tpl->tpl_vars['show_weeks']->value) {?>
        var pspc_labels = ['weeks', 'days', 'hours', 'minutes', 'seconds'];
        var pspc_labels_lang = {
            'weeks': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'weeks','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
',
            'days': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'days','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
',
            'hours': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'hours','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
',
            'minutes': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'minutes','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
',
            'seconds': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'seconds','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
'
        };
    <?php } else { ?>
    var pspc_labels = ['days', 'hours', 'minutes', 'seconds'];
    var pspc_labels_lang = {
        'days': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'days','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
',
        'hours': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'hours','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
',
        'minutes': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'minutes','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
',
        'seconds': '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'seconds','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
'
    };
    <?php }?>
    var pspc_show_weeks = <?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['show_weeks']->value), ENT_QUOTES, 'UTF-8');?>
;
    var pspc_psv = <?php echo htmlspecialchars(floatval($_smarty_tpl->tpl_vars['psv']->value), ENT_QUOTES, 'UTF-8');?>
;
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['custom_css']->value) {?>
    <style type="text/css">
        <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['custom_css']->value,'quotes','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

    </style>
<?php }?>
<!-- module psproductcountdown end --><?php }
}
