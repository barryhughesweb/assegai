<?php

//  Template Name: FAQ's

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template for displaying pages as denoted by the
//  WordPress 'pages' post type.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part('_partials/content', 'slider_narrow_faqs'); ?>

<?php get_template_part('_partials/content', 'faqs'); ?>

<?php get_template_part('_partials/content', 'tabs'); ?>

<?php get_template_part('_partials/content', 'main_full_cta'); ?>

<?php endwhile; ?>

<?php get_footer(); ?>