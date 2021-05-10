<?php
/* Smarty version 3.1.33, created on 2021-02-23 12:43:25
  from 'module:psblogviewstemplatesfront' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6034ea5d8d4f75_37883019',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '702af25f5f88eff8c8d4c5cf5132b317ef66fcf4' => 
    array (
      0 => 'module:psblogviewstemplatesfront',
      1 => 1608503493,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6034ea5d8d4f75_37883019 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<article class="blog-item clearfix">
	<?php if ($_smarty_tpl->tpl_vars['blog']->value['image'] && $_smarty_tpl->tpl_vars['config']->value->get('listing_show_image',1)) {?>
		<div class="blog-image col-xs-12 col-sm-12">
			<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['preview_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="" class="img-fluid" />
			<span class="pst-blogicons">
								<a title="Click to view Full Image" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['preview_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-lightbox="example-set" class="icon blogzoom"><i class="fa fa-search"></i>&nbsp;</a> 
								<a title="Click to view Read More" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="icon blogreadmore"><i class="fa fa-link"></i>&nbsp;</a>
			</span>
		</div>
	<?php }?>
	<div class="col-xs-12 col-sm-12 blog-content-wrap">
		<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_title','1')) {?>
		<h4 class="title media-heading"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a></h4>
		<?php }?>
		<div class="blog-meta">
			<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_author','1') && !empty($_smarty_tpl->tpl_vars['blog']->value['author'])) {?>
			<span class="blog-author">				
				<i class="fa fa-user-o"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By','mod'=>'psblog'),$_smarty_tpl ) );?>
:
				<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['author_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['author'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['author'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a> 
			</span>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_category','1')) {?>
			<span class="blog-cat">
				<i class="fa fa-file-o"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In','mod'=>'psblog'),$_smarty_tpl ) );?>
:  
				<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['category_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['category_title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['category_title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
			</span>
			<?php }?>
			
			<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_created','1')) {?>
			<span class="blog-created">				
				<i class="fa fa-calendar"></i>
				<time class="date" datetime="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y"),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%a"),'html','UTF-8' )),'mod'=>'psblog'),$_smarty_tpl ) );?>
,	<!-- day of week -->
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%b"),'html','UTF-8' )),'mod'=>'psblog'),$_smarty_tpl ) );?>
		<!-- month-->
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%e"),'html','UTF-8' )),'mod'=>'psblog'),$_smarty_tpl ) );?>
,	<!-- day of month -->
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y"),'html','UTF-8' )),'mod'=>'psblog'),$_smarty_tpl ) );?>
		<!-- year -->
				</time>
			</span>
			<?php }?>
			
			<?php if (isset($_smarty_tpl->tpl_vars['blog']->value['comment_count']) && $_smarty_tpl->tpl_vars['config']->value->get('listing_show_counter','1')) {?>	
			<span class="blog-ctncomment">				
				<i class="fa fa-comment-o"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment','mod'=>'psblog'),$_smarty_tpl ) );?>
: 
				<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['blog']->value['comment_count']), ENT_QUOTES, 'UTF-8');?>

			</span>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_hit','1')) {?>	
			<span class="blog-hit">				
				<i class="fa fa-heart-o"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hit','mod'=>'psblog'),$_smarty_tpl ) );?>
:
				<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['blog']->value['hits']), ENT_QUOTES, 'UTF-8');?>

			</span>
			<?php }?>
		</div>


		<div class="blog-shortinfo">
			<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_description','1')) {?>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['blog']->value['description']),160,'...' ));?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['config']->value->get('listing_show_readmore',1)) {?>
			<p>
				<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="more btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','mod'=>'psblog'),$_smarty_tpl ) );?>
</a>
			</p>
			<?php }?>
		</div>
	</div>
</article>
	
<!---
	Translation Day of Week - NOT REMOVE
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sunday','mod'=>'psblog'),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Monday','mod'=>'psblog'),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tuesday','mod'=>'psblog'),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wednesday','mod'=>'psblog'),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thursday','mod'=>'psblog'),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Friday','mod'=>'psblog'),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Saturday','mod'=>'psblog'),$_smarty_tpl ) );?>

-->
<!---
	Translation Month - NOT REMOVE
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'January','mod'=>'psblog'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'February','mod'=>'psblog'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'March','mod'=>'psblog'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'April','mod'=>'psblog'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'May','mod'=>'psblog'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'June','mod'=>'psblog'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'July','mod'=>'psblog'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'August','mod'=>'psblog'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'September','mod'=>'psblog'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'October','mod'=>'psblog'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'November','mod'=>'psblog'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'December','mod'=>'psblog'),$_smarty_tpl ) );?>

--><?php }
}
