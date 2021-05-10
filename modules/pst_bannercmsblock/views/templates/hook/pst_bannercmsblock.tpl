{*
* 2007-2020 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2020 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div id="cms_bannerblock" class="cmsbannerblock"> 
<div class="container">
<div class="row">
	{if $pstbannercmsblockinfos.text != ""}
		{$pstbannercmsblockinfos.text nofilter}
	{else}				
		
		<ul class="cmsbanner-inner">
         <li class="cmsbanner-item col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="cmsbanner-item-inner">
			   <a href="#" class="cmsbanner-img"><img src="{$image_url}/banner1.jpg" alt=""></a>
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
			   <a href="#" class="cmsbanner-img"><img src="{$image_url}/banner2.jpg" alt=""></a> 
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
	{/if}
</div>
</div>
</div>