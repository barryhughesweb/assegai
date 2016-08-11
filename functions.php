<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This file acts as a manifest for theme functions and controllers.
//  These files live in the '_functions' folder.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  THEME SETUP
//
//  These files prepare the theme for us, overwriting a few Wordpress defaults
//  and adding some additional theme agnostic functionality.

require_once('_functions/setup/clean-head.php');    //  Remove junk from the head (rsd links etc.)
require_once('_functions/setup/add-filters.php');   //  Filters control the post output directly
require_once('_functions/setup/categories.php');    //  Sorts out the default categories functionality
require_once('_functions/setup/controllers.php');   //  Indirect theme controllers (permalinks etc.)
require_once('_functions/setup/enqueue-files.php'); //  Enqueue scripts and styles to wp_head


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  REGISTER
//
//  For lack of a better name, the files below register additional theme
//  specific functionality, including menus, sidebars and post types.

require_once('_functions/register/register-menus.php');    //  Register three preset menus
require_once('_functions/register/register-sidebar.php');  //  Register default widget area
require_once('_functions/register/options-pages.php');     //  Registers the options pages
require_once('_functions/register/custom-post-types.php'); //  Creates additional post types
require_once('_functions/register/custom-taxonomies.php'); //  Creates additional taxonomies



//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  TEMPLATE TAGS
//
//  The following template tags can be called to display specific reusable
//  content at any point during the theme.

require_once('_functions/template/logo.php');    //  Add a logo with schema to the header
require_once('_functions/template/head-styling.php');   //  Calls the header specific styling
require_once('_functions/template/paging-nav.php');     //  Navigation for next/prev posts (home.php / index.php)
require_once('_functions/template/post-nav.php');       //  Navigation for next/prev post (single.php)
require_once('_functions/template/posted-on.php');      //  Post meta data (posted on, author etc.)
require_once('_functions/template/address.php');        //  Prints the address with schema
require_once('_functions/template/full-details.php');    //  Prints the full address and contact details with schema
require_once('_functions/template/phone-number.php');   //  Add a Click-to-Call phone number
require_once('_functions/template/clean-nav.php');      //  Output a clean menu - no dirty classes
require_once('_functions/template/company-number.php'); //  Print the company number from the global options
require_once('_functions/template/vat-number.php'); //  Print the company number from the global options
require_once('_functions/template/json.php'); //  Print the company number from the global options
require_once('_functions/template/email-address.php'); //  Print the company email from the global options
require_once('_functions/template/opening-times.php'); //  Print the company opening times from the global options
require_once('_functions/template/stars.php'); //  Print star ratings
require_once('_functions/template/facebook.php');   //  Add a Facebook Link
require_once('_functions/template/google-plus.php');   //  Add a Google+ Link
require_once('_functions/template/area-details.php');   //  Add a Google+ Link


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  ADMIN FUNCTIONS
//
//  Boosts functionality to the Wordpress backend

require_once('_functions/admin/global-options.php'); //  User controled global options (logo etc.)