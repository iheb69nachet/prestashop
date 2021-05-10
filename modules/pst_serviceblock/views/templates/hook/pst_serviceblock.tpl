{**
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


<div id="pst_serviceblock" class="pst_serviceblock-block">
<div class="container">
{if $pstserviceblockinfos.text != ""}	
		{$pstserviceblockinfos.text nofilter}	
{else}							
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
{/if}
</div>
</div>