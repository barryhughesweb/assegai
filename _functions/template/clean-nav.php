<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Filters and fucntions that output wp_nav_menu with clean HTML5 markup
//  Removes redundant containers and classses and renames necessary ones.
//
//  [_1_] Filters
//  [_2_] Function

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_1_] Filters  //

//  First, we remove all the classes from wp_nav_menu generated code  //

function hobbes_remove_menu_attributes( $menu ){
  return $menu = preg_replace('/ id=\"(.*)\" class=\"(.*)\"/iU', '', $menu );
}

//add_filter( 'wp_nav_menu', 'hobbes_remove_menu_attributes' );


//  Next we list those items that are useful and that we want to keep  //

function hobbes_allow_menu_attributes($var) {
  
  return is_array($var) ? array_intersect($var,
    array(
      //List of allowed menu classes
      'current_page_item',
      'current_page_parent',
      'current_page_ancestor',
      'first',
      'last',
      'vertical',
      'sub-menu',
      'menu-item-has-children',
      'horizontal'
    )
  ) : '';
}

//add_filter('nav_menu_css_class', 'hobbes_allow_menu_attributes');
//add_filter('nav_menu_item_id', 'hobbes_allow_menu_attributes');
//add_filter('page_css_class', 'hobbes_allow_menu_attributes');


//  Then rename the 'current_page' classes to 'active' - much better!  //

function hobbes_current_to_active($text){
  
  $replace = array(
    'current_page_item' => 'active',
    'current_page_parent' => 'active',
    'current_page_ancestor' => 'active',
  );
  
  $text = str_replace(array_keys($replace), $replace, $text);
  return $text;
}

add_filter ('wp_nav_menu','hobbes_current_to_active');


//  Finally, we remove empty class fields and any 'sub-menu' ones  //

function hobbes_strip_empty_classes($menu) {
  $menu = preg_replace('/ class=""| class="sub-menu"/','',$menu);
  return $menu;
}

//add_filter ('wp_nav_menu','hobbes_strip_empty_classes');


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_2_] Function
//
//  Now we create a function that will set wp_nav_menu defaults as we call it
//  and allow us to choose a class for the container <nav>

if ( ! function_exists( 'hobbes_clean_nav' ) ) :

function hobbes_clean_nav($nav_location, $nav_class) {
  
  $hobbes_nav_defaults = array(
    'theme_location' => $nav_location,
    'container' => 'nav',
    'container_class' => $nav_class,
    'container_id' => '',
    'link_before' => '<span>',
    'link_after' => '</span>',
  );
  
  wp_nav_menu( $hobbes_nav_defaults );
  
}

endif;