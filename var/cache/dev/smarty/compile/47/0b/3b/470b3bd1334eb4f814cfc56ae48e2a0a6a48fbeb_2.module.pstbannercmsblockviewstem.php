<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:18:14
  from 'module:pstbannercmsblockviewstem' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60035816bd8733_88402513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '470b3bd1334eb4f814cfc56ae48e2a0a6a48fbeb' => 
    array (
      0 => 'module:pstbannercmsblockviewstem',
      1 => 1608503493,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60035816bd8733_88402513 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/modules/pst_bannercmsblock/views/templates/hook/pst_bannercmsblock.tpl --><div id="cms_bannerblock" class="cmsbannerblock"> 
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
				   		<span class="cmsbanner-text1">20% off</span>
						<span class="cmsbanner-text2">New Furniture</span>
					    <a href="#" class="cmsbanner-btn">shop now</a>
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
				 	   <span class="cmsbanner-label">sale</span>
				   	   <span class="cmsbanner-text1">Wooden chair</span>
					   <span class="cmsbanner-text2">50% off</span>	
					   <a href="#" class="cmsbanner-btn">shop now</a>
					 </span>
				   </div> 
               </div>
            </div>
         </li>
      </ul>
	<?php }?>
</div>
</div>
</div><!-- end /var/www/html/modules/pst_bannercmsblock/views/templates/hook/pst_bannercmsblock.tpl --><?php }
}
