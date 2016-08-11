<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Runs a selections core filters through our theme
//
//  [_1_] Allow .svg uploads
//  [_2_] Remove Empty <p> tags & filter <p> tags
//  [_3_] Remove width and height attributes from <img>
//  [_4_] Remove <p> tags from <img>
//  [_5_] Enables or disables comments (defaults to disabled)
//  [_6_] Set Custom Thumbnail sizes (if required)
//  [_7_] Set Excerpt Length
//  [_8_] Gravity Forms Label
//  [_9_] Yoast Breadcrumbs Validation Fix
//  [_10_] Remove JS & CSS Version Numbers

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_1_] Allow .svg uploads  //

function hobbes_mime_types( $mimes ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}

add_filter( 'upload_mimes', 'hobbes_mime_types' );


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


// [_2_] Remove Empty <p> tags & filter <p> tags //

function hobbes_remove_empty_p($content){
  $content = force_balance_tags($content);
  return preg_replace('#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content);
}

add_filter('the_content', 'hobbes_remove_empty_p', 20, 1);

function hobbes_acf_filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('acf_the_content', 'hobbes_acf_filter_ptags_on_images');

function hobbes_filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'hobbes_filter_ptags_on_images');


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_3_] Remove width and height attributes from <img>  //

function hobbes_remove_img_dimensions( $html ) {
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}

//  From the_post_thumbnail  //
add_filter( 'post_thumbnail_html', 'hobbes_remove_img_dimensions', 10 );

//  From the WYSIWYG editor  //
add_filter( 'image_send_to_editor', 'hobbes_remove_img_dimensions', 10 );

//  From the_content  //
add_filter( 'the_content', 'hobbes_remove_img_dimensions', 10 );


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_4_] Remove <p> tags from <img>  //

function hobbes_remove_img_p($content){
  return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'hobbes_remove_img_p');



//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_5_] Enables or disables comments (defaults to disabled)  //

function hobbes_enable_comments() {
  //return true; // shows comments
  return false; // hides comments
}
add_filter( 'comments_open', 'hobbes_enable_comments', 20, 2 );
add_filter( 'pings_open', 'hobbes_enable_comments', 20, 2 );


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_6_] Set Custom Thumbnail sizes (if required)  //

add_theme_support( 'post-thumbnails' );

// set_post_thumbnail_size( 150, 150, true ); //  Set basic thumbnail size, crop mode  //
// add_image_size( 'category-thumb', 100, 100, true ); //  Custom featured image size, crop mode  //


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_7_] Set Excerpt Length  //

// E.g. echo excerpt(22); //

function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
      array_pop($excerpt);
      $excerpt = implode(" ",$excerpt).'...';
    } else {
      $excerpt = implode(" ",$excerpt);
    } 
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_8_] Gravity Forms Label  //

add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_9_] Yoast Breadcrumbs Validation Fix

//  Convert Yoast breadcrumbs to use Microdata

function convertBreadcrumbsToMicrodata($breadcrumbs)
  
{
    // remove the XML namespace
    $breadcrumbs = str_replace(' xmlns:v="http://rdf.data-vocabulary.org/#"', '', $breadcrumbs);

    // convert each breadcrumb
    $breadcrumbs = preg_replace(
        '/<span typeof="v:Breadcrumb"><a href="([^"]+)" rel="v:url" property="v:title">([^<]+)<\\/a><\\/span>/',
        '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="$1" itemprop="url"><span itemprop="title">$2</span></a></span>',
        $breadcrumbs
    );

    $breadcrumbs = preg_replace(
        '/<span typeof="v:Breadcrumb"><span class="breadcrumb_last" property="v:title">([^<]+)<\\/span><\\/span>/',
        '<span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span class="breadcrumb_last" itemprop="title">$1</span></span>',
        $breadcrumbs
    );

    return $breadcrumbs;
}

add_filter('wpseo_breadcrumb_output', 'convertBreadcrumbsToMicrodata');


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_10_] Remove JS & CSS Version Numbers

//  Thsi removes all version extensions on css and js linked through each page

function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

// Fix onclicks for numbers in acf
function my_custom_onclick_event($args) {

    // Here, we define which attributes will be allowed (onclick, href, etc)
    // Using an asterisk allows all attributes
    $ext = 'a[*],img[*]';

    // Check if this argument already exists or not; and add accordingly
    if (isset($args['extended_valid_elements'])) {
        $args['extended_valid_elements'] .= ',' . $ext;
    } else {
        $args['extended_valid_elements'] = $ext;
    }

    // Return argument to filter
    return $args;
}
add_filter('tiny_mce_before_init', 'my_custom_onclick_event');

//[_11_] Custom Image Sizes, sweet!

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'team_member_photo', 500, 500, true ); // hard Crop Mode
	add_image_size( 'case-study-thumb', 350, 200, true ); // hard Crop Mode
	add_image_size( 'slider_background_image', 1200, 500, true ); // hard Crop Mode
	add_image_size( 'half_full_image', 800, 600, true ); // hard Crop Mode
	add_image_size( 'full_image_background', 1000, 400, true ); // hard Crop Mode
	add_image_size( 'quarter_image', 500, 500, true ); // hard Crop Mode
	add_image_size( 'solutions_image', 590, 250, true ); // hard Crop Mode
	//add_image_size( 'carousel_image', 600, 550, true ); // hard Crop Mode
}