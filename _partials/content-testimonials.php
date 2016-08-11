<?php 

$loop = new WP_Query( array(
  'post_type' => 'Testimonials',
  'posts_per_page' => 10,
  
)); 
  ?>
  <div class="testimonials__box">
      <div class="quotes">
          <div class="full_overlay">
              <div class="padding_box">
                  <div class="title">Our Customer Reviews</div>
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