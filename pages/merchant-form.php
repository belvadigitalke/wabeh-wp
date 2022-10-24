<?php
/**
 *
 * Template Name: MerchantForm
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
  <!-- Services -->
  <section class="services padding-top-bottom">
        <div class="wrapper">
            <div class="blue-tx small">  Wabeh’s comprehensive set of services enable you to focus on what helps
            drive your business growth: your sales. Leave the credit scoring, consumer
                financing, payment collection, and customer support to us.</div>
        </div>
        <div class="wrapper">
            <ul>
                <li>
                    <div class="icn">
                        <img src="<?php echo home_url('/'); ?>/wp-content/uploads/2022/10/phone.jpg" width="" height="">
                    </div>
                    <div class="ttle-s">Sell a wide variety of Buy Now, Pay Later phones:</div>
                    <span class="desc-s"> Choose from 150+ phones compatible with Wabeh, including from your own stock </span>
                </li>
                <li>
                    <div class="icn">
                        <img src="<?php echo home_url('/'); ?>/wp-content/uploads/2022/10/increase.jpg" width="" height="">
                    </div>
                    <div class="ttle-s">Increase your sales by over</div>
                    <div class="blue-tx">50%</div>
                    <span class="desc-s">Attract customers with the flexibility,ease,and affordability they are looking for </span>
                </li>
                <li>
                    <div class="icn">
                        <img src="<?php echo home_url('/'); ?>/wp-content/uploads/2022/10/headset.jpg" width="" height="">
                    </div>
                    <div class="ttle-s">Extensive training and support:</div>
                    <span class="desc-s">Get comprehensive support to help your business troubleshoot
                        technical issues, access training, run sales initiatives, and more</span>
                </li>
                <li>
                    <div class="icn">
                        <img src="<?php echo home_url('/'); ?>/wp-content/uploads/2022/10/support.jpg" width="" height="">
                    </div>
                    <div class="ttle-s">Marketing support:</div>
                    <span class="desc-s">Drive your sales through partnership campaigns, activations, events and sales collateral</span>
                </li>
            </ul>
        </div>
    <!-- End-of-services -->
    <!-- form -->
        <section class="form margin-top-bottom">
            <div class="slider-bg"></div>
            <div class="tbl">
                <div class="col left">
                    <p class="orange">
                        Become a Wabeh
                        merchant and
                        watch your sales
                        grow up to 50%.
                    </p>
                    <p class="text-b white">
                        Get in touch to learn how you can
                        expand your customer base and
                        sell more phones with Wabeh
                        Buy Now, Pay Later payment plans
                    </p>

                </div>
                <div class="col right">

                    <form class="frmLead" action="#" method="post">
                        <div class="fieldset">
                            <div class="field">
                                <div class="input-wrapper">
                                    <input type="text" class="textbox" id="f-name" name="f-name" maxlength="50">
                                    <label for="f-name" class="input-label">
                                        <span class="label">Full Name</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="fieldset">
                            <div class="field">
                                <div class="input-wrapper">
                                    <input type="text" class="textbox" id="l-name" name="l-name" maxlength="50">
                                    <label for="l-name" class="input-label">
                                        <span class="label">Business Email</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="fieldset">
                            <div class="field">
                                <div class="input-wrapper">
                                    <input type="text" class="textbox" id="p-number" name="p-number" maxlength="50">
                                    <label for="p-number" class="input-label">
                                        <span class="label">Phone Number</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="fieldset">
                            <div class="field">
                                <div class="input-wrapper">
                                    <input type="text" class="textbox" id="b-name" name="b-name" maxlength="50">
                                    <label for="b-name" class="input-label">
                                        <span class="label">Business Name</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="fieldset">
                            <div class="field">
                                <div class="input-wrapper">
                                    <input type="text" class="textbox" id="shop" name="shop" maxlength="50">
                                    <label for="shop" class="input-label">
                                        <span class="label">No of retail shops</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Get in touch</a>
                    </form>

                </div>
            </div>
        </section>
    <!-- End-of-form -->
    <!-- hear-->
    <section class="hear">
        <div class="wrapper">
            <div class="ttle-b">Hear why other merchants are succeeding with Wabeh</div>
            <a href="#" class="primary-btn">Get in touch</a>
        </div>
    </section>
    <!-- End-of-hear -->
    </section>
    <!-- End-of-Services -->
    <!-- merchant-slider -->
    <section class="merchant-s">
        <div class="slider-bg"></div>
        <div class="wrapper">
            <ul class="profiles owl-carousel">
            <?php
                    $args = array(
                        'post_type' => array('testimonial'),
                        'posts_per_page' => -1,
                        'order' => 'DESC',
                    );

                $so_servic = new WP_Query( $args );

                if ( $so_servic->have_posts() ) {
                    while ( $so_servic->have_posts() ) {
                        $so_servic->the_post();

                        ?>
                <li>
                    <div class="col left">
                        <span class="profile-pic">
						<img src="<?php echo the_post_thumbnail_url(); ?>" width="504" height="455" alt="<?php echo the_title(); ?>">
					</span>
                    </div>
                    <div class="col right">
                        <div class="testimony-content">
                            <div class="name">
                                <h3 class="medium"><?php echo the_title(); ?></h3>
                                <div class="designation"><?php echo the_field('position'); ?> </div>
                                <p><?php echo the_content(); ?>
                                </p>
                            </div>

                        </div>
                    </div>
                </li>
               
                <?php 
                    }
                } else {
                    echo "NO DATA";
                }
                ?>
		        <?php wp_reset_postdata()?>
            </ul>
        </div>
    </section>
    <!-- End-of-merchant-slider -->

    <?php get_footer(); ?>