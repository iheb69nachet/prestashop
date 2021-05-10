<?php
/* Smarty version 3.1.33, created on 2021-02-20 11:19:03
  from '/var/www/html/themes/woodlayout1/templates/_partials/form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6030e2171a9cf4_57057437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc6127e9bf38150acc28bdbfcf35b67fbfd63b56' => 
    array (
      0 => '/var/www/html/themes/woodlayout1/templates/_partials/form-errors.tpl',
      1 => 1608503495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6030e2171a9cf4_57057437 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5889592366030e2171a88c6_66927984', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_5889592366030e2171a88c6_66927984 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_5889592366030e2171a88c6_66927984',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
        <li><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8');?>
</li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
