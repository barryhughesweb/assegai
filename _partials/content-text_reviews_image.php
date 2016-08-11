<section class="section--whole map_accreditations">
    <div class="container--xlarge">
        <div class="grid--full">
            <div class="grid__item--quarter--portable__half">
                <?php $img = get_field('quarter_image_3'); ?>
                <div class="half_full_image" style="background-image:url('<?php echo $img['sizes']['quarter_image']; ?>')">
                    <img src="<?php echo $img['sizes']['quarter_image']; ?>" alt="<?php if($img['alt']) {
                    echo $img['alt'];
                    } else {
                    echo $img['title']; } ?>" />
                </div>
            </div><!--
            --><div class="grid__item--quarter--portable__half">
                <?php get_template_part('_partials/content', 'testimonials'); ?>
            </div><!--
            --><div class="grid__item--half--desk__whole">
                <div class="solutions">
                <div class="padding_box">
                    <?php if ( get_field('h2_2nd') == true ) { ?>

                        <h2><?php the_field('h2_2nd'); ?></h2>
                        <?php } else { ?>

                    <?php } ?>
                    <?php the_field('col_3'); ?>
                    <a href="<?php the_field('col_3_button_link'); ?>" class="full_cta_button" title="<?php the_field('col_3_button_text'); ?>">
                        <?php the_field('col_3_button_text'); ?>
                    </a>
                </div>
                </div>
            
            </div>
        </div>
    </div>
</section>









