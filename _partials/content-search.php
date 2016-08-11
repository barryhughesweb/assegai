<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template part used for displaying results in search pages

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>
<article class="article__post">
<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

<?php if ( 'post' == get_post_type() ) :
  
  
  
endif; ?>

<?php the_excerpt(); ?>

<?php hobbes_posted_on(); ?> 

<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
 
  <?php
    
    // translators: used between list items, there is a space after the comma
    
    $categories_list = get_the_category_list( __( ', ', 'hobbes' ) );
    if ( $categories_list && hobbes_categorized_blog() ) :
  ?>
    
    <?php printf( __( 'Posted in %1$s', 'hobbes' ), $categories_list ); ?>
    
  <?php endif; // End if $categories_list ?>
  
<?php endif; // End if 'post' == get_post_type() ?>

</article>