<?php
/* Smarty version 3.1.33, created on 2021-02-01 11:45:29
  from '/var/www/html/bo/themes/default/template/helpers/tree/tree_node_folder_checkbox_shops.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6017dbc9d195c2_03694933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94eca74f4b3311061b4d25ec24ee851c202d1482' => 
    array (
      0 => '/var/www/html/bo/themes/default/template/helpers/tree/tree_node_folder_checkbox_shops.tpl',
      1 => 1608503491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6017dbc9d195c2_03694933 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-folder">
	<span class="tree-folder-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-folder-name-disable<?php }?>">
		<input type="checkbox" name="checkBoxShopGroupAsso_<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> disabled="disabled"<?php }?> />
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Group: %s','sprintf'=>array(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['name'],'html','UTF-8' )))),$_smarty_tpl ) );?>
</label>
	</span>
	<ul class="tree">
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['children']->value,'UTF-8' ));?>

	</ul>
</li>
<?php }
}
