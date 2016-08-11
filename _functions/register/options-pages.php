<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This file adds an Options Page for the backend
//
//  [_1_] Create the Firs Option Page

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_1_] Create the First Option Page  //

  if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
      'page_title' 	=> 'Options',
      'menu_title'	=> 'Options',
      'menu_slug' 	=> 'options',
    'capability'	=> 'edit_posts',
    'redirect'		=> false
    ));

  }