<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that calls prints company information as per 'schema.org',
//  including address, opening times, and phone number.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_area_details' ) ) :

function hobbes_area_details() {
  
  $options = get_option( 'theme_options' ); ?>
    
<div class="grid--wide">
    <div class="grid__item--half--lap__whole widget">
       <div class="padding_box">
        <p class="widget__title">Contact Information</p>

     <div class="grid--full">
     <div class="grid__item--half--lap__whole">
      <p>
          <?php if ( $options['legal_name'] != '' ) { 

            echo ''. $options['legal_name'] .'';

          } ?>
      </p>
      <p>
        
        <?php
          //  Address Line One  //
          if ( $options['address_street_1'] != '' ) { 
            echo'<span>'. $options['address_street_1'] .'</span><br>';
          }

          //  Address Line Two  //
          if ( $options['address_street_2'] != '' ) { 
            echo'<span>'. $options['address_street_2'] .'</span><br>'; 
          }

          //  Town/City  //
          if ( $options['address_city'] != '' ) { 
            echo'<span>'. $options['address_city'] .'</span><br>';
          }

          //  County/State  //
          if ( $options['address_county'] != '' ) { 
            echo'<span>'. $options['address_county'] .'</span><br>';
          }

          //  Postcode/Zip  //
          if ( $options['address_postcode'] != '' ) { 
            echo'<span>'. $options['address_postcode'] .'</span>';
          }
        ?>
      </p>
     </div><!--
     --><div class="grid__item--half--lap__whole">
         <?php $tel_number = $options['phone_number'];
      $tel_meta = str_replace( " ", "", $tel_number ); ?>
        
      <p>Telephone: <a href="tel:<?php echo $tel_meta; ?>" onclick="ga('link', 'click', 'Telephone Number - <?php the_title(); ?>');"><?php echo $tel_number; ?></a></p>
    
    <?php if ( $options['mobile_number'] != '' ) { ?>
      <?php $mob_number = $options['mobile_number'];
      $mob_meta = str_replace( " ", "", $mob_number ); ?>
        
      <p>Mobile: <a href="tel:<?php echo $mob_meta; ?>" onclick="ga('link', 'click', 'Mobile Number - <?php the_title(); ?>');"><?php echo $mob_number; ?></a></p>
        <?php } ?>
    
      
      <?php if ( $options['opening_times'] != '' ) { ?>
        
    
<!--        <p class="widget__title">Opening Times</p>-->
        <?php if ( $options['opening_times'] != '' ) { ?>
    <?php $ot = $options['opening_times']; ?>
    
    
    <p class="address__list">
      <?php if ( $options['opening_times'] != '' ) { ?>
        <?php $ot = $options['opening_times']; ?>
        
        <?php echo $ot; ?>
        
      <?php } ?>
      
      <?php /* if ( $options['opening_times'] != '' ) { ?>
        <?php $ot = $options['opening_times']; ?>
        
        Monday: <span><?php echo $ot; ?></span>
        
      <?php } */?>
        
      <?php if ( $options['opening_times_2'] != '' ) { ?>
      <br>
        
        <?php $ot = $options['opening_times_2']; ?>
        
        Tuesday: <span><?php echo $ot; ?></span>
        
      <?php } ?>
      <?php if ( $options['opening_times_3'] != '' ) { ?>
      <br>
        
        <?php $ot = $options['opening_times_3']; ?>
        
        Wednesday: <span><?php echo $ot; ?></span>
        
      <?php } ?>
      <br>
      <?php if ( $options['opening_times_4'] != '' ) { ?>
        
        <?php $ot = $options['opening_times_4']; ?>
        
        Thursday: <span><?php echo $ot; ?></span>
        
      <?php } ?>
      <?php if ( $options['opening_times_5'] != '' ) { ?>
        
      <br>
        <?php $ot = $options['opening_times_5']; ?>
        
        Friday: <span><?php echo $ot; ?></span>
        
      <?php } ?>
      <?php if ( $options['opening_times_6'] != '' ) { ?>
      <br>
        
        <?php $ot = $options['opening_times_6']; ?>
        
        Saturday: <span><?php echo $ot; ?></span>
        
      <?php } ?>
      <?php if ( $options['opening_times_7'] != '' ) { ?>
      <br>
        
        <?php $ot = $options['opening_times_7']; ?>
        
        Sunday: <span><?php echo $ot; ?></span>
        
      <?php } ?>
            <?php if ( $options['maps_link'] != '' ) { 
        
        echo '<a href="'. $options['maps_link'] .'" target="_blank">Find us on Google Maps</a><br>';
        
      } ?>
    </p>
    <?php } ?> 
        
      <?php } ?>
      

      </div>
     </div>

        
      
      
        <div class="social__icons">
            <?php hobbes_facebook_2(); ?>
            <?php hobbes_google_plus_2(); ?>
        </div>
        </div>
    </div>
</div>
    
  <?php }
  
endif;