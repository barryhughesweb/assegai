<?php 

$loop = new WP_Query( array(
  'post_type' => 'case-studies',
  'posts_per_page' => 2,
  
)); 
  ?>
  <div class="case__studies__box">
  <div class="title">Our Case Studies</div>
  <div class="grid">
  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?><!--
     --><div class="grid__item--half">
	 			<div class="case__study">
				<?php
				if ( has_post_thumbnail() ) { ?>
				<div class="featured__image">
					<?php the_post_thumbnail('case-study-thumb'); ?>
				</div>	
				<?php } else {
					$default = get_field('default_image', 'options'); ?>
					<img src="<?php echo $default['sizes']['case-study-thumb']; ?>" alt="<?php echo $default['alt']; ?>">
				<?php } ?>
				<div class="title"><?php the_title(); ?></div>
				<p class="excerpt"><?php echo excerpt(35); ?></p>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="btn">Read More</a>
			</div>	
	 </div><!--
	 --><?php endwhile; ?>
  </div>
  </div>
<?php wp_reset_query(); ?>