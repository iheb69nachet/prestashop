<?php
/* Smarty version 3.1.33, created on 2021-02-23 12:43:16
  from 'module:psblogviewstemplatesfront' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6034ea544bf307_94202275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e537bec8913f40f126152db7c50de98e3abf858' => 
    array (
      0 => 'module:psblogviewstemplatesfront',
      1 => 1608503493,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:psblog/views/templates/front/default/_listing_blog.tpl' => 1,
    'module:psblog/views/templates/front/default/_grid_blog.tpl' => 1,
    'module:psblog/views/templates/front/default/_pagination.tpl' => 1,
  ),
),false)) {
function content_6034ea544bf307_94202275 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17322870676034ea544a27d9_03871964', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'content'} */
class Block_17322870676034ea544a27d9_03871964 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17322870676034ea544a27d9_03871964',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if (isset($_smarty_tpl->tpl_vars['no_follow']->value) && $_smarty_tpl->tpl_vars['no_follow']->value) {?>
		<?php $_smarty_tpl->_assignInScope('no_follow_text', 'rel="nofollow"');?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('no_follow_text', '');?>
	<?php }?> 
	<div id="blog-listing" class="blogs-container box">
		<?php if (isset($_smarty_tpl->tpl_vars['filter']->value['type'])) {?>
			<?php if ($_smarty_tpl->tpl_vars['filter']->value['type'] == 'tag') {?>
				<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter Blogs By Tag','mod'=>'psblog'),$_smarty_tpl ) );?>
 : <span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['tag'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></h1>
			<?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['type'] == 'author') {?>
				<h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter Blogs By Blogger','mod'=>'psblog'),$_smarty_tpl ) );?>
 : <span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['employee']->firstname,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['filter']->value['employee']->lastname,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></h1>
			<?php }?>
		<?php } else { ?>
			<h1 class="blog-heading"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest Blogs','mod'=>'psblog'),$_smarty_tpl ) );?>
</h1>
		<?php }?>

		<div class="inner">
			<?php if (count($_smarty_tpl->tpl_vars['leading_blogs']->value)+count($_smarty_tpl->tpl_vars['secondary_blogs']->value) > 0) {?>
				<?php if (count($_smarty_tpl->tpl_vars['leading_blogs']->value)) {?>
				<div class="leading-blog">  
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leading_blogs']->value, 'blog', false, NULL, 'leading_blog', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['blog']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['total'];
$__foreach_blog_0_saved = $_smarty_tpl->tpl_vars['blog'];
?>
						<?php if (($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['listing_leading_column']->value == 1) && $_smarty_tpl->tpl_vars['listing_leading_column']->value > 1) {?>
						  <div class="row">
						<?php }?>
						<div class="<?php if ($_smarty_tpl->tpl_vars['listing_leading_column']->value <= 1) {?>no<?php }?>col-lg-<?php echo htmlspecialchars(floor(12/call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listing_leading_column']->value,'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
 blog-item">
							<?php $_smarty_tpl->_subTemplateRender("module:psblog/views/templates/front/default/_listing_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
						</div>	
						<?php if (($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['listing_leading_column']->value == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['last'] : null)) && $_smarty_tpl->tpl_vars['listing_leading_column']->value > 1) {?>
							</div>
						<?php }?>
					<?php
$_smarty_tpl->tpl_vars['blog'] = $__foreach_blog_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
				<?php }?>

				<?php if (count($_smarty_tpl->tpl_vars['secondary_blogs']->value)) {?>
				<div class="secondary-blog">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secondary_blogs']->value, 'blog', false, NULL, 'secondary_blog', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['blog']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->iteration++;
$_smarty_tpl->tpl_vars['__smarty_foreach_secondary_blog']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_secondary_blog']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_secondary_blog']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_secondary_blog']->value['total'];
$__foreach_blog_1_saved = $_smarty_tpl->tpl_vars['blog'];
?>
						<?php if (($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['listing_secondary_column']->value == 1) && $_smarty_tpl->tpl_vars['listing_secondary_column']->value > 1) {?>
						  	<div class="row">
						<?php }?>
						<div class="<?php if ($_smarty_tpl->tpl_vars['listing_secondary_column']->value <= 1) {?>no<?php }?>col-lg-<?php echo htmlspecialchars(floor(12/call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listing_secondary_column']->value,'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
 blog-item">
							<?php $_smarty_tpl->_subTemplateRender("module:psblog/views/templates/front/default/_grid_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
						</div>	
						<?php if (($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['listing_secondary_column']->value == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_secondary_blog']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_secondary_blog']->value['last'] : null)) && $_smarty_tpl->tpl_vars['listing_secondary_column']->value > 1) {?>
							</div>
						<?php }?>
					<?php
$_smarty_tpl->tpl_vars['blog'] = $__foreach_blog_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
				<?php }?>
				<div class="ps_sortPagiBar clearfix bottom-line">
					<?php $_smarty_tpl->_subTemplateRender("module:psblog/views/templates/front/default/_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				</div>
			<?php } else { ?>
				<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry, We are update data, please come back later!!!!','mod'=>'psblog'),$_smarty_tpl ) );?>
</div>
			<?php }?>    

		</div>
	</div>
<?php
}
}
/* {/block 'content'} */
}
