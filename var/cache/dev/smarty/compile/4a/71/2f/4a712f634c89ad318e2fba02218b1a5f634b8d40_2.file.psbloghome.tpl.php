<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:18:13
  from '/var/www/html/modules/psblog/views/templates/hook/psbloghome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60035815dc7971_07622802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a712f634c89ad318e2fba02218b1a5f634b8d40' => 
    array (
      0 => '/var/www/html/modules/psblog/views/templates/hook/psbloghome.tpl',
      1 => 1608503493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60035815dc7971_07622802 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<!-- Block Last post-->
<div class=" container blog-container">
<div class="latest_block block">
<div class="blog_wapper bg_content">
	<h2 class="h1 products-section-title">		
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Latest Blog','mod'=>'psblog'),$_smarty_tpl ) );?>

	</h2>

	
	<div class="homeblog-inner">
	<div class="homeblog-inner-wrapper">
		<?php $_smarty_tpl->_assignInScope('no_blog', count($_smarty_tpl->tpl_vars['blogs']->value));?>
		<?php $_smarty_tpl->_assignInScope('sliderFor', 4);?> <!-- Define Number of product for SLIDER -->
		<?php if ($_smarty_tpl->tpl_vars['no_blog']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
			<ul id="blog-carousel" class="ps-carousel product_list">
		<?php } else { ?>
			<ul id="blog-grid" class="blog_grid product_list grid row gridcount">
		<?php }?>
	
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blogs']->value, 'blog', false, NULL, 'item_name', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
?>
			<li class="blog-post <?php if ($_smarty_tpl->tpl_vars['no_blog']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>item<?php } else { ?>product_item<?php }?>">
				<div class="blog-item">
					<?php if ($_smarty_tpl->tpl_vars['blog']->value['image']) {?>
						<div class="blog-image text-xs-center">
							<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="link">
								<img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['preview_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img-fluid"/>
							</a>
							<span class="pst-blogicons">
								<a title="Click to view Full Image" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['preview_url'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-lightbox="example-set" class="icon blogzoom"><i class="fa fa-search"></i>&nbsp;</a> 
								<a title="Click to view Read More" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="icon blogreadmore"><i class="fa fa-link"></i>&nbsp;</a>
							</span>
							
							<span class="blog-created">											
								<!--<span class="fa fa-calendar"></span>--> 
								<time class="date" datetime="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y"),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
								<!--<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%a"),'html','UTF-8' )),'mod'=>'psblog'),$_smarty_tpl ) );?>
,-->	 <!--day of week -->
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%e"),'html','UTF-8' )),'mod'=>'psblog'),$_smarty_tpl ) );?>
	<!-- day of month -->
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%b"),'html','UTF-8' )),'mod'=>'psblog'),$_smarty_tpl ) );?>
		<!-- month-->							
									<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y"),'html','UTF-8' )),'mod'=>'psblog'),$_smarty_tpl ) );?>
		<!-- year -->
								</time>
							</span>	
						</div>
					<?php }?>
					
					
					
						
					<div class="blog-content-wrap">	
										
						
						<!--<div class="blog-meta">							
						<span class="blog-author">
						<span class="author"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'by','mod'=>'psblog'),$_smarty_tpl ) );?>
:</span> 
						<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['author_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['author'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['author'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a> 
						</span>			
						<span class="blog-cat"> 
						<span class="fa fa-list"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In','mod'=>'psblog'),$_smarty_tpl ) );?>
:</span> 
						<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['category_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['category_title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['category_title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
						</span
																		
						
						<span class="blog-hit">							
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hit','mod'=>'psblog'),$_smarty_tpl ) );?>
: 
						<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['blog']->value['hits']), ENT_QUOTES, 'UTF-8');?>

						</span>
						</div>	-->					
						<div class="blog-shortinfo">
						<h4 class="title">
							<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
						</h4>
						<span class="blog-shortinfo"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags($_smarty_tpl->tpl_vars['blog']->value['description']),80,'...' ));?>
</span>
							
							<!--<div class="readmore">
							
								<a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="btn"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','mod'=>'psblog'),$_smarty_tpl ) );?>
</a>
							</div>-->
						</div>		
					</div>					
				</div>
			</li>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
		
		<?php if ($_smarty_tpl->tpl_vars['no_blog']->value >= $_smarty_tpl->tpl_vars['sliderFor']->value) {?>
			<div class="customNavigation">
				<a class="btn prev blog_prev">&nbsp;</a>
				<a class="btn next blog_next">&nbsp;</a>
			</div>
		<?php }?>
		</div>
	</div>
</div>
</div>
<!--<div class="blog-banner bannerimg"><a href="#"><img href="#" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
img/themeimage/blog_banner.jpg"></a></div>-->
</div>
<!-- /Block Last Post -->
<?php }
}
