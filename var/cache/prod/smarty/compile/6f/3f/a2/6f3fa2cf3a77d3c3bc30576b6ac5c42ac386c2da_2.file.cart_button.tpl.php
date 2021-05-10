<?php
/* Smarty version 3.1.33, created on 2021-02-19 23:36:37
  from '/var/www/html/modules/opartdevis/views/templates/hook/cart_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60303d75d83708_32469258',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f3fa2cf3a77d3c3bc30576b6ac5c42ac386c2da' => 
    array (
      0 => '/var/www/html/modules/opartdevis/views/templates/hook/cart_button.tpl',
      1 => 1608503493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60303d75d83708_32469258 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="clearfix text-sm-center mt-1 mb-1">
    <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('opartdevis','CreateQuotation',array('create'=>true)),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary">
        <span>
            <b>
                <?php if (!$_smarty_tpl->tpl_vars['quotation']->value) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Turn this cart into a quote','mod'=>'opartdevis'),$_smarty_tpl ) );?>

                <?php } else { ?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Update the quotation','mod'=>'opartdevis'),$_smarty_tpl ) );?>

                <?php }?>
            </b>
        </span>
    </a>
</div>
<?php }
}
