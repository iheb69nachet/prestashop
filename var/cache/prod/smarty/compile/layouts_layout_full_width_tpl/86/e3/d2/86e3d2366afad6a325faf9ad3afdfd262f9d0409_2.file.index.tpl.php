<?php
/* Smarty version 3.1.33, created on 2021-02-23 14:09:14
  from '/var/www/html/themes/woodlayout1/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6034fe7a34d397_31411169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86e3d2366afad6a325faf9ad3afdfd262f9d0409' => 
    array (
      0 => '/var/www/html/themes/woodlayout1/templates/index.tpl',
      1 => 1608503495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6034fe7a34d397_31411169 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4805331216034fe7a34ad65_79602432', 'page_content_container');
?>

	
	
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_18541786766034fe7a34b4e5_62415305 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_13242324306034fe7a34c113_01841946 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4805331216034fe7a34ad65_79602432 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_4805331216034fe7a34ad65_79602432',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_18541786766034fe7a34b4e5_62415305',
  ),
  'page_content' => 
  array (
    0 => 'Block_13242324306034fe7a34c113_01841946',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18541786766034fe7a34b4e5_62415305', 'page_content_top', $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopColumn'),$_smarty_tpl ) );?>

		
		
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13242324306034fe7a34c113_01841946', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
