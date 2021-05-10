<?php
/* Smarty version 3.1.33, created on 2021-02-23 14:09:14
  from 'module:pstbannercmsblockviewstem' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_6034fe7a4b17d8_54664629',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '470b3bd1334eb4f814cfc56ae48e2a0a6a48fbeb' => 
    array (
      0 => 'module:pstbannercmsblockviewstem',
      1 => 1611325068,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6034fe7a4b17d8_54664629 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="cms_bannerblock" class="cmsbannerblock"> 
<div class="container">
<div class="row">
	<?php if ($_smarty_tpl->tpl_vars['pstbannercmsblockinfos']->value['text'] != '') {?>
		<?php echo $_smarty_tpl->tpl_vars['pstbannercmsblockinfos']->value['text'];?>

	<?php } else { ?>				
		
		<ul class="cmsbanner-inner">
         <li class="cmsbanner-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="cmsbanner-item-inner">
			   <a href="#" class="cmsbanner-img"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/banner1.jpg" alt=""></a>
               <div class="cmsbanner-details"> 
				   <div class="cmsbanner-detail-inner">
                     <span class="cmsbanner-detail-wrapper">
				   		<span class="cmsbanner-text1">20% save</span>
						<span class="cmsbanner-text2">new & stylist sofa</br>30% off</span>
						<span class="cmsbanner-text3">limited time offer</span>
					 </span>
				   </div>
               </div>
            </div>
         </li>	
		 <li class="cmsbanner-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="cmsbanner-item-inner">
			   <a href="#" class="cmsbanner-img"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/banner2.jpg" alt=""></a> 
               <div class="cmsbanner-details"> 
				   <div class="cmsbanner-detail-inner">
                     <span class="cmsbanner-detail-wrapper">
				 	  	<span class="cmsbanner-text1">20% save</span>
						<span class="cmsbanner-text2">home decor lamp</br>50% off</span>
						<span class="cmsbanner-text3">limited time offer</span>
					 </span>
				   </div> 
               </div>
            </div>
         </li>
      </ul>
	<?php }?>
</div>
</div>
</div><?php }
}
