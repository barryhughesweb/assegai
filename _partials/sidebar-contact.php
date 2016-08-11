<aside class="grid__item--half--lap__whole">

	<div class="padding_box">

		<div class="grid--full">
			<?php if(is_page_template('_templates/page-area.php')): ?>
			<div class="widget">
				<p class="widget__title">Local Map</p>
				<div class="map_iframe"><?php the_field('area_map'); ?></div>
			</div>
			<?php endif; ?>



			<?php if( !is_page_template( '_templates/page-area.php' )) { ?>
			<div class="grid__item--half--lap__whole widget">
                <div class="map_iframe"><?php the_field('premises_map','options'); ?></div>
			</div>
			<?php } ?>
			
			
			
                    <?php hobbes_full_schema(); ?>
     		

			<?php if(is_page_template( '_templates/page-area.php' )) { ?>
			<div class="widget">
				<?php $img = get_field('area_image'); ?>
				<img src="<?php echo $img['url']; ?>" alt="<?php if($img['alt']) {
				echo $img['alt'];
				} else {
				echo $img['title']; } ?>"/>
			</div>
			<?php } ?>
		</div>

	</div>

</aside>