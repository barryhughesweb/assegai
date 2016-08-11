<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template part used for displaying content.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>

<article class="article__post">
<div class="grid">
	<div class="grid__item--third news__image">
	<a class="no__border" href="<?php the_permalink(); ?>">
		<?php 
		if ( has_post_thumbnail() ) {
			the_post_thumbnail('news_image');
		} else {
			$default = get_field('default_image', 'options'); ?>
			<img src="<?php echo $default['sizes']['case-study-thumb']; ?>" alt="<?php echo $default['alt']; ?>">
		<?php } ?>
	</a>	
	</div><!--
	--><div class="grid__item--two__thirds">
		<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<a href="<?php the_permalink(); ?>" class="grey__link"><p><?php echo excerpt(50) ?></p></a>
		<a href="<?php the_permalink(); ?>" class="read__more"> Read More</a>
	</div><!--
	--><div class="grid__item--whole">
  		<?php hobbes_posted_on(); ?>
	</div>
</div>

</article>


