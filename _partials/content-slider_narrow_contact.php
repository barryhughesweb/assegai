<section class="section--whole home__slider">
    <div class="grid--full">
    <?php $img = get_field('slider_background_image',8); ?>
        <div class="grid__item--full">
        <div class="slider_narrow" style="background:transparent" data-parallax="scroll" data-image-src="<?php echo $img['sizes']['slider_background_image']; ?>">
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