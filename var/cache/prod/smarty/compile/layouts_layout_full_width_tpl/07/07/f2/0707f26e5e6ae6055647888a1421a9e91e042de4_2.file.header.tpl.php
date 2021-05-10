<?php
/* Smarty version 3.1.33, created on 2021-04-15 07:39:20
  from '/var/www/html/themes/woodlayout1/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6077d188183d18_52134599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0707f26e5e6ae6055647888a1421a9e91e042de4' => 
    array (
      0 => '/var/www/html/themes/woodlayout1/templates/_partials/header.tpl',
      1 => 1608503495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6077d188183d18_52134599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12483701066077d18817f3e0_92398499', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8031729166077d188180668_24311522', 'header_top');
?>

<?php }
/* {block 'header_nav'} */
class Block_12483701066077d18817f3e0_92398499 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_12483701066077d18817f3e0_92398499',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<nav class="header-nav">
	<div class="container">
      <div class="nav-inner">  
		<div class="hidden-md-down">
			<div class="left-nav">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

			</div>
			
			<div class="right-nav">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

			</div>
		</div>
		
		<div class="hidden-lg-up text-xs-center mobile">
			<div class="float-xs-left" id="menu-icon">
				<i class="material-icons menu-open">&#xE5D2;</i>
				<i class="material-icons menu-close">&#xE5CD;</i>			  
			</div>
			<div class="float-xs-right" id="_mobile_cart"></div>
			<div class="float-xs-right" id="_mobile_user_info"></div>
			<div class="top-logo" id="_mobile_logo"></div>
			<div class="clearfix"></div>
		</div>
      </div>
	</div>
</nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_8031729166077d188180668_24311522 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_8031729166077d188180668_24311522',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="header-top">
		<div class="container">		
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTopSearch'),$_smarty_tpl ) );?>

			<div class="header_logo hidden-md-down" id="_desktop_logo">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
				<img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
				</a>
			</div>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

		
			<div id="mobile_top_menu_wrapper" class="row hidden-lg-up" style="display:none;">
				<div class="js-top-menu mobile" id="_mobile_top_menu"></div>
					<div class="js-top-menu-bottom">
						<div id="_mobile_currency_selector"></div>
						<div id="_mobile_language_selector"></div>
						<div id="_mobile_contact_link"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="nav-bar hidden-md-down">
		<div class="container">
			<div class="nav-bar-inner">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

				<?php if (Module::isInstalled('pm_advancedtopmenu') == null) {?>   
					<span class="topmenu-msg"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please Install pm_advancedtopmenu Module For Menu','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
				<?php }?>
			</div>
		</div>
	</div>
<?php
}
}
/* {/block 'header_top'} */
}
