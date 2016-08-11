<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This displays the widgets from the default sidebar with fallback content
//  if no widgets exist.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?><?php if ( is_single() || is_archive() || is_search() ) :

  //  Retrieves the relevant sidebar for post page.

  get_template_part( '_partials/sidebar' , 'default' );

else:

  //  Retrieves the relevant sidebar if page is the contact page.

  get_template_part( '_partials/sidebar', 'contact' ); ?>

<?php endif; ?>