<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that prints a clickable phone number as spcified in the global
//  options page

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_phone_number' ) ) :

function hobbes_phone_number($string) {
  
  $options = get_option( 'theme_options' );
  
  if ( $options['phone_number'] != '' ) {
    
    $tel_number = $options['phone_number'];
    $tel_meta = str_replace( " ", "", $tel_number ); ?>
    
    <p><?php _e( $string, 'hobbes' ); ?><a class="telephone__number" href="tel:<?php echo $tel_meta; ?>" onclick="ga('link', 'click', 'Telephone Number - <?php the_title(); ?>');"><?php echo $tel_number; ?></a></p>
    
  <?php } }
  
endif;

if ( ! function_exists( 'hobbes_phone_number_2' ) ) :

function hobbes_phone_number_2($string) {
  
  $options = get_option( 'theme_options' );
  
  if ( $options['phone_number'] != '' ) {
    
    $tel_number = $options['phone_number'];
    $tel_meta = str_replace( " ", "", $tel_number ); ?>
    
<?php _e( $string, 'hobbes' ); ?><a class="telephone__number icon" href="tel:<?php echo $tel_meta; ?>" onclick="ga('link', 'click', 'Telephone Number - <?php the_title(); ?>');"><i class="fa fa-phone"></i></a>
    
  <?php } }
  
endif;

if ( ! function_exists( 'hobbes_phone_number_3' ) ) :

function hobbes_phone_number_3($string) {
  
  $options = get_option( 'theme_options' );
  
  if ( $options['phone_number'] != '' ) {
    
    $tel_number = $options['phone_number'];
    $tel_meta = str_replace( " ", "", $tel_number ); ?>
    
<?php _e( $string, 'hobbes' ); ?><a class="telephone__number full_cta_button" href="tel:<?php echo $tel_meta; ?>" onclick="ga('link', 'click', 'Telephone Number - <?php the_title(); ?>');">Call <?php echo $tel_number; ?></a>
    
  <?php } }
  
endif;

if ( ! function_exists( 'hobbes_mobile_number' ) ) :

function hobbes_mobile_number($string) {
  
  $options = get_option( 'theme_options' );
  
  if ( $options['mobile_number'] != '' ) {
    
    $tel_number = $options['mobile_number'];
    $tel_meta = str_replace( " ", "", $tel_number ); ?>
    
    <p><?php _e( $string, 'hobbes' ); ?><a class="telephone__number" href="tel:<?php echo $tel_meta; ?>" onclick="ga('link', 'click', 'Mobile Number - <?php the_title(); ?>');"><?php echo $tel_number; ?></a></p>
    
  <?php } }
  
endif;



/* UNCOMMENT, EDIT AND DUPLICATE THIS SECTION TO ADD AREA NUMBERS
if ( ! function_exists( 'hobbes_area1_number' ) ) :

function hobbes_area1_number($string) {
  
  $options = get_option( 'theme_options' );
  
  if ( $options['area1_number'] != '' ) {
    
    $tel_number = $options['area1_number'];
    $tel_meta = str_replace( " ", "", $tel_number ); ?>
    
    <p><?php _e( $string, 'hobbes' ); ?><a class="telephone__number" href="tel:<?php echo $tel_meta; ?>" onclick="ga('send', 'event', 'link', 'click', 'Telephone Number');"><?php echo $tel_number; ?></a></p>
    
  <?php } }
  
endif; 
*/