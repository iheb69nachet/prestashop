<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:08:09
  from '/var/www/html/modules/opartdevis/views/templates/hook/simple_form_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600355b95b7520_75026555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8b0218d5f68d76133718fa19681a4f1f7605f93' => 
    array (
      0 => '/var/www/html/modules/opartdevis/views/templates/hook/simple_form_button.tpl',
      1 => 1608503493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600355b95b7520_75026555 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('opartdevis','SimpleQuotation',array()),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-default button button-small opartDevisQuotationRequestLink">
    <span>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Request a quotation','mod'=>'opartdevis'),$_smarty_tpl ) );?>

        <i class="icon-chevron-right right"></i>
    </span>
</a>
<?php }
}
