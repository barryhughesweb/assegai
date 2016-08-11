<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that calls prints company information as per 'schema.org',
//  including address, opening times, and phone number.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'hobbes_opening_times' ) ) :

function hobbes_opening_times() {
  
  $options = get_option( 'theme_options' ); ?>
    
    <?php if ( $options['opening_times'] != '' ) { ?>
    <?php $ot = $options['opening_times'];
        $fot = $options['formatted_opening_times']; ?>
    
    <ul class="opening-times">
      <?php if ( $options['opening_times'] != '' ) { ?>
      <li>
        
        <?php $ot = $options['opening_times'];
        $fot = $options['formatted_opening_times']; ?>
        
        Monday: <span><?php echo $ot; ?></span>
        
      </li>
      <?php } ?>
      <?php if ( $options['opening_times_2'] != '' ) { ?>
      <li>
        
        <?php $ot = $options['opening_times_2'];
        $fot = $options['formatted_opening_times_2']; ?>
        
        Tuesday: <span><?php echo $ot; ?></span>
        
      </li>
      <?php } ?>
      <?php if ( $options['opening_times_3'] != '' ) { ?>
      <li>
        
        <?php $ot = $options['opening_times_3'];
        $fot = $options['formatted_opening_times_3']; ?>
        
        Wednesday: <span><?php echo $ot; ?></span>
        
      </li>
      <?php } ?>
      <?php if ( $options['opening_times_4'] != '' ) { ?>
      <li>
        
        <?php $ot = $options['opening_times_4'];
        $fot = $options['formatted_opening_times_4']; ?>
        
        Thursday: <span><?php echo $ot; ?></span>
        
      </li>
      <?php } ?>
      <?php if ( $options['opening_times_5'] != '' ) { ?>
      <li>
        
        <?php $ot = $options['opening_times_5'];
        $fot = $options['formatted_opening_times_5']; ?>
        
        Friday: <span><?php echo $ot; ?></span>
        
      </li>
      <?php } ?>
      <?php if ( $options['opening_times_6'] != '' ) { ?>
      <li>
        
        <?php $ot = $options['opening_times_6'];
        $fot = $options['formatted_opening_times_6']; ?>
        
        Saturday: <span><?php echo $ot; ?></span>
        
      </li>
      <?php } ?>
      <?php if ( $options['opening_times_7'] != '' ) { ?>
      <li>
        
        <?php $ot = $options['opening_times_7'];
        $fot = $options['formatted_opening_times_7']; ?>
        
        Sunday: <span><?php echo $ot; ?></span>
        
      </li>
      <?php } ?>
</ul>
    <?php } ?>  
    
  <?php }
  
endif;