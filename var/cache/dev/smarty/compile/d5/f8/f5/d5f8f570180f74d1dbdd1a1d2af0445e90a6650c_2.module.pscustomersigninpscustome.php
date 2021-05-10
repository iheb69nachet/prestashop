<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:18:56
  from 'module:pscustomersigninpscustome' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600358408565f6_42879731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:pscustomersigninpscustome',
      1 => 1608503495,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_600358408565f6_42879731 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/themes/woodlayout1/modules/ps_customersignin/ps_customersignin.tpl --><div id="_desktop_user_info">
  <div class="pst_userinfotitle">
  	  <i class="fa fa-user-o hidden-lg-up hidden-md-down"></i>
	  <span class="user-info-icon"></span>
	  <span class="user-info-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My Account','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span><i class="material-icons expand-more hidden-lg-up hidden-md-down">&#xE5CF;</i>
  </div>
  <div class="user-info">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
	  <a
        class="account"
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
        rel="nofollow"
      >
        <i class="material-icons logged">&#xE7FF;</i>
        <span class="user-name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
      </a>
      <a
        class="logout"
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logout_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        rel="nofollow"
      >
        <i class="material-icons">&#xE898;</i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

      </a>      
    <?php } else { ?>
      <a
        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['my_account_url']->value, ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
        rel="nofollow"
      >
        <i class="material-icons">&#xE899;</i>
        <span class="sign-in"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
      </a>
    <?php }?>
	
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLanguage'),$_smarty_tpl ) );?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCurrency'),$_smarty_tpl ) );?>

	
  </div>
</div><!-- end /var/www/html/themes/woodlayout1/modules/ps_customersignin/ps_customersignin.tpl --><?php }
}
