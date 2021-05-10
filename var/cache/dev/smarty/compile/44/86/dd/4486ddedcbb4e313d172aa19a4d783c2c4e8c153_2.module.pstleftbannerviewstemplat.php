<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:08:09
  from 'module:pstleftbannerviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600355b9600a47_27814346',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4486ddedcbb4e313d172aa19a4d783c2c4e8c153' => 
    array (
      0 => 'module:pstleftbannerviewstemplat',
      1 => 1608503493,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600355b9600a47_27814346 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/modules/pst_leftbanner/views/templates/hook/pstleftbanner.tpl -->
<?php if ($_smarty_tpl->tpl_vars['pstleftbanner']->value['slides']) {?>
	<div id="pstleftbanner">
		<ul>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pstleftbanner']->value['slides'], 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
				<li class="slide pstleftbanner-container">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
">
						<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
" />
					</a>				
				</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>			
<?php }?><!-- end /var/www/html/modules/pst_leftbanner/views/templates/hook/pstleftbanner.tpl --><?php }
}
