<?php

//  Template Name: Meet The Team

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the default template for displaying pages as denoted by the
//  WordPress 'pages' post type.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

	<section class="section--whole team margin-top">
		<div class="container--xlarge">
			<div class="grid">
				<div class="grid__item--whole">
				<div class="crumbs">
					<?php if ( function_exists( 'yoast_breadcrumb' ) ) {
						yoast_breadcrumb();
					} ;?>
					</div>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
				
				<?php if( have_rows('team_members') ): ?>
    			<?php while ( have_rows('team_members') ) : the_row(); ?><!--
				--><div class="grid__item--quarter">
					<div class="team__member">
						<?php $img = get_sub_field('team_member_photo'); ?>
						<img src="<?php echo $img['sizes']['team_member_photo']; ?>" alt="<?php if($img['alt']) {
						echo $img['alt'];
						} else {
						echo $img['title']; } ?>"/>
						<div class="name"><?php the_sub_field('team_member_name'); ?></div>
						<div class="title"><?php the_sub_field('team_member_title'); ?></div>
						<div class="description">
							<?php the_sub_field('team_member_description'); ?>
						</div>
					</div>
				</div><!--
				--><?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>
			</div>
		</div>
</section>

<?php get_footer(); ?>