<?php
/**
 *
 * Template Name: Merchant
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
 <!-- Business-growth -->
 <section class="business padding-top-bottom">
        <div class="slider-bg"></div>
        <div class="wrapper">
            <ul>
                <li>
                    <div class="ttle-b first">Power your business growth</div>
                    <span class="desc-b first">Enjoy higher conversion, more repeat purchases, and immediate payment </span>
                </li>
                <li>
                    <div class="icn">
                        <img src="<?php echo home_url('/'); ?>/wp-content/uploads/2022/10/conversion.png" width="" height="">
                    </div>
                    <div class="ttle-b">20-30%</div>
                    <span class="desc-b">Conversion rate improvement</span>
                    <p class="text-b">Seamless sales experience: apply for and approve your customers in minutes </p>
                </li>
                <li>
                    <div class="icn">
                        <img src="<?php echo home_url('/'); ?>/wp-content/uploads/2022/10/increase.png" width="" height="">
                    </div>
                    <div class="ttle-b">30-150%</div>
                    <span class="desc-b">Increase in monthly sales</span>
                    <p class="text-b"> Affordable payment terms including no hidden fees or late fees </p>
                </li>
                <li>
                    <div class="icn">
                        <img src="<?php echo home_url('/'); ?>/wp-content/uploads/2022/10/new-customers.png" width="" height="">
                    </div>
                    <div class="ttle-b">40-50%</div>
                    <span class="desc-b">Increase in new customers </span>
                    <p class="text-b">Turn more prospects into buyers with an inclusive application process and
                        affordable payment plans </p>
                </li>
            </ul>
            <a href="#" class="primary-btn">These are outcomes experienced by resellers providing Wabeh BNPL.</a>
        </div>
    </section>
    <!-- End-of-Business-growth -->
    <!-- innovative -->
    <section class="innovative padding-top-bottom">
        <div class="slider-bg"></div>
        <div class="wrapper">
            <div class="financing table">
                 <div class="col left">
                     <img class="cycle" src="<?php echo home_url('/'); ?>/wp-content/uploads/2022/10/innovation-structure-1-1.png" width="515" height="456" alt="">
                 </div>
                 <div class="col right">
                     <div class="ttle-b">An Innovative Financing Partner to Fit Your Business Needs</div>
                     <div class="text-b">
                         Access a complete set of services to support
                         your Buy Now, Pay Later sales, from consumer
                         financing to payment collections and customer
                         support
                     </div>
                 </div>
            </div>
            <div class="users">
                <img class="user" src="<?php echo home_url('/'); ?>/wp-content/uploads/2022/10/users-1.png" width="858" height="278" alt="">
            </div>
            <div class="business">
                <ul>
                    <li>
                        <div class="ttle-b">Take on zero risk</div>
                        <p class="text-b">Focus on sales while we manage consumer financing and payment collection    </p>
                    </li>
                    <li>
                        <div class="ttle-b">Get extensive training and support </div>
                        <p class="text-b">  Premium support is available to troubleshoot all technical issues, access training, run sales and marketing initiatives, and more   </p>
                    </li>
                    <li>
                        <div class="ttle-b">Attract more customers </div>
                        <p class="text-b"> Offer a fast approval process and affordable, convenient payment plans </p>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <!-- End-of-Innovative -->
    <!-- devices -->
    <section class="devices">
        <div class="wrapper">
            <div class="tbl">
                <div class="col left">
                <?php
                    $args = array(
                        'post_type' => array('phoneofinterest'),
                        'posts_per_page' => -1,
                        'order' => 'DESC',
                    );

                $so_service = new WP_Query( $args );

                if ( $so_service->have_posts() ) {
                    while ( $so_service->have_posts() ) {
                        $so_service->the_post();

                        ?>

                    <a href="<?php echo the_permalink(); ?>" class="device"> <img src="<?php echo the_post_thumbnail_url(); ?>" width="164" height="251" alt="<?php echo the_title(); ?>"> </a>
                  
                    <?php 
                    }
                } else {
                    echo "NO DATA";
                }
                ?>
		        <?php wp_reset_postdata()?>

                </div>
                <div class="col right">
                    <div class="ttle-b">Effortlessly sell a
                        wide range of devices</div>
                    <p class="text-b"> Choose from over 150 premium phones to attract more customers and increase your  conversion rate </p>
                </div>
            </div>
        </div>

    </section>
    <!-- End-of-devices -->
    <!-- why-phone -->
    <section class="why-phone padding-top-bottom margin-top-bottom">
        <div class="slider-bg"></div>
        <div class="wrapper">
            <div class="ttle-b">See why phone merchants of all sizes</div>
            <p class="text-b">Trust Wabeh to grow their business</p>
        </div>
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
                                    <div class="designation"><?php echo the_field('position'); ?></div>
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
    <!-- Boost-sales -->
    <section class="boost-sales padding-top-bottom">
        <div id="boost" style="background-image:url(<?php echo home_url('/'); ?>/wp-content/uploads/2022/10/boost-sale-1.jpg);">
            <div class="wrapper s-tbl">
                <div class="col left">
                    <div class="ttle-b">Boost your sales today</div>
                    <p class="text-b">Looking for more partnership info or interested in offering Wabeh Buy Now,
                        Pay Later payment plans to customers?  </p>
                    <a href="#" class="primary-btn">Get in touch</a>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>