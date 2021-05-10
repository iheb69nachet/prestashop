<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:08:09
  from '/var/www/html/themes/woodlayout1/templates/catalog/_partials/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600355b96f8a19_26556152',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86ea73c46fbd9624a019a3c4124f8d621c976b86' => 
    array (
      0 => '/var/www/html/themes/woodlayout1/templates/catalog/_partials/products.tpl',
      1 => 1608503495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-listgrid.tpl' => 1,
    'file:_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_600355b96f8a19_26556152 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list">
	<div class="products row">
		<ul class="product_list grid gridcount"> <!-- removed product_grid-->
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['products'], 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1107983600355b96f59f6_87794025', 'product_miniature');
?>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ul>
	</div>
  

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2017720220600355b96f6d15_62167517', 'pagination');
?>


	<!--<div class="hidden-md-up text-xs-right up">
		<a href="#header" class="btn btn-secondary">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to top','d'=>'Shop.Actions'),$_smarty_tpl ) );?>

			<i class="material-icons">&#xE316;</i>
		</a>
	</div>-->
</div>
<?php }
/* {block 'product_miniature'} */
class Block_1107983600355b96f59f6_87794025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_1107983600355b96f59f6_87794025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<li class="product_item col-xs-12 col-sm-6 col-md-4 col-lg-4">
						<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-listgrid.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
					</li>
				<?php
}
}
/* {/block 'product_miniature'} */
/* {block 'pagination'} */
class Block_2017720220600355b96f6d15_62167517 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_2017720220600355b96f6d15_62167517',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
	<?php
}
}
/* {/block 'pagination'} */
}
