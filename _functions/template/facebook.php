<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that prints the company number as spcified in the global
//  options page, if it exists

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_facebook' ) ) :

function hobbes_facebook($string) {
  
  $options = get_option( 'theme_options' );
  
  if ( $options['facebook'] != '' ) { 
        
        echo '<a href="'. $options['facebook'] .'" class="icon facebook" target="_blank" ><i class="fa fa-facebook"></i></a>';
    
  } }
  
endif;


if ( ! function_exists( 'hobbes_facebook_2' ) ) :

function hobbes_facebook_2($string) {
  
  $options = get_option( 'theme_options' );
  
  if ( $options['facebook'] != '' ) { 
        
        echo '<a href="'. $options['facebook'] .'" class="icon facebook" target="_blank" ><i class="fa fa-facebook"></i></a>';
    
  } }
  
endif;