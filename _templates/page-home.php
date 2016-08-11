<?php

//  Template Name: Home

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template for displaying pages as denoted by the
//  WordPress 'pages' post type.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part('_partials/content', 'slider'); ?>

<?php get_template_part('_partials/content', 'tabs'); ?>

<main>

    <?php get_template_part('_partials/content', 'large_message_1'); ?>

    <?php get_template_part('_partials/content', 'main_col_image'); ?>

    <?php get_template_part('_partials/content', 'main_full_cta'); ?>

    <?php get_template_part('_partials/content', 'main_col_image_2'); ?>

    <?php get_template_part('_partials/content', 'large_message_2'); ?>

</main>

<?php get_template_part('_partials/content', 'message_reviews'); ?>

<?php get_template_part('_partials/content', '3_col_img_solution'); ?>

<?php get_template_part('_partials/content', 'map_accreditations'); ?>
    
<?php endwhile; ?>

<?php get_footer(); ?>
