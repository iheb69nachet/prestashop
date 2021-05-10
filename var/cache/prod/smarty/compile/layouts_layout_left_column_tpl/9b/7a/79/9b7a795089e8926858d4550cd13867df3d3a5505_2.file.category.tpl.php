<?php
/* Smarty version 3.1.33, created on 2021-02-23 14:45:31
  from '/var/www/html/themes/woodlayout1/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_603506fb905f99_87617852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b7a795089e8926858d4550cd13867df3d3a5505' => 
    array (
      0 => '/var/www/html/themes/woodlayout1/templates/catalog/listing/category.tpl',
      1 => 1608503495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_603506fb905f99_87617852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165962393603506fb902f85_86902899', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_165962393603506fb902f85_86902899 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_165962393603506fb902f85_86902899',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="block-category card card-block ">
      
         <div class="category-cover">
          <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');?>
">
        </div>
		<h1 class="h1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
	<?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
		<div id="category-description" class="text-muted"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
      <?php }?>
    </div>
<?php
}
}
/* {/block 'product_list_header'} */
}
