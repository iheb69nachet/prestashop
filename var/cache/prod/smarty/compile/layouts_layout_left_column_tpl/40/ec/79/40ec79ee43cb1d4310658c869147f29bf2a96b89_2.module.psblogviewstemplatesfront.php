<?php
/* Smarty version 3.1.33, created on 2021-02-23 12:43:25
  from 'module:psblogviewstemplatesfront' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6034ea5d6e7044_63512284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40ec79ee43cb1d4310658c869147f29bf2a96b89' => 
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
function content_6034ea5d6e7044_63512284 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16543106906034ea5d6c5670_45576460', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'content'} */
class Block_16543106906034ea5d6c5670_45576460 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16543106906034ea5d6c5670_45576460',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php if (isset($_smarty_tpl->tpl_vars['category']->value) && $_smarty_tpl->tpl_vars['category']->value->id_psblogcat && $_smarty_tpl->tpl_vars['category']->value->active) {?>
	<?php if (isset($_smarty_tpl->tpl_vars['no_follow']->value) && $_smarty_tpl->tpl_vars['no_follow']->value) {?>
		<?php $_smarty_tpl->_assignInScope('no_follow_text', 'rel="nofollow"');?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('no_follow_text', '');?>
	<?php }?>
	<div id="blog-category" class="blogs-container">
		<div class="inner">	
			<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_categoryinfo',1)) {?>
						<?php if ($_smarty_tpl->tpl_vars['category']->value->image) {?>
							<div class="row">
								<div class="category-image col-xs-12 col-sm-12 col-lg-4 col-md-4 text-center">
									<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->image,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" alt="" />
								</div>
								<div class="col-xs-12 col-sm-12 col-lg-8 category-info caption">
									<h1><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->title,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h1>
									<?php echo $_smarty_tpl->tpl_vars['category']->value->content_text;?>
								</div>	
							</div>	
						<?php } else { ?>
							<div class="category-info caption">
								<h1><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value->title,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h1>
								<?php echo $_smarty_tpl->tpl_vars['category']->value->content_text;?>
							</div>
						<?php }?>					 
					</div>
				</div> 
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['childrens']->value && $_smarty_tpl->tpl_vars['config']->value->get('listing_show_subcategories',1)) {?>
			<div class="childrens">
				<h3 class="subcategories-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Childrens','mod'=>'psblog'),$_smarty_tpl ) );?>
</h3>
				<div class="row">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['childrens']->value, 'children', false, NULL, 'children', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['children']->value) {
?>
						<div class="col-lg-6">
							<?php if (isset($_smarty_tpl->tpl_vars['children']->value['thumb'])) {?>
							<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['children']->value['thumb'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img-fluid"/>
							<?php }?>
							<h4 class="category-title"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['children']->value['category_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['children']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['children']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a></h4>
							<div class="child-desc"><?php echo $_smarty_tpl->tpl_vars['children']->value['content_text'];?>
</div>						</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			 	</div>
			</div>
			<?php }?>

		 
			<?php if (count($_smarty_tpl->tpl_vars['leading_blogs']->value)+count($_smarty_tpl->tpl_vars['secondary_blogs']->value)) {?>
				<div class="Recnet-blog">
					<h3 class="Recent-title h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recent blog posts','mod'=>'psblog'),$_smarty_tpl ) );?>
</h3>
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
$__foreach_blog_1_saved = $_smarty_tpl->tpl_vars['blog'];
?>
						 
							<?php if (($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['listing_leading_column']->value == 1) && $_smarty_tpl->tpl_vars['listing_leading_column']->value > 1) {?>
								<div class="flexRow">
							<?php }?>
							<div class="<?php if ($_smarty_tpl->tpl_vars['listing_leading_column']->value <= 1) {?>no<?php }?>col-lg-<?php echo htmlspecialchars(floor(12/call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listing_leading_column']->value,'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
">
								<?php $_smarty_tpl->_subTemplateRender("module:psblog/views/templates/front/default/_listing_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
							</div>	
							<?php if (($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['listing_leading_column']->value == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_leading_blog']->value['last'] : null)) && $_smarty_tpl->tpl_vars['listing_leading_column']->value > 1) {?>
								</div>
							<?php }?>
						
						<?php
$_smarty_tpl->tpl_vars['blog'] = $__foreach_blog_1_saved;
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
$__foreach_blog_2_saved = $_smarty_tpl->tpl_vars['blog'];
?>
							<?php if (($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['listing_secondary_column']->value == 1) && $_smarty_tpl->tpl_vars['listing_secondary_column']->value > 1) {?>
							  <div class="flexRow">
							<?php }?>

							<div class="<?php if ($_smarty_tpl->tpl_vars['listing_secondary_column']->value <= 1) {?>no<?php }?>col-lg-<?php echo htmlspecialchars(floor(12/call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['listing_secondary_column']->value,'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
">
								<?php $_smarty_tpl->_subTemplateRender("module:psblog/views/templates/front/default/_grid_blog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
							</div>	
							<?php if (($_smarty_tpl->tpl_vars['blog']->iteration%$_smarty_tpl->tpl_vars['listing_secondary_column']->value == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_secondary_blog']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_secondary_blog']->value['last'] : null)) && $_smarty_tpl->tpl_vars['listing_secondary_column']->value > 1) {?>
							</div>
							<?php }?>
						<?php
$_smarty_tpl->tpl_vars['blog'] = $__foreach_blog_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
					<?php }?>
				
					<div class="ps_sortPagiBar clearfix bottom-line">
						<?php $_smarty_tpl->_subTemplateRender("module:psblog/views/templates/front/default/_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					</div>
				</div>  
			<?php } elseif (empty($_smarty_tpl->tpl_vars['childrens']->value)) {?>
				<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry, We are updating data, please come back later!!!!','mod'=>'psblog'),$_smarty_tpl ) );?>
</div>
			<?php }?>		  
		</div>
	</div>
	<?php } else { ?>
	<div class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry, We are updating data, please come back later!!!!','mod'=>'psblog'),$_smarty_tpl ) );?>
</div>
	<?php }
}
}
/* {/block 'content'} */
}
