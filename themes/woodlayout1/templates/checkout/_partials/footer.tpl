{**
 * 2007-2019 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2019 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
 
<div class="footer-wrapper">
	<div class="footer-before">
		<div class="container">
			<div class="row">
				{hook h='displayFooterBefore'}
			</div>
		</div>
	</div>
	
	<div class="footer-container">
		<div class="footer-middle">
			<div class="container">
				<div class="footer-middle-container row">
				{hook h='displayFooter'}
				<div class="footer-right col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
					{hook h='displayFooterRight'}
				</div>
				</div>
			</div>
		</div>
	
		<div class="footer-bottom">	
			<div class="container">
				<div class="footer-after">
					<div class="copyright">
						{block name='copyright_link'}
						 <a class="_blank" href="http://www.prestashop.com" >
						  {l s='%copyright% %year% - Ecommerce software by %prestashop%' sprintf=['%prestashop%' => 'PrestaShop™', '%year%' => 'Y'|date, '%copyright%' => '©'] d='Shop.Theme.Global'}
						 </a>
						{/block}
					</div>	
					{block name='hook_footer_after'}
						{hook h='displayFooterAfter'}
					{/block}
				</div>
		   </div>
		</div>
	</div>
</div>
<a class="top_button" href="#" style="">&nbsp;</a>