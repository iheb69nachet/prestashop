<?php
/* Smarty version 3.1.33, created on 2021-02-11 16:13:11
  from '/var/www/html/bo/themes/default/template/controllers/feature_value/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_602549879b9637_77628191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2ef17cb13287a0aec427d177167dd4f01554b8f' => 
    array (
      0 => '/var/www/html/bo/themes/default/template/controllers/feature_value/helpers/form/form.tpl',
      1 => 1608503491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602549879b9637_77628191 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1992265902602549879b51e2_64291050', "input_row");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input_row"} */
class Block_1992265902602549879b51e2_64291050 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input_row' => 
  array (
    0 => 'Block_1992265902602549879b51e2_64291050',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['name'] == 'value') {?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFeatureValueForm",'id_feature_value'=>intval($_smarty_tpl->tpl_vars['feature_value']->value->id)),$_smarty_tpl ) );?>

	<?php }
}
}
/* {/block "input_row"} */
}
