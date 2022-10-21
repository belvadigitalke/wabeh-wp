<?php
/**
 *
 * Template Name: Home
 *
 * The template for displaying content from pagebuilder.
 *
 * This is the template that displays pages without title in fullwidth layout. Suitable for use with Pagebuilder.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Wabeh
 */
get_header(); 
get_template_part('template-parts/offset'); 
get_template_part('template-parts/header');
?>
<section class="application-process padding-top-bottom wrapper">
    <h4>Why wait? Quickly get the phone you want and enjoy peace  of mind with Wabeh’s flexible, easy payments</h4>
    <div class="tbl general padding-top-bottom">
        <div class="col left">
            <div class="icn">
                <img src="<?php echo the_field('process-imagel'); ?>" width="" height="">
            </div>
            <div class="ttle"><?php echo the_field('process_titlel'); ?></div>
            <span class="desc"><?php echo the_field('process_descriptionl'); ?></span>
        </div>
        <div class="col middle">
            <div class="icn">
                <img src="<?php echo the_field('process-imagem'); ?>" width="" height="">
            </div>
            <div class="ttle"><?php echo the_field('process_titlem'); ?></div>
            <span class="desc"><?php echo the_field('process_descriptionm'); ?></span>
        </div>
        <div class="col right">
            <div class="icn">
                <img src="<?php echo the_field('process-imager'); ?>" width="" height="">
            </div>
            <div class="ttle"><?php echo the_field('process_titler'); ?></div>
            <span class="desc"><?php echo the_field('process_descriptionr'); ?></span>
        </div>

    </div>
