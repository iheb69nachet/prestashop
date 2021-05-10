<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:18:56
  from 'module:pstblocktopcmsviewstempla' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60035840819715_36260855',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eda2202e8cf835505ddc9907acce97a7020164a' => 
    array (
      0 => 'module:pstblocktopcmsviewstempla',
      1 => 1608503493,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60035840819715_36260855 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/modules/pst_blocktopcms/views/templates/hook/pst_blocktopcms.tpl --><div id="pstblocktopcms">
<?php if ($_smarty_tpl->tpl_vars['psttopcmsblockinfos']->value['text'] != '') {?>
	<?php echo $_smarty_tpl->tpl_vars['psttopcmsblockinfos']->value['text'];?>

<?php } else { ?>		
	<div class="blocktopcms">
		<span class="customtext topcmstext1">Welcome Here, Get Free Shipping On Orders Over $99!</span>
	</div>
<?php }?>
</div>
<!-- end /var/www/html/modules/pst_blocktopcms/views/templates/hook/pst_blocktopcms.tpl --><?php }
}
