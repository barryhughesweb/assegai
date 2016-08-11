<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This file adds a Global Settings page to the Wordpress backend, along with
//  a number of options that can be used to easily customise the theme/
//
//  [_1_] Create the Options Page
//  [_2_] Options Page Styling (backend only)
//  [_3_] Options Page Markup
//    [_3.1_] Company Logo
//    [_3.2_] Contact Details
//    [_3.3_] Address
//    [_3.4_] Additional Schema
//    [_3.5_] Save/Submit Options
//  [_4_] Options Page Scripts (backend only)
//  [_5_] Sanitise and Validate Options

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_1_] Create the Options Page  //

function theme_options_init(){
  register_setting( 'theme_options', 'theme_options' ); //  Register settings  //
}

//add settings page to menu
function add_settings_page() {
  add_menu_page( __( 'Theme Options' ), __( 'Global' ), 'manage_options', 'settings', 'theme_settings_page'); //  Add to backend menu  //
}

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'add_settings_page' );


function theme_settings_page() { //  start settings page  //

if ( ! isset( $_REQUEST['updated'] ) )
$_REQUEST['updated'] = false;

global $color_scheme; //  get variables outside scope  //


//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_2_] Options Page Styling (backend only)  // ?>

<style>
  
  .theme-options .postbox { margin-right: 2em; }
  
  .theme-options h2 { 
    padding-bottom: 11px;
    font-size: 23px;
  }
  
  .hndle { 
    padding: 0.75em 1em;
    margin: 0;
  }
  
  .postbox .inside {
    /*border-bottom:1px solid #eee; */
    padding: 1em;
    margin: 0;
  }
  
  .postbox input, .postbox textarea {
    width: 100%;
    padding: 5px;
    margin: 10px 0;
  }
  
  .postbox textarea {
    min-width: 100%;
    max-width: 100%;
    min-height: 150px;
  }
  
  .postbox hr { 
    border: 0;
    border-top: 1px solid #eee;
  }
  
  .header_logo {
    max-width: 200px;
    height: auto;
    margin-top: 16px;
  }
  
  .logo-upload {
    margin-right: 80px;
  }
  
  .logo-choose {
    text-align: right;
    margin-top: -41px;
  }
  
</style>


<?php //  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_3_] Options Page Markup  // ?>


<div class="theme-options">
  
  <h2><?php _e( 'Global Settings' ) //  Your admin panel title  // ?></h2>
  
  <?php
    //  show saved options message  //
    if ( false !== $_REQUEST['updated'] ) : ?>
    <div><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
  <?php endif; ?>
  
  <form method="post" action="options.php"> <?php //  Start of the options form  // ?>

  <?php settings_fields( 'theme_options' ); ?>
  <?php $options = get_option( 'theme_options' );
  
  //  [_3.1_] Company Logo  //  ?>
  
  <div id="postimgdiv" class="postbox">
    <h3 class="hndle">Custom Logo</h3>
    <div class="inside">
      
      <?php
      //  Load the scripts required for the media uploader  //
      
      if(function_exists( 'wp_enqueue_media' )){
        wp_enqueue_media();
        
      }else{
        wp_enqueue_style('thickbox');
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
        
      } ?>
      
      <label for="theme_options[custom_logo]"><b><?php _e( 'Enter a URL or upload an image' ); ?></b></label><br>
      
      <div class="logo-upload">
        <?php //  Logo URL Field  // ?>
        <input class="header_logo_url" type="text" name="theme_options[custom_logo]" value="<?php esc_attr_e( $options['custom_logo'] ); ?>">
      </div>
      
      <div class="logo-choose">
        <?php //  Logo Uploader Button  // ?>
        <a class="button button-primary button-large header_logo_upload" href="#">Upload</a>
      </div>
      
      <img class="header_logo" src="<?php esc_attr_e( $options['custom_logo'] ); ?>" />
    </div>
  </div>
  
  <?php //  [_3.2_] Contact Details  // ?>
  
  <div id="postimgdiv" class="postbox">
    <h3 class="hndle">Contact Details</h3>
    <div class="inside">
       
      <?php //  Phone Number Field  // ?>
      <label for="theme_options[phone_number]"><b><?php _e( 'Telephone Number' ); ?></b></label><br>
      <input id="theme_options[phone_number]" type="text" name="theme_options[phone_number]" value="<?php esc_attr_e( $options['phone_number'] ); ?>" />
       
    </div>
    <div class="inside">
       
      <?php //  CTA Phone Number Field  // ?>
      <label for="theme_options[cta_phone_number]"><b><?php _e( 'CTA Telephone Number (Do not use, value from above will show here)' ); ?></b></label><br>
      <input id="theme_options[cta_phone_number]" type="text" name="theme_options[cta_phone_number]" value="<?php esc_attr_e( $options['phone_number'] ); ?>" />
       
    </div>
    <hr>
    <div class="inside">
       
      <?php //  Mobile Number Field  // ?>
      <label for="theme_options[mobile_number]"><b><?php _e( 'Mobile Number' ); ?></b></label><br>
      <input id="theme_options[mobile_number]" type="text" name="theme_options[mobile_number]" value="<?php esc_attr_e( $options['mobile_number'] ); ?>" />
       
    </div>
 
    <hr>
   <?php /* <div class="inside" //UNCOMMENT, COPY AND MODIFY THIS SECTION TO ADD AREA NUMBERS
       
      <?php //  Area Number Field  // ?>
      <label for="theme_options[area1_number]"><b><?php _e( 'Area 1 Number' ); ?></b></label><br>
      <input id="theme_options[area1_number]" type="text" name="theme_options[area1_number]" value="<?php esc_attr_e( $options['area1_number'] ); ?>" />
       
    </div>
 
    <hr>*/ ?>
     
    <div class="inside">
       
      <?php //  Company Email  // ?>
      <label for="theme_options[company_email]"><b><?php _e( 'Company Email' ); ?></b></label><br>
      <input id="theme_options[company_email]" type="text" name="theme_options[company_email]" value="<?php esc_attr_e( $options['company_email'] ); ?>" />
       
    </div>
 
    <hr>
 
    <div class="inside">
       
      <?php //  Registered Company Number Field  // ?>
      <label for="theme_options[company_number]"><b><?php _e( 'Company Number' ); ?></b></label><br>
      <input id="theme_options[company_number]" type="text" name="theme_options[company_number]" value="<?php esc_attr_e( $options['company_number'] ); ?>" />
       
    </div>
    
    <hr>
 
    <div class="inside">
       
      <?php //  VAT Number Field  // ?>
      <label for="theme_options[vat_number]"><b><?php _e( 'VAT Number' ); ?></b></label><br>
      <input id="theme_options[vat_number]" type="text" name="theme_options[vat_number]" value="<?php esc_attr_e( $options['vat_number'] ); ?>" />
       
    </div>
  </div>
  
  <?php //  [_3.3_] Address  // ?>
   
  <div id="postimgdiv" class="postbox">
    <h3 class="hndle">Company Address</h3>
     
    <div class="inside">
       
      <?php //  Schema Business Type  // ?>
      <label for="theme_options[schema_type]"><b><?php _e( 'Schema Type' ); ?></b></label><br>
      <input id="theme_options[schema_type]" type="text" name="theme_options[schema_type]" value="<?php esc_attr_e( $options['schema_type'] ); ?>" />
       
    </div>
    
    <div class="inside">
       
      <?php //  Schema Business Legal Name  // ?>
      <label for="theme_options[legal_name]"><b><?php _e( 'Legal Company Name' ); ?></b></label><br>
      <input id="theme_options[legal_name]" type="text" name="theme_options[legal_name]" value="<?php esc_attr_e( $options['legal_name'] ); ?>" />
       
    </div>
     
    <div class="inside">
       
      <?php //  Address Line 1 Field  // ?>
      <label for="theme_options[address_street_1]"><b><?php _e( 'Address Line 1' ); ?></b></label><br>
      <input id="theme_options[address_street_1]" type="text" name="theme_options[address_street_1]" value="<?php esc_attr_e( $options['address_street_1'] ); ?>" />
       
    </div>
 
    <hr>
 
    <div class="inside">
      
      <?php //  Address Line 2 Field  // ?>
      <label for="theme_options[address_street_2]"><b><?php _e( 'Address Line 2' ); ?></b></label><br>
      <input id="theme_options[address_street_2]" type="text" name="theme_options[address_street_2]" value="<?php esc_attr_e( $options['address_street_2'] ); ?>" />
       
    </div>
 
    <hr>
 
    <div class="inside">
      
      <?php //  City/Town Field  // ?>
      <label for="theme_options[address_city]"><b><?php _e( 'City / Town' ); ?></b></label><br>
      <input id="theme_options[address_city]" type="text" name="theme_options[address_city]" value="<?php esc_attr_e( $options['address_city'] ); ?>" />
       
    </div>
 
    <hr>
 
    <div class="inside">
      
      <?php //  County/State Field  // ?>
      <label for="theme_options[address_county]"><b><?php _e( 'County' ); ?></b></label><br>
      <input id="theme_options[address_county]" type="text" name="theme_options[address_county]" value="<?php esc_attr_e( $options['address_county'] ); ?>" />
       
    </div>
 
    <div class="inside">
      
      <?php //  Postcode/Zip Field  // ?>
      <label for="theme_options[address_postcode]"><b><?php _e( 'Postcode' ); ?></b></label><br>
      <input id="theme_options[address_postcode]" type="text" name="theme_options[address_postcode]" value="<?php esc_attr_e( $options['address_postcode'] ); ?>" />
       
    </div>
    
    <div class="inside">
       
      <?php //  Latitude  // ?>
      <label for="theme_options[latitude]"><b><?php _e( 'Latitude' ); ?></b></label><br>
      <input id="theme_options[latitude]" type="text" name="theme_options[latitude]" value="<?php esc_attr_e( $options['latitude'] ); ?>" />
       
    </div>
    
    <div class="inside">
       
      <?php //  Longitude  // ?>
      <label for="theme_options[longitude]"><b><?php _e( 'Longitude' ); ?></b></label><br>
      <input id="theme_options[longitude]" type="text" name="theme_options[longitude]" value="<?php esc_attr_e( $options['longitude'] ); ?>" />
       
    </div>
  </div>
   
  <?php //  [_3.4_] Additional Schema  // ?>
     
  <div id="postimgdiv" class="postbox">
    <h3 class="hndle">Opening Times</h3>
     
    <div class="inside">
       
      <?php //  Opening Times Monday  // ?>
      <label for="theme_options[opening_times]"><b><?php _e( 'Monday:' ); ?></b></label><br>
      <input id="theme_options[opening_times]" type="text" name="theme_options[opening_times]" value="<?php esc_attr_e( $options['opening_times'] ); ?>" />
       
      <?php //  Formatted Opening Times Monday  // ?>
      <label for="theme_options[formatted_opening_times]"><b><?php _e( 'Formatted Opening Times Monday' ); ?></b> <em>eg. Mo-Fr 08:00-17:00</em></label><br>
      <input id="theme_options[formatted_opening_times]" type="text" name="theme_options[formatted_opening_times]" value="<?php esc_attr_e( $options['formatted_opening_times'] ); ?>" />
       
    </div>
    <div class="inside">
       
      <?php //  Opening Times Tuesday  // ?>
      <label for="theme_options[opening_times_2]"><b><?php _e( 'Tuesday:' ); ?></b></label><br>
      <input id="theme_options[opening_times_2]" type="text" name="theme_options[opening_times_2]" value="<?php esc_attr_e( $options['opening_times_2'] ); ?>" />
       
      <?php //  Formatted Opening Times Tuesday  // ?>
      <label for="theme_options[formatted_opening_times_2]"><b><?php _e( 'Formatted Opening Times Tuesday' ); ?></b> <em>eg. Mo-Fr 08:00-17:00</em></label><br>
      <input id="theme_options[formatted_opening_times_2]" type="text" name="theme_options[formatted_opening_times_2]" value="<?php esc_attr_e( $options['formatted_opening_times_2'] ); ?>" />
       
    </div>
    <div class="inside">
       
      <?php //  Opening Times Wednesday  // ?>
      <label for="theme_options[opening_times_3]"><b><?php _e( 'Wednesday:' ); ?></b></label><br>
      <input id="theme_options[opening_times_3]" type="text" name="theme_options[opening_times_3]" value="<?php esc_attr_e( $options['opening_times_3'] ); ?>" />
       
      <?php //  Formatted Opening Times Wednesday  // ?>
      <label for="theme_options[formatted_opening_times_3]"><b><?php _e( 'Formatted Opening Times Wednesday' ); ?></b> <em>eg. Mo-Fr 08:00-17:00</em></label><br>
      <input id="theme_options[formatted_opening_times_3]" type="text" name="theme_options[formatted_opening_times_3]" value="<?php esc_attr_e( $options['formatted_opening_times_3'] ); ?>" />
       
    </div>
    <div class="inside">
       
      <?php //  Opening Times Thursday  // ?>
      <label for="theme_options[opening_times_4]"><b><?php _e( 'Thursday:' ); ?></b></label><br>
      <input id="theme_options[opening_times_4]" type="text" name="theme_options[opening_times_4]" value="<?php esc_attr_e( $options['opening_times_4'] ); ?>" />
       
      <?php //  Formatted Opening Times Thursday  // ?>
      <label for="theme_options[formatted_opening_times_4]"><b><?php _e( 'Formatted Opening Times Thursday' ); ?></b> <em>eg. Mo-Fr 08:00-17:00</em></label><br>
      <input id="theme_options[formatted_opening_times_4]" type="text" name="theme_options[formatted_opening_times_4]" value="<?php esc_attr_e( $options['formatted_opening_times_4'] ); ?>" />
       
    </div>
    <div class="inside">
       
      <?php //  Opening Times Friday  // ?>
      <label for="theme_options[opening_times_5]"><b><?php _e( 'Friday:' ); ?></b></label><br>
      <input id="theme_options[opening_times_5]" type="text" name="theme_options[opening_times_5]" value="<?php esc_attr_e( $options['opening_times_5'] ); ?>" />
       
      <?php //  Formatted Opening Times Friday  // ?>
      <label for="theme_options[formatted_opening_times_5]"><b><?php _e( 'Formatted Opening Times Friday' ); ?></b> <em>eg. Mo-Fr 08:00-17:00</em></label><br>
      <input id="theme_options[formatted_opening_times_5]" type="text" name="theme_options[formatted_opening_times_5]" value="<?php esc_attr_e( $options['formatted_opening_times_5'] ); ?>" />
       
    </div>
    <div class="inside">
       
      <?php //  Opening Times Saturday  // ?>
      <label for="theme_options[opening_times_6]"><b><?php _e( 'Saturday:' ); ?></b></label><br>
      <input id="theme_options[opening_times_6]" type="text" name="theme_options[opening_times_6]" value="<?php esc_attr_e( $options['opening_times_6'] ); ?>" />
       
      <?php //  Formatted Opening Times Saturday  // ?>
      <label for="theme_options[formatted_opening_times_6]"><b><?php _e( 'Formatted Opening Times Saturday' ); ?></b> <em>eg. Mo-Fr 08:00-17:00</em></label><br>
      <input id="theme_options[formatted_opening_times_6]" type="text" name="theme_options[formatted_opening_times_6]" value="<?php esc_attr_e( $options['formatted_opening_times_6'] ); ?>" />
       
    </div>
    <div class="inside">
       
      <?php //  Opening Times Sunday  // ?>
      <label for="theme_options[opening_times_7]"><b><?php _e( 'Sunday:' ); ?></b></label><br>
      <input id="theme_options[opening_times_7]" type="text" name="theme_options[opening_times_7]" value="<?php esc_attr_e( $options['opening_times_7'] ); ?>" />
       
      <?php //  Formatted Opening Times Sunday  // ?>
      <label for="theme_options[formatted_opening_times_7]"><b><?php _e( 'Formatted Opening Times Sunday' ); ?></b> <em>eg. Mo-Fr 08:00-17:00</em></label><br>
      <input id="theme_options[formatted_opening_times_7]" type="text" name="theme_options[formatted_opening_times_7]" value="<?php esc_attr_e( $options['formatted_opening_times_7'] ); ?>" />
       
    </div>
  </div>
   
  <?php //  [_3.5_] Social Media  // ?>
     
  <div id="postimgdiv" class="postbox">
    <h3 class="hndle">Social Media</h3>
   
    <div class="inside">
       
      <?php //  Maps Link  // ?>
      <label for="theme_options[maps_link]"><b><?php _e( 'Google Maps Link' ); ?></b></label><br>
      <input id="theme_options[maps_link]" type="text" name="theme_options[maps_link]" value="<?php esc_attr_e( $options['maps_link'] ); ?>" />
       
    </div>
 
    <hr>
     
    <div class="inside">
       
      <?php //  Google+ Page  // ?>
      <label for="theme_options[google_plus]"><b><?php _e( '<i class="fa fa-google-plus-square"></i> Google+ Page' ); ?></b></label><br>
      <input id="theme_options[google_plus]" type="text" name="theme_options[google_plus]" value="<?php esc_attr_e( $options['google_plus'] ); ?>" />
       
    </div>
      
    <hr>
      
    <div class="inside">
       
      <?php //  Facebook Page  // ?>
      <label for="theme_options[facebook]"><b><?php _e( 'Facebook Page' ); ?></b></label><br>
      <input id="theme_options[facebook]" type="text" name="theme_options[facebook]" value="<?php esc_attr_e( $options['facebook'] ); ?>" />
       
    </div>
      
    <hr>
      
    <div class="inside">
       
      <?php //  Twitter Page  // ?>
      <label for="theme_options[twitter]"><b><?php _e( 'Twitter Page' ); ?></b></label><br>
      <input id="theme_options[twitter]" type="text" name="theme_options[twitter]" value="<?php esc_attr_e( $options['twitter'] ); ?>" />
       
    </div>
      
    <hr>
      
    <div class="inside">
       
      <?php //  YouTube Page  // ?>
      <label for="theme_options[youtube]"><b><?php _e( 'YouTube Page' ); ?></b></label><br>
      <input id="theme_options[youtube]" type="text" name="theme_options[youtube]" value="<?php esc_attr_e( $options['youtube'] ); ?>" />
       
    </div>
      
    <hr>
      
    <div class="inside">
       
      <?php //  Instagram Page  // ?>
      <label for="theme_options[instagram]"><b><?php _e( 'Instagram Page' ); ?></b></label><br>
      <input id="theme_options[instagram]" type="text" name="theme_options[instagram]" value="<?php esc_attr_e( $options['instagram'] ); ?>" />
       
    </div>
  </div>
  
  <?php //  [_3.5_] Save/Submit Options  // ?>
  
  <p><input class="button button-primary button-large" name="submit" id="submit" value="Save Changes" type="submit"></p>
  </form>
  
</div>


<?php //  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_4_] Options Page Scripts (backend only)  // ?>


<script>
  jQuery(document).ready(function($) {
    $('.header_logo_upload').click(function(e) {
      e.preventDefault();
      
      var custom_uploader = wp.media({
        title: 'Custom Logo',
        button: {
          text: 'Upload Logo'
        },
        multiple: false  //  Set this to true to allow multiple files to be selected  //
      })
      .on('select', function() {
        var attachment = custom_uploader.state().get('selection').first().toJSON();
        $('.header_logo').attr('src', attachment.url);
        $('.header_logo_url').val(attachment.url);
        
      })
      .open();
    });
  });
</script>


<?php } //  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //


//  [_5_] Sanitise and Validate Options  //


function options_validate( $input ) {
  
  global $select_options, $radio_options;
  
  if ( ! isset( $input['option1'] ) )
    $input['option1'] = null;
    $input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );
    $input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );
  
  if ( ! isset( $input['radioinput'] ) )
    $input['radioinput'] = null;
  
  if ( ! array_key_exists( $input['radioinput'], $radio_options ) )
    $input['radioinput'] = null;
    $input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );
  
  return $input;
}