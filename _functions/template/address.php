<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that calls prints the address as per 'schema.org' recommendation.
//  The address is set in the Global settings menu of the admin panel.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_address' ) ) :

function hobbes_address() {
  
  $options = get_option( 'theme_options' ); ?>
    
    <ul class="address">
     
      <?php
        //  Address Line One  //
        if ( $options['address_street_1'] != '' ) { 
          echo'<li>'. $options['address_street_1'] .'&nbsp;</li>';
        }
        
        //  Address Line Two  //
        if ( $options['address_street_2'] != '' ) { 
          echo'<li>'. $options['address_street_2'] .'&nbsp;</li>'; 
        }
        
        //  Town/City  //
        if ( 
          $options['address_city'] != '' ) { echo'<li>'. $options['address_city'] .'&nbsp;</li>';
        }
        
        //  County/State  //
        if ( $options['address_county'] != '' ) { 
          echo'<li>'. $options['address_county'] .'&nbsp;</li>';
        }
        
        //  Postcode/Zip  //
        if ( $options['address_postcode'] != '' ) { 
          echo'<li>'. $options['address_postcode'] .'&nbsp;</li>';
        }
      ?>
     
    </ul>
    
  <?php }
endif;