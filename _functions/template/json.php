<?php
 
//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //
 
//  Function that calls the company information which is outputted via 'json',
//  including address, opening times, and phone number.
 
//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //
 
if ( ! function_exists( 'hobbes_json' ) ) :
 
function hobbes_json() {
   
  $options = get_option( 'theme_options' ); ?>
    
    <script type="application/ld+json"> 
      {
        "@context": "http://schema.org",
        "@type": <?php
            //  Address Line One  //
            if ( $options['schema_type'] != '' ) { 
              echo'"'. $options['schema_type'] .'",';
            }
            ?>
             
        "legalName": <?php
            //  Legal Company Name  //
            if ( $options['legal_name'] != '' ) { 
              echo'"'. $options['legal_name'] .'"';
            }
            ?>,
        "url": "<?php echo site_url();
        ?>",
<?php $logo = $options['custom_logo']; ?>
        "logo": "<?php echo $logo; ?>",
        "address": {
          "@type": "PostalAddress",
          <?php
            //  Address Line One  //
            if ( $options['address_street_1'] != '' ) { 
              echo'"streetAddress": "'. $options['address_street_1'] .', '. $options['address_street_2'] .'",
          ';
            }
 
            //  Town/City  //
            if ( $options['address_city'] != '' ) { 
              echo'"addressLocality": "'. $options['address_city'] .'",
          ';
            }
 
            //  County/State  //
            if ( $options['address_county'] != '' ) { 
              echo'"addressRegion": "'. $options['address_county'] .'",
          ';
            }
 
            //  Postcode/Zip  //
            if ( $options['address_postcode'] != '' ) { 
              echo'"postalCode": "'. $options['address_postcode'] .'"'
          ;
            }
          ?>
           
        },
        "telephone": <?php
            //  Opening Times Monday  //
            if ( $options['phone_number'] != '' ) { 
              echo'"'. $options['phone_number'] .'"';
            }
            ?>,
        "email": <?php
            //  Opening Times Monday  //
            if ( $options['company_email'] != '' ) { 
              echo'"'. $options['company_email'] .'';
            }
            ?>",
        "sameAs" : [
            <?php
            //  Facebook link  //
            if ( $options['facebook'] != '' ) { 
              echo'"'. $options['facebook'] .'",';
            }
            ?>
             
            <?php
            //  Google+ Link  //
            if ( $options['google_plus'] != '' ) { 
              echo'"'. $options['google_plus'] .'"';
            }
            ?>
            <?php /*
            //  Twitter Link  //
            if ( $options['twitter'] != '' ) { 
              echo'"'. $options['twitter'] .'",';
            }
            ?>
             
            <?php
            //  YouTube Link  //
            if ( $options['youtube'] != '' ) { 
              echo'"'. $options['youtube'] .'",';
            }
            ?>
             
            <?php
            //  Instagram Link  //
            if ( $options['instagram'] != '' ) { 
              echo'"'. $options['instagram'] .'"';
            }
            */?>
             
          ],
        "openingHours": [
          <?php
            //  Opening Times Monday  //
            if ( $options['opening_times'] != '' ) { 
              echo'"'. $options['formatted_opening_times'] .'"';
            }
            ?>
             
          <?php
            //  Opening Times Tuesday  //
            if ( $options['opening_times_2'] != '' ) { 
              echo',"'. $options['formatted_opening_times_2'] .'"';
            }
            ?>
             
          <?php
            //  Opening Times Wednesday  //
            if ( $options['opening_times_3'] != '' ) { 
              echo',"'. $options['formatted_opening_times_3'] .'"';
            }
            ?>
             
          <?php
            //  Opening Times Thursday  //
            if ( $options['opening_times_4'] != '' ) { 
              echo',"'. $options['formatted_opening_times_4'] .'"';
            }
            ?>
             
          <?php
            //  Opening Times Friday  //
            if ( $options['opening_times_5'] != '' ) { 
              echo',"'. $options['formatted_opening_times_5'] .'"';
            }
            ?>
             
          <?php
            //  Opening Times Saturday  //
            if ( $options['opening_times_6'] != '' ) { 
              echo',"'. $options['formatted_opening_times_6'] .'"';
            }
            ?>
             
          <?php
            //  Opening Times Sunday  //
            if ( $options['opening_times_7'] != '' ) { 
              echo',"'. $options['formatted_opening_times_7'] .'"';
            }
            ?>
             
        ],
        
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": <?php
            //  Latitude  //
            if ( $options['latitude'] != '' ) { 
              echo'"'. $options['latitude'] .'",';
            }
            ?>
            
          "longitude": <?php
            //  Longitude  //
            if ( $options['longitude'] != '' ) { 
              echo'"'. $options['longitude'] .'"';
            }
            ?>
             
        }

      }
    </script>
     
  <?php }
   
endif;