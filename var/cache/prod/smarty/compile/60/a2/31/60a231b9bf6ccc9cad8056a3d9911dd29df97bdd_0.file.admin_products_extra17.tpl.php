<?php
/* Smarty version 3.1.33, created on 2021-02-15 11:12:16
  from '/var/www/html/modules/psproductcountdown/views/templates/hook/admin_products_extra17.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_602a49007717a2_54154477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60a231b9bf6ccc9cad8056a3d9911dd29df97bdd' => 
    array (
      0 => '/var/www/html/modules/psproductcountdown/views/templates/hook/admin_products_extra17.tpl',
      1 => 1608503493,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602a49007717a2_54154477 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="module_psproductcountdown" class="">
    <input type="hidden" name="submitted_tabs[]" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_name']->value,'html','UTF-8' ));?>
" />
    <input type="hidden" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_name']->value,'html','UTF-8' ));?>
-submit" value="1" />

    <div class="row">
        <div class="col-lg-12 col-xl-4">
            <fieldset class="form-group">
                <label class="form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enabled:','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
</label>
                <div id="pspc_active">
                    <div class="radio">
                        <label class="">
                            <input type="radio" id="pspc_active_1" name="pspc_active" value="1" <?php if (isset($_smarty_tpl->tpl_vars['countdown_data']->value['active']) && $_smarty_tpl->tpl_vars['countdown_data']->value['active']) {?>checked<?php }?>>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>

                        </label>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <label class="">
                            <input type="radio" id="pspc_active_0" name="pspc_active" value="0" <?php if (!isset($_smarty_tpl->tpl_vars['countdown_data']->value['active']) || (isset($_smarty_tpl->tpl_vars['countdown_data']->value['active']) && !$_smarty_tpl->tpl_vars['countdown_data']->value['active'])) {?>checked<?php }?>>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>

                        </label>
                    </div>
                </div>
            </fieldset>
        </div>
        <div class="col-lg-12 col-xl-4">
            <fieldset class="form-group">
                <label class="form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name:','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
</label>
                <div class="translations tabbable" id="pspc_name_wrp">
                    <div class="translationsFields tab-content ">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language', false, NULL, 'pspc_lang_foreach', array (
  'first' => true,
  'index' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_pspc_lang_foreach']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_pspc_lang_foreach']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_pspc_lang_foreach']->value['index'];
?>
                            <div class="translationsFields-pspc_name tab-pane translation-label-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['iso_code'],'html','UTF-8' ));?>
 <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_pspc_lang_foreach']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_pspc_lang_foreach']->value['first'] : null)) {?>active<?php }?>">
                                <input type="text"
                                       id="pspc_name_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
"
                                       name="pspc_name_<?php echo intval($_smarty_tpl->tpl_vars['language']->value['id_lang']);?>
"
                                       class="form-control"
                                       value="<?php if (isset($_smarty_tpl->tpl_vars['countdown_data']->value['name'][$_smarty_tpl->tpl_vars['language']->value['id_lang']])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['countdown_data']->value['name'][$_smarty_tpl->tpl_vars['language']->value['id_lang']],'html','UTF-8' ));
}?>"
                                />
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-xl-4">
            <fieldset class="form-group">
                <label class="form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Display:','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
</label>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="input-group">
                            <span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'from','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
</span>
                            <input type="text" name="pspc_from" class="pspc-datepicker form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['countdown_data']->value['from'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['countdown_data']->value['from'],'html','UTF-8' ));
}?>" style="text-align: center;" id="pspc_from">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="input-group">
                            <span class="input-group-addon"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'to','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
</span>
                            <input type="text" name="pspc_to" class="pspc-datepicker form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['countdown_data']->value['to'])) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['countdown_data']->value['to'],'html','UTF-8' ));
}?>" style="text-align: center;" id="pspc_to">
                        </div>
                    </div>
                </div>
                <?php echo '<script'; ?>
 type="text/javascript">
                    $(function () {
                        $(".pspc-datepicker").datetimepicker({
                            sideBySide: true,
                            format: 'YYYY-MM-DD HH:mm:ss',
                            useCurrent: false
                        });
                    });
                <?php echo '</script'; ?>
>
            </fieldset>
        </div>
        <div class="col-lg-12 col-xl-4">
            <fieldset class="form-group">
                <label class="form-control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Use dates from specific prices:','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
</label>
                <div id="pspc_specific_price_wrp">
                    <select name="pspc_specific_price" id="pspc_specific_price" class="form-control">
                        <option value="">--</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['specific_prices']->value, 'specific_price');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['specific_price']->value) {
?>
                            <option value="<?php echo intval($_smarty_tpl->tpl_vars['specific_price']->value['id_specific_price']);?>
"
                                    data-from="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_price']->value['from'],'html','UTF-8' ));?>
"
                                    data-to="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_price']->value['to'],'html','UTF-8' ));?>
">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'from','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_price']->value['from'],'html','UTF-8' ));?>
&nbsp;&nbsp;&nbsp;
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'to','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
: <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['specific_price']->value['to'],'html','UTF-8' ));?>

                            </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </fieldset>
        </div>
    </div>

    <?php if (isset($_smarty_tpl->tpl_vars['countdown_data']->value['id_countdown'])) {?>
        <div class="form-group">
            <div class="row">
                <div class="col-lg-12 col-xl-4">
                    <fieldset class="form-group">
                        <div>
                            <button type="button" id="pspc-reset-countdown" class="btn btn-default" data-id-countdown="<?php echo intval($_smarty_tpl->tpl_vars['countdown_data']->value['id_countdown']);?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reset & remove','mod'=>'psproductcountdown'),$_smarty_tpl ) );?>
</button>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    <?php }?>

    <?php echo '<script'; ?>
 type="text/javascript">
        var pspc_ajax_url = "<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ajax_url']->value,'quotes','UTF-8' ));?>
";
    <?php echo '</script'; ?>
>
</div>
<?php }
}
