<?php
/* Smarty version 3.1.33, created on 2021-01-16 22:18:13
  from 'module:psttestimonialcmsblockvie' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_60035815dd44a7_80301939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b70159303f4754f6fccc4c053267682946d2ab7' => 
    array (
      0 => 'module:psttestimonialcmsblockvie',
      1 => 1608503493,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60035815dd44a7_80301939 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /var/www/html/modules/pst_testimonialcmsblock/views/templates/hook/pst_testimonialcmsblock.tpl --><div id="psttestimonialcmsblock" class="testimonial-block parallax" data-source-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/testimonial-bg.jpg">
    <div class="container">
        <div class="testimonial-wrapper">
            <h2 class="h1 products-section-title">		
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Happy clients','mod'=>'pst_testimonialcmsblock'),$_smarty_tpl ) );?>

   </h2> 
   <?php if ($_smarty_tpl->tpl_vars['psttestimonialcmsblockinfos']->value['text'] != '') {?> <?php echo $_smarty_tpl->tpl_vars['psttestimonialcmsblockinfos']->value['text'];?>
 <?php } else { ?>
            <ul id="testimonial-carousel" class="testimonial-carousel">

                <li class="item">
                    <div class="item cms_face">
                        <div class="testmonial-image col-lg-3 col-md-6 col-sm-12 col-xs-12"><img alt="testmonial" title="testmonial" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/person1.jpg" width="110" height="110"></div>
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
                        <div class="testmonial-image col-lg-3 col-md-6 col-sm-12 col-xs-12"><img alt="testmonial" title="testmonial" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/person2.jpg" width="110" height="110"></div>
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
                        <div class="testmonial-image col-lg-3 col-md-6 col-sm-12 col-xs-12"><img alt="testmonial" title="testmonial" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image_url']->value, ENT_QUOTES, 'UTF-8');?>
/person3.jpg" width="110" height="110"></div>
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
            <?php }?>
        </div>
    </div>
</div><!-- end /var/www/html/modules/pst_testimonialcmsblock/views/templates/hook/pst_testimonialcmsblock.tpl --><?php }
}
