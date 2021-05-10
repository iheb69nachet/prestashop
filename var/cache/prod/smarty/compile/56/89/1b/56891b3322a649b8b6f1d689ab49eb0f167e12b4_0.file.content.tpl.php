<?php
/* Smarty version 3.1.33, created on 2021-02-15 11:12:22
  from '/var/www/html/bo/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_602a4906bb3e80_53447139',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56891b3322a649b8b6f1d689ab49eb0f167e12b4' => 
    array (
      0 => '/var/www/html/bo/themes/default/template/content.tpl',
      1 => 1608503491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602a4906bb3e80_53447139 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
