<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template for displaying search results.

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

get_header(); ?>

<?php get_template_part('_partials/content', 'slider_narrow_archive_search'); ?>

<section class="section--whole">
	<div class="container--xlarge">
		<div class="grid">
			<div class="with__aside">
              <div class="padding_box">

			  <?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

				  <?php

				  //  Retrieves the relevant format for the template. Post format parts
				  //  can be found within the '_partials' folder.

				  get_template_part( '_partials/content', 'search' ); ?>

				<?php endwhile; ?>

				  <?php

				  //  Calls the pagenation function from '_default/template-tags.php'

				  hobbes_paging_nav(); ?>

				<?php else : ?>

				<?php get_template_part( '_partials/content', 'none' ); ?>

			  <?php endif; ?>

			</div></div><!-- 
			--><?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>