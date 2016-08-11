<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template part used for displaying testimonials.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<article class="article__post">
<div class="grid">
	<div class="grid__item--whole">
		<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php echo the_content(); ?>
		<div class="name"><?php the_field('name'); ?></div>
		<div class="stars"><?php star_ratings(); ?></div>
	</div><!--
	--><div class="grid__item--whole">
  		<?php hobbes_posted_on(); ?>
	</div>
</div>

</article>


