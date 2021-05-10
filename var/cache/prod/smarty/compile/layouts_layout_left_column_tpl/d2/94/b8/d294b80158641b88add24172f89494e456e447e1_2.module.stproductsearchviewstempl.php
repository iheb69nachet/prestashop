<?php
/* Smarty version 3.1.33, created on 2021-02-23 12:50:33
  from 'module:stproductsearchviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6034ec09d37fe4_89044507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd294b80158641b88add24172f89494e456e447e1' => 
    array (
      0 => 'module:stproductsearchviewstempl',
      1 => 1611325068,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
  ),
),false)) {
function content_6034ec09d37fe4_89044507 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9045182836034ec09d1f951_80737317', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_top'} */
class Block_15682984996034ec09d32649_44954542 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['search_products']->value), 0, false);
?>
			  <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_12739668726034ec09d35841_16635915 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <div id="" class="hidden-sm-down">
				<?php echo $_smarty_tpl->tpl_vars['search_products']->value['rendered_active_filters'];?>

			  </div>
			<?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_17557402706034ec09d36691_23762590 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['search_products']->value), 0, false);
?>
				<?php
}
}
/* {/block 'product_list'} */
/* {block 'content'} */
class Block_9045182836034ec09d1f951_80737317 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9045182836034ec09d1f951_80737317',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_15682984996034ec09d32649_44954542',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_12739668726034ec09d35841_16635915',
  ),
  'product_list' => 
  array (
    0 => 'Block_17557402706034ec09d36691_23762590',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'stproductsearch'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

	<h1 
	<?php if (isset($_smarty_tpl->tpl_vars['instant_search']->value) && $_smarty_tpl->tpl_vars['instant_search']->value) {?>id="instant_search_results"<?php }?> 
	class="page-heading <?php if (!isset($_smarty_tpl->tpl_vars['instant_search']->value) || (isset($_smarty_tpl->tpl_vars['instant_search']->value) && !$_smarty_tpl->tpl_vars['instant_search']->value)) {?> product-listing<?php }?>">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'stproductsearch'),$_smarty_tpl ) );?>
&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['nbProducts']->value > 0) {?>
			<span class="lighter">
				"<?php if (isset($_smarty_tpl->tpl_vars['search_query']->value) && $_smarty_tpl->tpl_vars['search_query']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_query']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['search_tag']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_tag']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['ref']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ref']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"
			</span>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['instant_search']->value) && $_smarty_tpl->tpl_vars['instant_search']->value) {?>
			<a href="#" class="close">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Return to the previous page','mod'=>'stproductsearch'),$_smarty_tpl ) );?>

			</a>
		<?php } else { ?>
			<span class="heading-counter">
				<?php if ($_smarty_tpl->tpl_vars['nbProducts']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d result has been found.','sprintf'=>array(intval($_smarty_tpl->tpl_vars['nbProducts']->value)),'mod'=>'stproductsearch'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d results have been found.','sprintf'=>array(intval($_smarty_tpl->tpl_vars['nbProducts']->value)),'mod'=>'stproductsearch'),$_smarty_tpl ) );
}?>
			</span>
		<?php }?>
	</h1>
	
	<?php if (!$_smarty_tpl->tpl_vars['nbProducts']->value) {?>
		<p class="alert alert-warning">
			<?php if (isset($_smarty_tpl->tpl_vars['search_query']->value) && $_smarty_tpl->tpl_vars['search_query']->value) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No results were found for your search','mod'=>'stproductsearch'),$_smarty_tpl ) );?>
&nbsp;"<?php if (isset($_smarty_tpl->tpl_vars['search_query']->value)) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_query']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"
			<?php } elseif (isset($_smarty_tpl->tpl_vars['search_tag']->value) && $_smarty_tpl->tpl_vars['search_tag']->value) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No results were found for your search','mod'=>'stproductsearch'),$_smarty_tpl ) );?>
&nbsp;"<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_tag']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please enter a search keyword','mod'=>'stproductsearch'),$_smarty_tpl ) );?>

			<?php }?>
		</p>
	<?php } else { ?>
		<?php if (isset($_smarty_tpl->tpl_vars['instant_search']->value) && $_smarty_tpl->tpl_vars['instant_search']->value) {?>
			<p class="alert alert-info">
				<?php if ($_smarty_tpl->tpl_vars['nbProducts']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d result has been found.','sprintf'=>array(intval($_smarty_tpl->tpl_vars['nbProducts']->value)),'mod'=>'stproductsearch'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d results have been found.','sprintf'=>array(intval($_smarty_tpl->tpl_vars['nbProducts']->value)),'mod'=>'stproductsearch'),$_smarty_tpl ) );
}?>
			</p>
		<?php }?>
		
		<section id="products">
			<div id="">
			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15682984996034ec09d32649_44954542', 'product_list_top', $this->tplIndex);
?>

			</div>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12739668726034ec09d35841_16635915', 'product_list_active_filters', $this->tplIndex);
?>

			<div id="">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17557402706034ec09d36691_23762590', 'product_list', $this->tplIndex);
?>

			</div>
		</section>
		
	<?php }
}
}
/* {/block 'content'} */
}
