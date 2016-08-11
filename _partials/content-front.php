<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template part used for displaying the home
//  page content in 'page.php'

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>
<?php get_template_part('_partials/content', 'slider'); ?>
<section class="section--whole">
  <div class="container--xlarge">
  <div class="grid">
  <div class="with__aside">

    <div class="content">

      <?php the_title( '<h1>', '</h1>' ); ?>
      <?php the_content(); ?>

    </div>
    
    <?php get_template_part('_partials/content', 'testimonials'); ?>
    <?php get_template_part('_partials/content', 'case-studies'); ?>

  </div><!--
  --><?php get_sidebar(); ?>
	  </div>
	</div>
</section>