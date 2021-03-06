<?php
/* Smarty version 3.1.33, created on 2021-02-23 12:42:29
  from '/var/www/html/themes/woodlayout1/templates/catalog/_partials/miniatures/brand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6034ea2537f493_71892506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15093b3aad393385f722f05e7339bf26b6343001' => 
    array (
      0 => '/var/www/html/themes/woodlayout1/templates/catalog/_partials/miniatures/brand.tpl',
      1 => 1608503495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6034ea2537f493_71892506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16588049086034ea2537b040_18615738', 'brand_miniature_item');
?>

<?php }
/* {block 'brand_miniature_item'} */
class Block_16588049086034ea2537b040_18615738 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'brand_miniature_item' => 
  array (
    0 => 'Block_16588049086034ea2537b040_18615738',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<li class="brand col-xs-12">
	<div class="brand-inner">
		<div class="row">
		<div class="brand-img left-side col-xs-12 col-sm-3">
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
"></a>
		</div>
		
		<div class="brand-infos middle-side col-xs-12 col-sm-5">
			<h3 class="h3 product-title"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></h3>
			<?php echo $_smarty_tpl->tpl_vars['brand']->value['text'];?>

		</div>
		
		<div class="brand-products right-side col-xs-12 col-sm-4">
			<p class="product-counter"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['nb_products'], ENT_QUOTES, 'UTF-8');?>
</a></p>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View products','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
		</div>
	</div>
	</div>
	</li>
<?php
}
}
/* {/block 'brand_miniature_item'} */
}
