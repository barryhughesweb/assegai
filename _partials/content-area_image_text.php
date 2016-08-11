<section class="section--whole main_col_image_2">
    <div class="container--xlarge">
        <div class="grid--full">
            <div class="grid__item--half--desk__whole">

               
<?php if (is_page('Bedford')) {
    $areaid = '24';
 } if(is_page('Hemel Hempstead')) {
    $areaid = '25';
 } if(is_page('Leighton Buzzard')) {
    $areaid = '26';
 } if(is_page('Milton Keynes')) {
    $areaid = '27';
 } if(is_page('Newport Pagnell')) {
    $areaid = '28';
 } if(is_page('Northampton')) {
    $areaid = '29';
 } if(is_page('St Albans')) {
    $areaid = '30';
 } ?>
	<?php 
	$loop = new WP_Query( array(
	  'post_type' => 'case-studies',
	  'posts_per_page' => 1,
	  'tax_query' => array(
		  array(
			  'taxonomy' => 'case_study_categories',
			  'field' => 'id',
			  'terms' => $areaid
		  )
		)
	)); 
	  ?>
               
               
                
                  <div class="case__studies__box">
                  <div class="grid--full">
                  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?><!--
                     --><div class="grid__item--half--lap__whole">
                                <div class="case__study">
                                    <div class="padding_box">
                                        <div class="widget__title">Latest Case Study</div>
                                        <div class="title"><?php the_title(); ?></div>
                                        <p class="excerpt"><?php echo excerpt(35); ?></p>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn">Read More</a>
                                    </div>
                            </div>	
                     </div><!--
                     --><div class="grid__item--half--lap__whole">
                                <?php
                                $post_image_id = get_post_thumbnail_id($post_to_use->ID);
                                        if ($post_image_id) {
                                            $thumbnail = wp_get_attachment_image_src( $post_image_id, 'quarter_image', true);
                                            if ($thumbnail) (string)$thumbnail = $thumbnail[0];
                                        } ?>
                                        <?php if ( has_post_thumbnail() ) { ?>
                                <div class="half_full_image" style="background-image: url('<?php echo $thumbnail; ?>');">
                                    <?php the_post_thumbnail('quarter_image'); ?>
                                </div>	
                                <?php } else {
                                    $default = get_field('default_image', 'options'); ?>
                                    <img src="<?php echo $default['sizes']['case-study-thumb']; ?>" alt="<?php echo $default['alt']; ?>">
                                <?php } ?>
                     </div><!--
                     --><?php endwhile; ?>
                  </div>
                  </div>
                <?php wp_reset_query(); ?>
           
            </div><!--
            --><div class="grid__item--half--desk__whole">
                <div class="solutions">
                <div class="padding_box">
                    <?php if ( get_field('h2') == true ) { ?>

                        <h2><?php the_field('h2'); ?></h2>
                        <?php } else { ?>
                        <h2><?php the_title(); ?></h2>

                    <?php } ?>
                    <?php the_field ('col_2')?>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>