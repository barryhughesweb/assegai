<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template part used for displaying content in 'page.php'

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<section class="section--whole">
  
  <div class="content">
    
    <?php the_title( '<h1>', '</h1>' ); ?>
    
    <?php the_content(); ?>

    <?php
      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'hobbes' ),
        'after'  => '</div>',
      ) );
    ?>

    <?php edit_post_link( __( 'Edit', 'hobbes' ), '<span class="edit-link">', '</span>' ); ?>
    
  </div>
  
</section>