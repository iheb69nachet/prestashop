<?php
/* Smarty version 3.1.33, created on 2021-04-15 07:39:20
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6077d188302439_25109230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1608503495,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6077d188302439_25109230 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="block-contact links wrapper footer-blocks col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
  
   		<h3 class="block-contact-title hidden-md-down"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['stores'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a></h3>
      
		<div class="title clearfix hidden-lg-up" data-target="#block-contact_list" data-toggle="collapse">
		  <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
		  <span class="float-xs-right">
			  <span class="navbar-toggler collapse-icons">
				<i class="material-icons add">&#xE313;</i>
				<i class="material-icons remove">&#xE316;</i>
			  </span>
		  </span>
		</div>
	  
	<ul id="block-contact_list" class="collapse">
		<li>
			<!--<div class="con-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div>
			<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>-->
			<div class="data">
								<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address: [1]%address%[/1]','sprintf'=>array('[1]'=>'<span class="con-desc">','[/1]'=>'</span>','%address%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['address']['formatted']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

			</div>
		</li>
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
        <li>
		<!--<div class="con-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div>
        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>-->
        <div class="data">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone: [1]%phone%[/1]','sprintf'=>array('[1]'=>'<span class="con-desc">','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

        </div>
        </li>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['fax']) {?>
        <li>
		<!--<div class="con-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div>
        <div class="icon"><i class="fa fa-fax" aria-hidden="true"></i></div>-->
        <div class="data">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fax: [1]%fax%[/1]','sprintf'=>array('[1]'=>'<span class="con-desc">','[/1]'=>'</span>','%fax%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['fax']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

        </div>
        </li>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email']) {?>
        <li>
		<!--<div class="con-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mail:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</div>-->
        <!--<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>-->
        <div class="data">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Mail: [1]%email%[/1]','sprintf'=>array('[1]'=>'<span class="con-desc">','[/1]'=>'</span>','%email%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

        </div>
        </li>
      <?php }?>
  </ul>

  
</div><?php }
}
