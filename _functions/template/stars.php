<?php 
//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  Function that prints star ratings for testimonials
//  

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

if ( ! function_exists( 'star_ratings' ) ) :

function star_ratings() {
  
  $star = get_field('star_rating');
					if (!empty($star)){
					echo '<span class="star-holder">';
					if ($star == 0) {}
					if ($star == 1) {
					echo ('<i class="fa fa-star"></i>'); 
					}
					if ($star == 2) {
					echo ('<i class="fa fa-star"></i><i class="fa fa-star"></i>'); 
					}
					if ($star == 3) {
					echo ('<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>'); 
					}
					if ($star == 4) {
					echo ('<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>'); 
					}
					if ($star == 5) {
					echo ('<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>'); 
					}
					echo '</span>';
					}
					else {}
	
}
  
endif;