<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This file creates any custom taxonomies we need for our theme. Get started
//  by un-commenting everything below, and customizing the taxonomy to suit.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

function create_hobbes_taxonomies() {
  
  register_taxonomy(
    'testimonial_categories', //  Your taxonomy title  //
    'testimonials',   //  The Custom Post Type it will belong to  //
    array(
      'hierarchical' => true,
      'label'        => 'Testimonial Categories',
      'query_var'    => true,
      //'rewrite'      => array('slug' => 'sluge-name-here')
    )
  );
  
  //  Addd the next taxonomy here  //
  
	register_taxonomy(
    'case_study_categories', //  Your taxonomy title  //
    'case-studies',   //  The Custom Post Type it will belong to  //
    array(
      'hierarchical' => true,
      'label'        => 'Case Study Categories',
      'query_var'    => true,
      //'rewrite'      => array('slug' => 'sluge-name-here')
    )
  );
	
  flush_rewrite_rules();
}

add_action( 'init', 'create_hobbes_taxonomies' );