<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template for archive pages

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<?php get_template_part('_partials/content', 'slider_narrow_archive'); ?>

<section class="section--whole archive">
<div class="container--xlarge"> 
<div class="grid">
<div class="grid__item--two__thirds">
  <div class="padding_box">
  <?php if ( have_posts() ) : ?>
   
    
    
    <?php
      
      // Show an optional term description
      
      $term_description = term_description();
      
      if ( ! empty( $term_description ) ) :
        printf( '<div class="taxonomy-description">%s</div>', $term_description );
      endif;
      
    ?>   
    <?php
    
    //  Start the loop
    
    while ( have_posts() ) : the_post(); ?>
    
    <?php
    
    //  Retrieves the relevant format for the template. Post format parts
    //  can be found within the '_partials' folder.
    
    get_template_part( '_partials/content', get_post_format() ); ?>
    
    <?php endwhile; ?>
   
      <?php
      
      //  Calls the pagenation function from '_default/template-tags.php'
      
      hobbes_paging_nav(); ?>
      
    <?php else : ?>
      
      <?php get_template_part( '_partials/content', 'none' ); ?>
   
  <?php endif; ?>
  </div>

</div><!-- 
--><?php get_sidebar(); ?>
</div>
</div>
</section>
<?php get_footer(); ?>