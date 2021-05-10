<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:18:56
  from '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60035840ab9eb0_45402969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14b67fd58b99fe7c94c04fb816a26c0c9203d95c' => 
    array (
      0 => '/var/www/html/modules/ps_legalcompliance/views/templates/hook/hookDisplayFooter.tpl',
      1 => 1608503493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60035840ab9eb0_45402969 (Smarty_Internal_Template $_smarty_tpl) {
?>
 <div class="euAboutUsCMS col-md-2">
 	<h3 class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Information','d'=>'Modules.Legalcompliance.Shop'),$_smarty_tpl ) );?>
</h3>
 	<ul>
 		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cms_links']->value, 'cms_link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cms_link']->value) {
?>
 			<li>
 				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_link']->value['link'], ENT_QUOTES, 'UTF-8');?>
" class="cms-page-link" title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['cms_link']->value['description'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_link']->value['id'], ENT_QUOTES, 'UTF-8');?>
"> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cms_link']->value['title'], ENT_QUOTES, 'UTF-8');?>
 </a>
 			</li>
 		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 	</ul>
 </div>
<?php }
}
