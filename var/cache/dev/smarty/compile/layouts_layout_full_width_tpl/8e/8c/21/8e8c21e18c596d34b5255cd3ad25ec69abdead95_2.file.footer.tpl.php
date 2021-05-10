<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:18:56
  from '/var/www/html/themes/woodlayout1/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60035840a7a337_94269612',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e8c21e18c596d34b5255cd3ad25ec69abdead95' => 
    array (
      0 => '/var/www/html/themes/woodlayout1/templates/_partials/footer.tpl',
      1 => 1608503495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60035840a7a337_94269612 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
 
<div class="footer-wrapper">
	<div class="footer-before">
		<div class="container">
			<div class="row">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

			</div>
		</div>
	</div>
	
	<div class="footer-container">
		<div class="footer-middle">
			<div class="container">
				<div class="footer-middle-container row">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

				<div class="footer-right col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterRight'),$_smarty_tpl ) );?>

				</div>
				</div>
			</div>
		</div>
	
		<div class="footer-bottom">	
			<div class="container">
				<div class="footer-after">
					<div class="copyright">
						<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191083379660035840a77668_83469984', 'copyright_link');
?>

					</div>	
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146289487560035840a79786_52283656', 'hook_footer_after');
?>

				</div>
		   </div>
		</div>
	</div>
</div>
<a class="top_button" href="#" style="">&nbsp;</a><?php }
/* {block 'copyright_link'} */
class Block_191083379660035840a77668_83469984 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'copyright_link' => 
  array (
    0 => 'Block_191083379660035840a77668_83469984',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						 <a class="_blank" href="http://www.prestashop.com" >
						  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%copyright% %year% - Ecommerce software by %prestashop%','sprintf'=>array('%prestashop%'=>'PrestaShop™','%year%'=>date('Y'),'%copyright%'=>'©'),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

						 </a>
						<?php
}
}
/* {/block 'copyright_link'} */
/* {block 'hook_footer_after'} */
class Block_146289487560035840a79786_52283656 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_146289487560035840a79786_52283656',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'hook_footer_after'} */
}
