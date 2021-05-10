<?php
/* Smarty version 3.1.33, created on 2021-02-23 14:09:14
  from 'module:pstserviceblockviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6034fe7a4abdb4_18326658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50be08a4c3c918191be4ab58597bcd10aeae89db' => 
    array (
      0 => 'module:pstserviceblockviewstempl',
      1 => 1611325068,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6034fe7a4abdb4_18326658 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="pst_serviceblock" class="pst_serviceblock-block">
<div class="container">
<?php if ($_smarty_tpl->tpl_vars['pstserviceblockinfos']->value['text'] != '') {?>	
		<?php echo $_smarty_tpl->tpl_vars['pstserviceblockinfos']->value['text'];?>
	
<?php } else { ?>							
			<ul class="pst-service-wrapper">
				<li class="pst-service-item first col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12">
					<div class="pst-image-block"><span class="pst-image-icon">&nbsp;</span></div>
					<div class="service-right">
						<span class="pst-service-title">Free Shipping</span>
						<span class="pst-service-desc">Above On $100</span>
					</div>
				</li>
				<li class="pst-service-item second col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12">
					<div class="pst-image-block"><span class="pst-image-icon">&nbsp;</span></div>
					<div class="service-right">
						<span class="pst-service-title">24/7 online support</span>
						<span class="pst-service-desc">Hours: 8am-11pm</span>
					</div>
				</li>
				<li class="pst-service-item third col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12">
					<div class="pst-image-block"><span class="pst-image-icon">&nbsp;</span></div>
					<div class="service-right">
						<span class="pst-service-title">win $100 to shop</span>
						<span class="pst-service-desc">Get membership</span>
					</div>
				</li>
				<li class="pst-service-item forth col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12">
					<div class="pst-image-block"><span class="pst-image-icon">&nbsp;</span></div>
					<div class="service-right">
						<span class="pst-service-title">Return in 30 days</span>
						<span class="pst-service-desc">call +911234567890</span>
					</div>
				</li>
			</ul>				
<?php }?>
</div>
</div><?php }
}