</section>


 <!-- Phone-types -->
 <section class="phones padding-top-bottom">
        <div class="slider-bg"></div>
        <div class="wrapper">
                <div class="col left">
                    <h1>Connect.</h1>
                    <h1>Work.</h1>
                    <h1>Play.</h1>
                    <p class="p-medium-blac">A phone for everyone in the family, and for every need. Choose from a wide variety
                        of phones at a price point that works for you, including Tecno, Infinix, and Itel models. </p>
                </div>
                <div class="col right">
                    <div class="interest">
                        <h3 class="medium">Choose your phone of interest</h3>
                    </div>
                     <div class="slider owl-carousel">
                        <div>
                            <div class="block">
                                <img src="images/phones/phone-2.png" alt="" class="slder" />
                            </div>
                            <div class="p-cptn">
                                <div class="p-name">Infinix Hot 10</div>
                                <a href="#" class="primary-btn">Buy Now</a>
                            </div>
                        </div>
                        <div>
                            <div class="block">
                                <img src="images/phones/phone-1.png" alt="" class="slder" />
                            </div>
                            <div class="p-cptn">
                                <div class="p-name">Infinix Hot 10</div>
                                <a href="#" class="primary-btn">Buy Now</a>
                            </div>
                        </div>
                        <div>
                            <div class="block">
                                <img src="images/phones/phone-2.png" alt="" class="slder" />
                            </div>
                            <div class="p-cptn">
                                <div class="p-name">Infinix Hot 10</div>
                                <a href="#" class="primary-btn">Buy Now</a>
                            </div>
                        </div>
                        <div>
                            <div class="block">
                                <img src="images/phones/phone-2.png" alt="" class="slder" />
                            </div>
                            <div class="p-cptn">
                                <div class="p-name">Infinix Hot 10</div>
                                <a href="#" class="primary-btn">Buy Now</a>
                            </div>
                        </div>
                        <div>
                            <div class="block">
                                <img src="images/phones/phone-2.png" alt="" class="slder" />
                            </div>
                            <div class="p-cptn">
                                <div class="p-name">Infinix Hot 10</div>
                                <a href="#" class="primary-btn">Buy Now</a>
                            </div>
                        </div>
                        <div>
                            <div class="block">
                                <img src="images/phones/phone-2.png" alt="" class="slder" />
                            </div>
                            <div class="p-cptn">
                                <div class="p-name">Infinix Hot 10</div>
                                <a href="#" class="primary-btn">Buy Now</a>
                            </div>
                        </div>


                    </div>
            </div>

        </div>
    </section>
    <!-- End-of-phone-types -->
    <!-- Testimony -->
    <section class="testimony ">
        <div class="slider-bg"></div>
        <div class="wrapper">
            <ul class="profiles hme owl-carousel">
                <li>
                    <div class="col left">
                        <h3 class="medium">Testimonials</h3>
                            <span class="profile-pic">
                            <img src="images/Testimonies/susan.png" width="504" height="455" alt="susan">
                        </span>
                    </div>
                    <div class="col right">
                        <div class="testimony-content">
                            <h1 class="primary-heading">
                                Don’t just take our word for it,
                                <span> here’s what our users have to say.</span>
                            </h1>
                            <div class="name">
                                <h3 class="medium">Susan Mathai</h3>
                                <div class="designation">CEO, Dubai Collections</div>
                                <p>With Wabeh we are able to target all our customers. Right now we are making more and more
                                    sales than we were doing before because the deposit is affordable and customers have time to pay for it.</p>
                            </div>
                        </div>
                    </div>

                </li>
                <li>
                    <div class="col left">
                        <h3 class="medium">Testimonials</h3>
                        <span class="profile-pic">
                            <img src="images/Testimonies/susan.png" width="504" height="455" alt="susan">
                        </span>
                    </div>
                    <div class="col right">
                        <div class="testimony-content">
                            <h1 class="primary-heading">
                                Don’t just take our word for it,
                                <span> here’s what our users have to say.</span>
                            </h1>
                            <div class="name">
                                <h3 class="medium">Susan Mathai</h3>
                                <div class="designation">CEO, Dubai Collections</div>
                                <p>With Wabeh we are able to target all our customers. Right now we are making more and more
                                    sales than we were doing before because the deposit is affordable and customers have time to pay for it.</p>
                            </div>
                        </div>
                    </div>

                </li>
                <li>
                    <div class="col left">
                        <h3 class="medium">Testimonials</h3>
                        <span class="profile-pic">
                            <img src="images/Testimonies/susan.png" width="504" height="455" alt="susan">
                        </span>
                    </div>
                    <div class="col right">
                        <div class="testimony-content">
                            <h1 class="primary-heading">
                                Don’t just take our word for it,
                                <span> here’s what our users have to say.</span>
                            </h1>
                            <div class="name">
                                <h3 class="medium">Susan Mathai</h3>
                                <div class="designation">CEO, Dubai Collections</div>
                                <p>With Wabeh we are able to target all our customers. Right now we are making more and more
                                    sales than we were doing before because the deposit is affordable and customers have time to pay for it.</p>
                            </div>
                        </div>
                    </div>

                </li>
            </ul>

        </div>
    </section>
    <!-- End-of-testimony -->
    <!-- Customers -->
    <section class="customers margin-top-bottom">
        <div class="slider-bg"></div>
        <div class="wrapper">
            <ul class="c-main">
                <li>
                    <div class="table">
                        <div class="t-cell left">
                            <div class="pic-wrapper">
                                <img src="images/customer.png" width="296" height="296" alt="customer">
                            </div>
                        </div>
                        <div class="t-cell right">
                            <h3 class="medium">CUSTOMERS</h3>
                            <div class="bg-white">
                                <p class="orange">
                                    Discover how you can
                                    easily get the phone
                                    you want with Wabeh
                                </p>
                                <a href="#" class="primary-btn">Learn More</a>
                            </div>

                        </div>
                    </div>
                </li>
                <li>
                    <div class="table">
                        <div class="t-cell left">
                            <div class="pic-wrapper">
                                <img src="images/customer.png" width="296" height="296" alt="customer">
                            </div>
                        </div>
                        <div class="t-cell right r-hand">
                            <h3 class="medium">MERCHANTS</h3>
                            <div class="bg-white">
                                <p class="orange">
                                    Discover how you can
                                    easily get the phone
                                    you want with Wabeh
                                </p>
                                <a href="#" class="primary-btn">Learn More</a>
                            </div>

                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
<!-- End-of-customers -->



<?php get_footer(); ?>