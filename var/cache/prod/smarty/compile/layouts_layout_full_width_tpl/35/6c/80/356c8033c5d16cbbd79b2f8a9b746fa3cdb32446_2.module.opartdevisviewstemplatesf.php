<?php
/* Smarty version 3.1.33, created on 2021-02-22 01:41:04
  from 'module:opartdevisviewstemplatesf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6032fda0cd02d5_82674551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '356c8033c5d16cbbd79b2f8a9b746fa3cdb32446' => 
    array (
      0 => 'module:opartdevisviewstemplatesf',
      1 => 1608503493,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_6032fda0cd02d5_82674551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1942237646032fda0ca5446_49476560', "page_content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block "page_content"} */
class Block_1942237646032fda0ca5446_49476560 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_1942237646032fda0ca5446_49476560',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quotation request','mod'=>'opartdevis'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

    <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quotation Request','mod'=>'opartdevis'),$_smarty_tpl ) );?>
</h1>

    <?php if (isset($_smarty_tpl->tpl_vars['errors']->value)) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value), 0, false);
?>
    <?php }?>

    <?php if (isset($_smarty_tpl->tpl_vars['confirmation']->value)) {?>
        <p class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your request has been successfully sent to our team.','mod'=>'opartdevis'),$_smarty_tpl ) );?>
</p>
    <?php }?>

    <form action="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('opartdevis','SimpleQuotation'),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post" class="form-horizontal" enctype="multipart/form-data" id="opartDevisForm">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Simple form request','mod'=>'opartdevis'),$_smarty_tpl ) );?>

            </div>
            <div class="panel-body">
                <?php if ($_smarty_tpl->tpl_vars['customer_id']->value == 0) {?>
                    <!-- Customer -->
                    <div class="form-group">
                        <div class="col-lg-3">
                            <label for="customer_firstname" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Firstname','mod'=>'opartdevis'),$_smarty_tpl ) );?>
*</label>
                            <input class="form-control" type="text" name="customer_firstname" value="<?php if (isset($_POST['customer_firstname'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_POST['customer_firstname'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" id="customer_firstname" />
                        </div>
                        <div class="col-lg-3">
                            <label for="customer_lastname" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Lastname','mod'=>'opartdevis'),$_smarty_tpl ) );?>
*</label>
                            <input class="form-control" type="text" name="customer_lastname" value="<?php if (isset($_POST['customer_lastname'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_POST['customer_lastname'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" id="customer_lastname" />
                        </div>
                        <div class="col-lg-3">
                            <label for="customer_email" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','mod'=>'opartdevis'),$_smarty_tpl ) );?>
*</label>
                            <input class="form-control" type="text" name="customer_email" value="<?php if (isset($_POST['customer_email'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_POST['customer_email'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" id="customer_email" />
                        </div>
                        <div class="col-lg-3">
                            <label for="customer_phone" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone','mod'=>'opartdevis'),$_smarty_tpl ) );?>
</label>
                            <input class="form-control" type="text" name="customer_phone" value="<?php if (isset($_POST['customer_phone'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_POST['customer_phone'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" id="customer_phone" />
                        </div>
                    </div>
                    <!-- /Customer -->
                <?php }?>

                <!-- addresses -->
                <?php if (count($_smarty_tpl->tpl_vars['addresses']->value) > 0) {?>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="delivery_address" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery addresse','mod'=>'opartdevis'),$_smarty_tpl ) );?>
</label>
                            <select name="delivery_address" id="delivery_address" class="form-control">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'address');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
?>
                                <option value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value['id_address'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value['firstname'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value['lastname'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value['address1'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['address']->value['address2'] != '') {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value['address2'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?> - <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value['postcode'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value['city'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="invoice_address" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice addresse','mod'=>'opartdevis'),$_smarty_tpl ) );?>
</label>
                            <select name="invoice_address" id="invoice_address" class="form-control">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['addresses']->value, 'address');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
?>
                                <option value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value['id_address'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value['firstname'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value['lastname'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 - <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value['address1'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['address']->value['address2'] != '') {?> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value['address2'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?> - <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value['postcode'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['address']->value['city'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</option>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <label for="delivery_address_text" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delivery addresse','mod'=>'opartdevis'),$_smarty_tpl ) );?>
</label>
                            <textarea class="form-control" id="delivery_address_text" name="delivery_address_text"><?php if (isset($_POST['delivery_address_text'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_POST['delivery_address_text'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></textarea>
                        </div>
                        <div class="col-lg-6">
                            <label for="invoice_address_text" class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invoice addresse','mod'=>'opartdevis'),$_smarty_tpl ) );?>
</label>
                            <textarea class="form-control" id="invoice_address_text" name="invoice_address_text"><?php if (isset($_POST['invoice_address_text'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_POST['invoice_address_text'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></textarea>
                        </div>
                    </div>                        
                <?php }?>
                <!-- /addresses -->

                <!-- Quotation description -->
                <div class="form-group clear_fix">
                    <div class="col-lg-12">
                        <label for="quotation_message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please, describe your request','mod'=>'opartdevis'),$_smarty_tpl ) );?>
*</label>
                        <textarea class="form-control" row="3" id="quotation_message" name="quotation_message"><?php if (isset($_POST['quotation_message'])) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_POST['quotation_message'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></textarea>
                        <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Fields with a * are required','mod'=>'opartdevis'),$_smarty_tpl ) );?>
</p>
                    </div>
                </div>
                <!-- /Quotation description -->
            </div>
        </div>

        <p class="cart_navigation clearfix">
            <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-default button button-small">
                <span><i class="icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to Your Account','mod'=>'opartdevis'),$_smarty_tpl ) );?>
</span>
            </a>
            <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['base_dir']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="btn btn-default button button-small">
                <span><i class="icon-chevron-left"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home','mod'=>'opartdevis'),$_smarty_tpl ) );?>
</span>
            </a>
            <button type="submit" name="submitOpartMessage" id="submitOpartMessage" class="button btn btn-default button-medium"><span><i class="icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Send your request','mod'=>'opartdevis'),$_smarty_tpl ) );?>
</span></button>
        </p>
    </form>
<?php
}
}
/* {/block "page_content"} */
}
