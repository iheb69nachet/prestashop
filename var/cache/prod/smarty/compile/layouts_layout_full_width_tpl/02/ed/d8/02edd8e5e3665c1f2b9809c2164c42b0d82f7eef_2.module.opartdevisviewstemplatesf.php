<?php
/* Smarty version 3.1.33, created on 2021-02-22 22:47:47
  from 'module:opartdevisviewstemplatesf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_603426838ac697_98304229',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02edd8e5e3665c1f2b9809c2164c42b0d82f7eef' => 
    array (
      0 => 'module:opartdevisviewstemplatesf',
      1 => 1608503493,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603426838ac697_98304229 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create your quotation','mod'=>'opartdevis'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1521505024603426838a6e14_26798672', "page_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block "page_content"} */
class Block_1521505024603426838a6e14_26798672 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_1521505024603426838a6e14_26798672',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create your quotation','mod'=>'opartdevis'),$_smarty_tpl ) );?>
</h1>

    <div class="alert alert-warning">
        <p>
            <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have to log in to create a quotation.','mod'=>'opartdevis'),$_smarty_tpl ) );?>
</strong>
            <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('authentication',true,null),'htmlall','UTF-8','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-default button button-medium">
                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in','mod'=>'opartdevis'),$_smarty_tpl ) );?>
 <i class="icon-chevron-right"></i> </span>
            </a>
        </p>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['OPARTDEVIS_SIMPLE_FORM']->value == 1) {?>
        <p>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Or you can send us a request using this','mod'=>'opartdevis'),$_smarty_tpl ) );?>

            <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('opartdevis','SimpleQuotation',array()),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-default button button-small">
                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Simple quotation form','mod'=>'opartdevis'),$_smarty_tpl ) );?>
 <i class="icon-chevron-right"></i> </span>
            </a>
        </p>
    <?php }
}
}
/* {/block "page_content"} */
}
