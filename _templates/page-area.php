<?php

//  Template Name: Area

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template for displaying pages as denoted by the
//  WordPress 'pages' post type.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<?php get_template_part('_partials/content', 'slider_narrow'); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php /*
<section class="section--whole area_top">
    <div class="container--xlarge">
        <div class="grid--full">
            <div class="grid__item--half--desk__whole">
                <main class="padding_box">
                
                <?php if ( get_field('h1') == true ) { ?>

                    <h1><?php the_field('h1'); ?></h1>
                    <?php } else { ?>
                    <h1><?php the_title(); ?></h1>

                <?php } ?>
                
                <?php the_content();?></main>
            </div><!--
            --><div class="grid__item--half--desk__whole">
                <div id="map-canvas"></div>
            </div>
        </div>
    </div>
</section>
*/ ?>

<?php get_template_part('_partials/content', 'area_top'); ?>

<?php get_template_part('_partials/content', 'large_message_1'); ?>

<?php get_template_part('_partials/content', 'tabs2'); ?>
 
<?php get_template_part('_partials/content', 'area_image_text'); ?>

<?php get_template_part('_partials/content', 'main_full_cta'); ?>

<?php get_template_part('_partials/content', '3_col_img_solution_area'); ?>

<?php get_template_part('_partials/content', 'large_message_2'); ?>

<?php endwhile; ?>

<?php get_footer(); ?>