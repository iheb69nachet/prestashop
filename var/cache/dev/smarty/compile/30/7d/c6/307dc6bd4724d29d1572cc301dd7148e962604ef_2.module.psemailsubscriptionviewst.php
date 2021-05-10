<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:18:56
  from 'module:psemailsubscriptionviewst' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60035840a82269_12318451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:psemailsubscriptionviewst',
      1 => 1608503495,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60035840a82269_12318451 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/themes/woodlayout1/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl -->
<div class="block_newsletter col-lg-12 col-md-12 col-sm-12">
  <div class="row">
  	
    <p class="col-lg-6 col-md-12 col-sm-12 col-xs-12 title">
		<span class="tc-newsletter-icon"></span>
		<!--<span class="text"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Join the Community to be Updated Firstly','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>-->
		<?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
			<span class="text"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</span>
		<?php }?>
	</p>
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 newsletter-wrap">
      <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
#footer" method="post">
        <div class="row">
          <div class="col-xs-12">
		  <div class="block_newsletter_inner">
            <input
              class="btn btn-primary float-xs-right hidden-xs-down"
              name="submitNewsletter"
              type="submit"
              value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            >
            <input
              class="btn btn-primary float-xs-right hidden-sm-up"
              name="submitNewsletter"
              type="submit"
              value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            >
            <div class="input-wrapper">
              <input
                name="email"
                type="text"
                value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
              >
            </div>
            <input type="hidden" name="action" value="0">
            <div class="clearfix"></div>
			</div>
          </div>
          <div class="col-xs-12">
              
              <?php if ($_smarty_tpl->tpl_vars['msg']->value) {?>
                <p class="alert <?php if ($_smarty_tpl->tpl_vars['nw_error']->value) {?>alert-danger<?php } else { ?>alert-success<?php }?>">
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['msg']->value, ENT_QUOTES, 'UTF-8');?>

                </p>
              <?php }?>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end /var/www/html/themes/woodlayout1/modules/ps_emailsubscription/views/templates/hook/ps_emailsubscription.tpl --><?php }
}
