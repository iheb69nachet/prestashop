<?php
/* Smarty version 3.1.33, created on 2021-01-22 16:32:52
  from '/var/www/html/bo/themes/default/template/controllers/stats/calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_600af024e52338_77299154',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55ecc7cd852a41cef50315a3effbc7676df2b9e8' => 
    array (
      0 => '/var/www/html/bo/themes/default/template/controllers/stats/calendar.tpl',
      1 => 1608503491,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../../form_date_range_picker.tpl' => 1,
  ),
),false)) {
function content_600af024e52338_77299154 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="statsContainer" class="col-md-9">
	<?php $_smarty_tpl->_subTemplateRender("file:../../form_date_range_picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
