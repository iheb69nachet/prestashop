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

<div id="psttestimonialcmsblock" class="testimonial-block parallax" data-source-url="{$image_url}/testimonial-bg.jpg">
    <div class="container">
        <div class="testimonial-wrapper">
            <h2 class="h1 products-section-title">		
      {l s='Happy clients' mod='pst_testimonialcmsblock'}
   </h2> 
   {if $psttestimonialcmsblockinfos.text != ""} {$psttestimonialcmsblockinfos.text nofilter} {else}
            <ul id="testimonial-carousel" class="testimonial-carousel">

                <li class="item">
                    <div class="item cms_face">
                        <div class="testmonial-image col-lg-3 col-md-6 col-sm-12 col-xs-12"><img alt="testmonial" title="testmonial" src="{$image_url}/person1.jpg" width="100" height="100"></div>
                        <div class="product_inner_cms col-lg-9 col-md-6 col-sm-12 col-xs-12">
                            <div class="test-author">
                                <div class="name"><a href="#">Mack Jeckno</a></div>
                                <div class="designation"><a title="Iphone Developer" href="#">Financer</a></div>
                            </div>
                        </div>
                        <div class="desc col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>This spa always offers such a calm, inviting environment.The wonderful services you offer locally are great for our community.People are tired of having to travel out of town for things.Having Glow Skincare and Spa right here is an awesome luxury for so many.</p>
                            <div class="test-image"></div>
                        </div>
                    </div>
                </li>

                <li class="item">
                    <div class="item cms_face">
                        <div class="testmonial-image col-lg-3 col-md-6 col-sm-12 col-xs-12"><img alt="testmonial" title="testmonial" src="{$image_url}/person2.jpg" width="100" height="100"></div>
                        <div class="product_inner_cms col-lg-9 col-md-6 col-sm-12 col-xs-12">
                            <div class="test-author">
                                <div class="name"><a href="#">luies charls</a></div>
                                <div class="designation"><a title="Iphone Developer" href="#">Iphone Developer</a></div>
                            </div>
                        </div>
                        <div class="desc col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>Very professional.The massage therapist was very sweet.Will return for another appointment.Pedicure was done well - very friendly adn professional.Monica and Morgan were both great.</p>
                            <div class="test-image"></div>
                        </div>
                    </div>
                </li>

                <li class="item">
                    <div class="item cms_face">
                        <div class="testmonial-image col-lg-3 col-md-6 col-sm-12 col-xs-12"><img alt="testmonial" title="testmonial" src="{$image_url}/person3.jpg" width="100" height="100"></div>
                        <div class="product_inner_cms col-lg-9 col-md-6 col-sm-12 col-xs-12">
                            <div class="test-author">
                                <div class="name"><a href="#">jecob goeckno</a></div>
                                <div class="designation"><a title="Iphone Developer" href="#">Financer</a></div>
                            </div>
                        </div>
                        <div class="desc col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <p>My experience was awesome.It was so relaxing and after the facial was done I still felt relaxed.You just need to keep doing what you are doing.The facials are excellent.The work that you do is awesome.</p>
                            <div class="test-image"></div>
                        </div>
                    </div>
                </li>

            </ul>
            {/if}
        </div>
    </div>
</div>