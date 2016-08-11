<?php

//  Template Name: Contact

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template for displaying pages as denoted by the
//  WordPress 'pages' post type.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
 
<?php get_template_part('_partials/content', 'slider_narrow_contact'); ?>
  
<section class="section--whole contact">
 <div class="container--xlarge">
  <div class="grid--full">
    <div class="grid__item--half--lap__whole">
    <div class="padding_box">
		<h1><?php the_title(); ?></h1>
      <?php the_content(); ?>

    </div>
    </div><!--
    --><?php get_sidebar(); ?>
  </div>
 </div>
</section>

<?php endwhile; ?>

<?php get_footer(); ?>