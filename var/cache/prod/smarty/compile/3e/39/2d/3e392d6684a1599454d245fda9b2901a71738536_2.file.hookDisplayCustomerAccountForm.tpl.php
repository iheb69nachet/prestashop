<?php
/* Smarty version 3.1.33, created on 2021-02-19 14:30:49
  from '/var/www/html/modules/eicaptcha/views/templates/hook/hookDisplayCustomerAccountForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_602fbd89b39608_22804189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e392d6684a1599454d245fda9b2901a71738536' => 
    array (
      0 => '/var/www/html/modules/eicaptcha/views/templates/hook/hookDisplayCustomerAccountForm.tpl',
      1 => 1608503492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602fbd89b39608_22804189 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group row">
    <label class="col-md-3 form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Captcha','mod'=>'eicaptcha'),$_smarty_tpl ) );?>
</label>
         <div class="col-md-9">
        <div class="g-recaptcha" data-sitekey="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['publicKey']->value,'html' )), ENT_QUOTES, 'UTF-8');?>
" id="captcha-box" data-theme="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captchatheme']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
     </div>
    <?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?hl=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['captchaforcelang']->value, ENT_QUOTES, 'UTF-8');?>
" async defer><?php echo '</script'; ?>
>
</div>
<?php }
}
