<?php

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

//  This is the template part used for displaying content in 'single.php'

//  ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** ***** *****  //

?>
<?php
$post_image_id = get_post_thumbnail_id($post_to_use->ID);
		if ($post_image_id) {
			$thumbnail = wp_get_attachment_image_src( $post_image_id, 'slider_background_image', true);
			if ($thumbnail) (string)$thumbnail = $thumbnail[0];
		} ?>
		<?php if ( has_post_thumbnail() ) { ?>
	
<section class="section--whole home__slider">
    <div class="grid--full">
        <div class="grid__item--full">
        <div class="slider_narrow" style="background:transparent" data-parallax="scroll" data-image-src="<?php echo $thumbnail ?>">
            <div class="full_overlay">
                <div class="padding_box">
                    <div class="slider__heading"><?php the_title( '' ); ?><?php /* the_field('slider_page_title'); */?></div>
                    <?php if(is_page_template('_templates/page-home.php')){ ?>
                    <?php  } else {  ?>
                    <?php get_template_part('_partials/content', 'crumbs'); ?>
                    <?php } ?>
                </div>                    
            </div>
        </div>
        </div>
    </div>
</section>
<?php  } else {  ?>

<section class="section--whole home__slider">
    <div class="grid--full">
        <div class="grid__item--full">
        <?php $default = get_field('default_image', 'options'); ?>
        <div class="slider_narrow" style="background:transparent" data-parallax="scroll" data-image-src="<?php echo $default['sizes']['case-study-thumb']; ?>">
            <div class="full_overlay">
                <div class="padding_box">
                    <div class="slider__heading"><?php the_title( '' ); ?><?php /* the_field('slider_page_title'); */?></div>
                    <?php if(is_page_template('_templates/page-home.php')){ ?>
                    <?php  } else {  ?>
                    <?php get_template_part('_partials/content', 'crumbs'); ?>
                    <?php } ?>
                </div>                    
            </div>
        </div>
        </div>
    </div>
</section>


<?php } ?>

<section class="section--whole <?php if( !has_post_thumbnail()): echo 'margin-top'; else: endif; ?>">
<div class="container--xlarge">
	<div class="grid">
		<section class="with__aside">
		<div class="padding_box">
			<article class="article__post single__post">
			<?php the_title( '<h1>', '</h1>' ); ?>
			<?php the_content(); ?>
			<?php if ( comments_open() || '0' != get_comments_number() ) :

					//  Load the comment template if comments are open or if there is at least one comment  //

					comments_template();

				  endif; ?>

			<?php hobbes_posted_on(); ?>
			<?php hobbes_post_nav(); ?>
			</article>
        </div>
		</section><!--
		--><?php get_sidebar(); ?>
	</div>
</div>
</section>
