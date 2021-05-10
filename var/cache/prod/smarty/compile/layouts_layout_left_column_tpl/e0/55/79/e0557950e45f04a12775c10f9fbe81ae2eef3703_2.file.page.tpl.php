<?php
/* Smarty version 3.1.33, created on 2021-02-23 12:43:50
  from '/var/www/html/themes/woodlayout1/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6034ea76e60873_67231271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0557950e45f04a12775c10f9fbe81ae2eef3703' => 
    array (
      0 => '/var/www/html/themes/woodlayout1/templates/page.tpl',
      1 => 1608503495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6034ea76e60873_67231271 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12921416746034ea76e5b4c8_52319544', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_13864910176034ea76e5c308_07388405 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_15083656186034ea76e5bb58_97915804 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13864910176034ea76e5c308_07388405', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_7576325446034ea76e5e2d9_57498786 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_8274301596034ea76e5eb04_21397088 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4570794536034ea76e5de62_72797884 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7576325446034ea76e5e2d9_57498786', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8274301596034ea76e5eb04_21397088', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_16652274206034ea76e5fbc8_46807970 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_15053260646034ea76e5f6c5_52436802 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16652274206034ea76e5fbc8_46807970', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_12921416746034ea76e5b4c8_52319544 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12921416746034ea76e5b4c8_52319544',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_15083656186034ea76e5bb58_97915804',
  ),
  'page_title' => 
  array (
    0 => 'Block_13864910176034ea76e5c308_07388405',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_4570794536034ea76e5de62_72797884',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_7576325446034ea76e5e2d9_57498786',
  ),
  'page_content' => 
  array (
    0 => 'Block_8274301596034ea76e5eb04_21397088',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_15053260646034ea76e5f6c5_52436802',
  ),
  'page_footer' => 
  array (
    0 => 'Block_16652274206034ea76e5fbc8_46807970',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15083656186034ea76e5bb58_97915804', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4570794536034ea76e5de62_72797884', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15053260646034ea76e5f6c5_52436802', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
