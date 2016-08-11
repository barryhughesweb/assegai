<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template for displaying all single testimonials

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>
   
    <?php while ( have_posts() ) : the_post(); ?>
     
      <?php
      
      //  Retrieves the relevant format for the template. Post format parts
      //  can be found within the '_partials' folder.
      
      get_template_part( '_partials/content', 'single-testimonial' ); ?>
      
    <?php endwhile; ?>
  
<?php get_footer(); ?>