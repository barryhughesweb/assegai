<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template for displaying the footer. It is used universally,
//  for all posts and page templates.
//
//  It contains the closing tags for <main> and for the opening .container div.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>
</div><?php //  .main__content end  // ?>


<footer>
  
    <div class="container--xlarge">
        <div class="grid">
        <div class="grid__item--whole footer-sitemap">
               <?php //  Calls wp_nav_menu function with our default settings to remove redundant markup  //
                
                hobbes_clean_nav('footer-menu','footer__nav'); ?>
            </div><!--
         --><div class="grid__item--quarter">
                <div class="heading"><span>Our Address</span></div>
                <ul>
                <?php $options = get_option( 'theme_options' ); ?>
     
      <?php
        //  Address Line One  //
		echo'<li class="company__name">'; bloginfo( 'name' ); echo'</li>';

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
            </div><!--
         --><div class="grid__item--quarter">
                <div class="heading"><span>Contact Us</span></div>
                <ul>
                    <li><?php hobbes_phone_number('T: '); ?></li>
                    <li><?php hobbes_mobile_number('M: '); ?></li>
                    <li><?php hobbes_email('E: '); ?></li>
                    <?php if ( $options['maps_link'] != '' ) { echo '<li><a href="'. $options['maps_link'] .'" target="_blank">Find us on Google Maps</a></li>'; } ?>
      				
              		<li>
                        <div class="footer_icons">
                            <?php hobbes_facebook(''); ?>
                            <?php hobbes_google_plus(''); ?>
                        </div>
                    </li>
               </ul>
            </div><!--
         --><div class="grid__item--quarter">
                <div class="heading"><span>Opening Times</span></div>
                    <ul>
                        <li>
                            <?php if ( $options['opening_times'] != '' ) { ?>
                                <?php $ot = $options['opening_times']; ?>

                                <?php echo $ot; ?>
                            <?php } ?>
                        </li>
                    </ul>
                    <?php //hobbes_opening_times(); ?>
                </div><!--
         --><div class="grid__item--quarter">
                <div class="heading"><span>Copyright</span></div>
                <ul>
                    <li>&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?></li>
                    <li><?php hobbes_company_number('Company No: '); ?></li>
                    <li><?php hobbes_vat_number('VAT No: '); ?></li>   
                    <li class="normal_text">Website by Web Design Optimum Ltd</li>
                </ul>
            </div>
        </div>
    </div>
  
</footer>

<?php wp_footer(); ?>

<!--[if lt IE 9]>
<script>svgeezy.init(false, 'png');</script>
<![endif]-->

</body>
</html>