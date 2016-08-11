<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template for displaying 404 Error pages

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<?php get_template_part('_partials/content', 'slider_narrow_404'); ?>

<section class="section--whole error404">
<div class="container--xlarge">
  <div class="grid--full">
    <div class="grid__item--half--lap__whole">
    <div class="padding_box">
                <h1><?php _e( 'Error 404, Page not found', 'hobbes' ); ?></h1>
                <?php get_search_form(); ?>
                <p>
                    <?php _e( 'Sorry, but we could not find the page you were looking for. It has either changed URL or been removed. Use the main website navigation to continue browsing this website.', 'hobbes' ); ?></p>
                
                <?php echo the_content(); ?>
                <?php wp_nav_menu(array('menu' => 'Sitemap Menu')); ?>

    </div>
    </div><!--
    --><?php get_sidebar(); ?>
  </div>
 </div>



</section>

<?php get_footer(); ?>