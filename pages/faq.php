<?php
/**
 *
 * Template Name: FAQs
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


 <!-- End-of-main-banner -->
 <section class="faqs-t">
        <div class="wrapper padding-top-bottom">
            <h4>Frequently Asked Questions for
                Wabeh products and services</h4>
        </div>
    </section>

    <section class="general">
        <h6>General</h6>
        <div class="wrapper">
            <?php if( have_rows('general') ): 
                while( have_rows('general') ) : the_row(); ?>

                    <ul class="accordion">

                        <li>
                            <a href="#" class="title"><?php the_sub_field('title'); ?></a>
                            <div class="desc">
                                <?php the_sub_field('description'); ?>
                            </div>
                        </li>
                        <?php endwhile; ?>
                    </ul>
            
            <?php endif; ?>

        </div>

    </section>

    <section class="customer-inside padding-top-bottom">
        <h6>Customer</h6>
        <div class="wrapper">
        <?php if( have_rows('customer') ): 
                while( have_rows('customer') ) : the_row(); ?>

                    <ul class="accordion">

                        <li>
                            <a href="#" class="title"><?php the_sub_field('title'); ?></a>
                            <div class="desc">
                                <?php the_sub_field('description'); ?>
                            </div>
                        </li>
                        <?php endwhile; ?>
                    </ul>
            
            <?php endif; ?>
        </div>

    </section>
    <section class="merchants-inside">
        <h6>Merchants</h6>
        <div class="wrapper">
        <?php if( have_rows('merchants') ): 
                while( have_rows('merchants') ) : the_row(); ?>

                    <ul class="accordion">

                        <li>
                            <a href="#" class="title"><?php the_sub_field('title'); ?></a>
                            <div class="desc">
                                <?php the_sub_field('description'); ?>
                            </div>
                        </li>
                        <?php endwhile; ?>
                    </ul>
            
            <?php endif; ?>
        </div>

    </section>


    <?php get_footer(); ?>