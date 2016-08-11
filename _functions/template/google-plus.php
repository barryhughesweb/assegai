<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that prints the company number as spcified in the global
//  options page, if it exists

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_google-plus' ) ) :

function hobbes_google_plus($string) {
  
  $options = get_option( 'theme_options' );
  
  if ( $options['google_plus'] != '' ) { 
        
        echo '<a href="'. $options['google_plus'] .'" class="icon google" target="_blank" ><i class="fa fa-google-plus"></i></a>';
    
  } }
  
endif;


if ( ! function_exists( 'hobbes_google-plus_2' ) ) :

function hobbes_google_plus_2($string) {
  
  $options = get_option( 'theme_options' );
  
  if ( $options['google_plus'] != '' ) { 
        
        echo '<a href="'. $options['google_plus'] .'" class="icon google" target="_blank" ><i class="fa fa-google-plus"></i></a>';
    
  } }
  
endif;