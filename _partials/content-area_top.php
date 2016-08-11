<section class="section--whole area_top">
    <div class="container--xlarge">
        <div class="grid--full">
            <div class="grid__item--half--desk__whole">
                <div class="solutions">
                <main class="padding_box">
                    <?php if ( get_field('h1') == true ) { ?>

                        <h1><?php the_field('h1'); ?></h1>
                        <?php } else { ?>
                        <h1><?php the_title(); ?></h1>

                    <?php } ?>
                    <?php the_content(); ?>
                    <a href="<?php the_field('col_3_button_link'); ?>" class="full_cta_button" title="<?php the_field('col_3_button_text'); ?>">
                        <?php the_field('col_3_button_text'); ?>
                    </a>
                    <?php hobbes_phone_number_3(); ?>
                </main>
                </div>
            
            </div><!--
            --><div class="grid__item--quarter--portable__half">
                <div class="grid--full">
                    <div class="grid__item--whole">
                        <?php hobbes_area_details(); ?>
                    </div><!--
                    --><div class="grid__item--whole">
                        <?php get_template_part('_partials/content', 'area-testimonials'); ?>
                    </div>
                </div>
            </div><!--
            --><div class="grid__item--quarter--portable__half">
                <div class="grid--full">
                    <div class="grid__item--whole">
                        <div id="map-canvas"></div>
                    </div><!--
                    --><div class="grid__item--whole">
                        <?php $img = get_field('area_image'); ?>
                        <div class="half_full_image" style="background-image:url('<?php echo $img['sizes']['quarter_image']; ?>')">
                           <?php //print_r($img);?>
                            <img src="<?php echo $img['url']; ?>" <?php /*title="<?php echo $img['title']; ?>" */?> alt="<?php if($img['alt']) {
                    echo $img['alt'];
                    } else {
                    echo $img['title']; } ?>" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>









