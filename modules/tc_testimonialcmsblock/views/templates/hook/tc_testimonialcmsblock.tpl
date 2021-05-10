{**
* 2007-2018 PrestaShop
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
*  @copyright  2007-2018 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div id="tctestimonialcmsblock">
<div class="container">
<div class="row">
		{if $tctestimonialcmsblockinfos.text != ""}
			{$tctestimonialcmsblockinfos.text nofilter}
		{else}
			<ul id="testimonial-carousel" class="tm-carousel product_list">
			<li class="item">
			<div class="owl-item">
			<div class="item cms_face">
			<div class="testmonial-image"><img alt="testmonial" title="testmonial" src="{$image_url}/person1.png" width="100" height="100" /></div>
			<div class="product_inner_cms">
			<div class="name"><a href="#">- Mack Jeckno</a></div>
			<div class="designation"><a title="Iphone Developer" href="#">Financer</a></div>
			<div class="desc">
			<p>Excellent Company! I will definitely work with them again. Good communication, good work, on time! I am very happy with their help, and I look forward working with them on my next project.Thanks for the great work, I'm very happy with the result.</p>
			<div class="test-image"></div>
			</div>
			</div>
			</div>
			</div>
			</li>
			<li class="item">
			<div class="owl-item">
			<div class="item cms_face">
			<div class="testmonial-image"><img alt="testmonial" title="testmonial" src="{$image_url}/person2.png" width="106" height="106" /></div>
			<div class="product_inner_cms">
			<div class="name"><a href="#">- luies charls</a></div>
			<div class="designation"><a title="Iphone Developer" href="#">Iphone Developer</a></div>
			<div class="desc">
			<p>They are a first-rate and high level design agency that we will be working with closely in the years to come. We worked with Thementic Web Service on re-organizing our Hotel Chain from Dubai. Working remotely was smooth and reliable.</p>
			<div class="test-image"></div>
			</div>
			</div>
			</div>
			</div>
			</li>
			<li class="item">
			<div class="owl-item">
			<div class="item cms_face">
			<div class="testmonial-image"><img alt="testmonial" title="testmonial" src="{$image_url}/person3.png" width="106" height="106" /></div>
			<div class="product_inner_cms">
			<div class="name"><a href="#">- jecob goeckno</a></div>
			<div class="designation"><a title="Iphone Developer" href="#">Financer</a></div>
			<div class="desc">
			<p>Great Team to work with, really attentive and react to request immediately. Excellent work and I'm really pleased with the results.They provided so much more than I asked for! I am pleased with my website and the interaction with their representative.</p>
			<div class="test-image"></div>
			</div>
			</div>
			</div>
			</div>
			</li>
			</ul>
		{/if}
		
			
</div>
</div>
</div>
