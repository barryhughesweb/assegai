<?php if (is_page('Bedford')) {
    $areaid = '18';
 } if(is_page('Hemel Hempstead')) {
    $areaid = '20';
 } if(is_page('Leighton Buzzard')) {
    $areaid = '19';
 } if(is_page('Milton Keynes')) {
    $areaid = '21';
 } if(is_page('Newport Pagnell')) {
    $areaid = '5';
 } if(is_page('Northampton')) {
    $areaid = '22';
 } if(is_page('St Albans')) {
    $areaid = '23';
 } ?>
	<?php 
	$loop = new WP_Query( array(
	  'post_type' => 'testimonials',
	  'posts_per_page' => 5,
	  'tax_query' => array(
		  array(
			  'taxonomy' => 'testimonial_categories',
			  'field' => 'id',
			  'terms' => $areaid
		  )
		)
	)); 
	  ?>
  <div class="testimonials__box">
      <div class="quotes">
          <div class="full_overlay">
              <div class="padding_box">
                  <div class="title">Our <?php the_title(); ?> Reviews</div>
                  <div class="cycle-slideshow" data-cycle-timeout="10000" data-cycle-slides="> blockquote">
                  <div class="cycle-pager"></div>
                  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <blockquote>
                                <div class="star-rating"><?php star_ratings(); ?></div>
                                <q class="excerpt"><?php echo excerpt(35); ?></q>
                                <?php /*<cite class="name"><?php the_field('name'); ?></cite>*/ ?>
                                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn">Read More</a>
                            </blockquote>	


                  <?php endwhile; ?>
                  </div>
              </div>
          </div>
      </div>
  </div>
<?php wp_reset_query(); ?>