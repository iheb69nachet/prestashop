<?php
/* Smarty version 3.1.33, created on 2021-02-23 14:45:31
  from '/var/www/html/modules/psblog/views/templates/hook/categories_menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_603506fbac8275_80342130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc1a8bd4471db6ebd9d81c5307f756620eb69364' => 
    array (
      0 => '/var/www/html/modules/psblog/views/templates/hook/categories_menu.tpl',
      1 => 1608503493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603506fbac8275_80342130 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Block categories module -->
    <?php if ($_smarty_tpl->tpl_vars['tree']->value) {?>
    <div id="categories_blog_menu" class="block blog-menu">
	  <h4 class="block_title hidden-md-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Blog Categories','mod'=>'psblog'),$_smarty_tpl ) );?>
</h4>
      <h4 class="block_title hidden-lg-up" data-target="#block_side_category" data-toggle="collapse"><?php if (isset($_smarty_tpl->tpl_vars['currentCategory']->value)) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentCategory']->value->title,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Blog Categories','mod'=>'psblog'),$_smarty_tpl ) );
}?>
		<span class="float-xs-right">
		<span class="navbar-toggler collapse-icons">
		<i class="material-icons add">&#xE313;</i>
		<i class="material-icons remove">&#xE316;</i>
		</span>
    </span>
	  </h4>
        <div class="block_content collapse" id="block_side_category">
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>
        </div>
    </div>
    <?php }?>
    <!-- /Block categories module -->
<?php }
}
