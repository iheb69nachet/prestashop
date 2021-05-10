<?php
/* Smarty version 3.1.33, created on 2021-04-15 07:39:20
  from 'module:pstpaymentcmsblockviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6077d1883897e9_05079007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41d38cca7fda54dfbf94c5f1c809b4fd906ec51b' => 
    array (
      0 => 'module:pstpaymentcmsblockviewste',
      1 => 1611325068,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6077d1883897e9_05079007 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="pstpaymentcmsblock">
   <div class="payment-block links wrapper footer-blocks">
   <h3 class="block-payment-title hidden-md-down"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['stores'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Method','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a></h3>
      
		<div class="title clearfix hidden-lg-up" data-target="#block-payment_list" data-toggle="collapse">
		  <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payment Method','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
		  <span class="float-xs-right">
			  <span class="navbar-toggler collapse-icons">
				<i class="material-icons add">&#xE313;</i>
				<i class="material-icons remove">&#xE316;</i>
			  </span>
		  </span>
		</div>
		<div id="block-payment_list" class="collapse">
      <?php if ($_smarty_tpl->tpl_vars['pstpaymentcmsblockinfos']->value['text'] != '') {?>
      <?php echo $_smarty_tpl->tpl_vars['pstpaymentcmsblockinfos']->value['text'];?>

      <?php } else { ?>		
      <ul class="payment-block-inner">
		<li class="master icon"><a href="#"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/maestro.png" alt=""></a></li>
		<li class="paypal icon"><a href="#"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/paypal.png" alt=""></a></li>
		<li class="visa icon"><a href="#"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/visa.png" alt=""></a></li>
		<li class="paypal icon"><a href="#"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/cirrus.png" alt=""></a></li>
		<li class="ebay icon"><a href="#"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/ebay.png" alt=""></a></li>
	  </ul>
      <?php }?>
	  </div>
   </div>
</div><?php }
}
