<?php
/* Smarty version 3.1.33, created on 2021-02-23 14:29:01
  from 'module:psblogviewstemplatesfront' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6035031d0d0132_09008895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60e54336e9d4d9d31f4b0a101ba8f389c9e1e2e0' => 
    array (
      0 => 'module:psblogviewstemplatesfront',
      1 => 1608503493,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:psblog/views/templates/front/default/_pagination.tpl' => 1,
  ),
),false)) {
function content_6035031d0d0132_09008895 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>

<div id="blog-localengine">
		<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','mod'=>'psblog'),$_smarty_tpl ) );?>
</h3>
		
		<div class="comments">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment', false, NULL, 'comment', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?> <?php $_smarty_tpl->_assignInScope('default', '');?>
			<div class="comment-item" id="comment<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['id_comment'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
				<img src="http://www.gravatar.com/avatar/<?php echo htmlspecialchars(md5(strtolower(trim(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['email'],'html','UTF-8' ))))), ENT_QUOTES, 'UTF-8');?>
?d=<?php echo htmlspecialchars(urlencode(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['default']->value,'html','UTF-8' ))), ENT_QUOTES, 'UTF-8');?>
&s=60" align="left"/>
				<div class="comment-wrap">
					<div class="comment-meta">
						<span class="comment-created"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Created On','mod'=>'psblog'),$_smarty_tpl ) );?>
<span> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['comment']->value['date_add']),"%A, %B %e, %Y"),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></span>
						<span class="comment-postedby"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Posted By','mod'=>'psblog'),$_smarty_tpl ) );?>
<span> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['user'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></span>
						<span class="comment-link"><a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_link']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
#comment<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['comment']->value['id_comment']), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment Link','mod'=>'psblog'),$_smarty_tpl ) );?>
</a></span>
					</div>

					<div class="comment-content">
						<?php echo nl2br($_smarty_tpl->tpl_vars['comment']->value['comment']);?>
					</div>
				</div>
			</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php if ($_smarty_tpl->tpl_vars['blog_count_comment']->value) {?>
			<div class="ps_sortPagiBar clearfix bottom-line">
				<?php $_smarty_tpl->_subTemplateRender("module:psblog/views/templates/front/default/_pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	        </div>
	        <?php }?>
		</div>

		<h3><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Leave your comment','mod'=>'psblog'),$_smarty_tpl ) );?>
</h3>
		<form class="form-horizontal" method="post" id="comment-form" action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_link']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" onsubmit="return false;">
			<div class="form-group row">
				<label class="col-lg-3 col-form-label" for="inputFullName"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Full Name','mod'=>'psblog'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-9">
					<input type="text" name="user" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your full name','mod'=>'psblog'),$_smarty_tpl ) );?>
" id="inputFullName" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-lg-3 col-form-label" for="inputEmail"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','mod'=>'psblog'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-9">
					<input type="text" name="email"  placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your email','mod'=>'psblog'),$_smarty_tpl ) );?>
" id="inputEmail" class="form-control">
				</div>
			</div>
			
			<div class="form-group row">
				<label class="col-lg-3 col-form-label" for="inputComment"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment','mod'=>'psblog'),$_smarty_tpl ) );?>
</label>
				<div class="col-lg-9">
					<textarea type="text" name="comment" rows="6"  placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your comment','mod'=>'psblog'),$_smarty_tpl ) );?>
" id="inputComment" class="form-control"></textarea>
				</div>
			</div>
			 <div class="form-group row">
			 	<label class="col-lg-3 col-form-label" for="inputEmail"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Captcha','mod'=>'psblog'),$_smarty_tpl ) );?>
</label>
			 	<div class="col-lg-8 col-md-8 ipts-captcha">
			 		 <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['captcha_image']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="comment-capcha-image" align="left"/>
				 	<input class="form-control" type="text" name="captcha" value="" size="10"  />
				</div>
			 </div>
			 <input type="hidden" name="id_psblog_blog" value="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id_psblog_blog']->value), ENT_QUOTES, 'UTF-8');?>
">
			<div class="form-group row">
				<div class="col-lg-9 offset-md-3"><button class="btn btn-primary" name="submitcomment" type="submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit','mod'=>'psblog'),$_smarty_tpl ) );?>
</button></div>
			</div>
		</form>
</div><?php }
}
