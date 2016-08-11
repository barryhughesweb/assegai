<?php

//  Template Name: Template 2

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template for displaying pages as denoted by the
//  WordPress 'pages' post type.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part('_partials/content', 'slider_narrow'); ?>

<main>

    <?php get_template_part('_partials/content', 'main_temp2_col_image'); ?>

    <?php //get_template_part('_partials/content', 'large_message_1'); ?>

    <?php get_template_part('_partials/content', 'large_message_2'); ?>

    <?php get_template_part('_partials/content', '3_col_img_text2'); ?>

    <?php get_template_part('_partials/content', 'main_full_cta'); ?>

</main>

<?php get_template_part('_partials/content', 'text_reviews_image'); ?>

<?php endwhile; ?>

<?php get_footer(); ?>