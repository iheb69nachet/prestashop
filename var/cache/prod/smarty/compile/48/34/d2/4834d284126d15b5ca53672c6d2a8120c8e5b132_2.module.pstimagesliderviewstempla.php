<?php
/* Smarty version 3.1.33, created on 2021-02-23 14:09:14
  from 'module:pstimagesliderviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6034fe7a4a6128_34101738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4834d284126d15b5ca53672c6d2a8120c8e5b132' => 
    array (
      0 => 'module:pstimagesliderviewstempla',
      1 => 1611325068,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6034fe7a4a6128_34101738 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['psthomeslider']->value['slides']) {?>
	<div class="flexslider" data-interval="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['psthomeslider']->value['speed'], ENT_QUOTES, 'UTF-8');?>
" data-pause="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['psthomeslider']->value['pause'], ENT_QUOTES, 'UTF-8');?>
">
		<div class="loadingdiv spinner"></div>
		<ul class="slides">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['psthomeslider']->value['slides'], 'slide');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->value) {
?>
				<li class="slide">
					<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['url'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8');?>
">
					<img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['image_url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['legend'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['slide']->value['title'], ENT_QUOTES, 'UTF-8');?>
" />
					</a>
					<?php if ($_smarty_tpl->tpl_vars['slide']->value['description']) {?>
						<div class="caption-description">
							<?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>

						</div>
					<?php }?>					
				</li>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
<?php }?>

<?php }
}
