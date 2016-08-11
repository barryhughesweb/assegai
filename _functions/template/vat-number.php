<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that prints the company number as spcified in the global
//  options page, if it exists

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_vat_number' ) ) :

function hobbes_vat_number($string) {
  
  $options = get_option( 'theme_options' );
  
  if ( $options['vat_number'] != '' ) {
    
     _e( $string, 'hobbes' ); echo $options['vat_number'];
    
  } }
  
endif;