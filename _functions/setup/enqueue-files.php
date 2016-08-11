<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Equeues theme scripts and stylesheets to wp_head.
//
//  NB. Because our theme does not use the default 'styles.css' file, our
//  global stylesheet (/build/css/global.css) must be enqueued here.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

function enqueue_hobbes_files() {
  //  Register jQuery from Google Libraries, not locally
  wp_deregister_script('jquery');
  wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false);
  
  //  Register Global files  //
  wp_register_style( 'add-global-styles', get_template_directory_uri() . '/build/css/global.css','','', 'all' );
  wp_register_script( 'add-global-scripts', get_template_directory_uri() . '/build/js/global.min.js', '', null,''  );
  wp_register_script( 'add-parallax-scripts', get_template_directory_uri() . '/build/js/parallax.min.js', '', null,''  );
	
  // Register Font Awesome Styles	
  wp_register_style('add-fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', false, '1.11.1');	
  
  // Make any CSS changes via the shame file if you do not know SASS //
  wp_register_style( 'add-edited-styles', get_template_directory_uri() . '/build/css/shame.css','','', 'all' );
  
  //  Enqueue Global Styles  //
  wp_enqueue_style( 'add-global-styles' );
  
  //  Enqueue Shame Styles  //
  wp_enqueue_style( 'add-edited-styles' );
	
  // Enqueue Font Awesome Styles
  wp_enqueue_style( 'add-fontawesome' );
  
  //  Enqueue Global Scripts  //
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'add-global-scripts' );
  wp_enqueue_script( 'add-parallax-scripts' );
  
  //  Enqueue Google Map Scripts, Commented out as we use "Coverage Maps" more often than "We Are Here Maps" to reduce loading  //
  
  if ( is_page_template('_templates/page-contact.php') | is_page_template('_templates/page-area.php') | is_page_template('_templates/page-template1.php') ) {
    wp_enqueue_script( 'add-google-map' );
    wp_enqueue_script( 'add-map-customised' );
  }
    
}
add_action( 'wp_enqueue_scripts', 'enqueue_hobbes_files' );

// Add Google Map Code
function addgoogle() {
	if ( is_page_template( '_templates/page-area.php' )) {
	  require get_template_directory() . '/googlemap.php';
    }
}

add_action('wp_head', 'addgoogle');

function my_login_stylesheet() {
  
  //  Register log in page styles file  //
  wp_enqueue_style( 'custom-login', get_template_directory_uri() . '/build/css/login.css','', null,'' );
  
  //  Enqueue Global Styles  //
  wp_enqueue_style( 'custom-login' );
}
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Scripts used for adding support for older browers should not be enqueued
//  as normal. Instead they are added to wp_head below.


function creare_boilerplate_html5shiv() {
  
  echo '<!--[if lt IE 9]>';
  echo '<script src="'. get_template_directory_uri() .'/build/js/default.min.js"></script>';
  echo '<![endif]-->';
  
}
add_action('wp_head', 'creare_boilerplate_html5shiv');

// remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
if ( strpos( $src, 'ver=' ) )
$src = remove_query_arg( 'ver', $src );
return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );