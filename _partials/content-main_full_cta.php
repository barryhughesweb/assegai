<section class="section--whole main_full_cta">
    <div class="container--xlarge">
        <div class="grid">
            <div class="grid__item--whole">

               <?php $mode = get_field('cta_full_toggle'); ?>
                <?php if ($mode == "phone_number") { ?>
                    <?php $img = get_field('cta_full_background_image'); ?>
                    <div class="full_image_background" style="background:transparent" data-parallax="scroll" data-image-src="<?php echo $img['sizes']['full_image_background']; ?>">
                        <div class="full_overlay">
                            <div class="full_cta_title"><?php the_field('cta_full_background_text'); ?></div>
                            <?php hobbes_phone_number_3(); ?>
                        </div>
                    </div>
                <?php } else { ?>
                    <?php $img = get_field('cta_full_background_image'); ?>
                    <div class="full_image_background" style="background:transparent" data-parallax="scroll" data-image-src="<?php echo $img['sizes']['full_image_background']; ?>">
                        <div class="full_overlay">
                            <div class="full_cta_title"><?php the_field('cta_full_background_text'); ?></div>
                            <a href="<?php the_field('cta_full_background_link'); ?>" class="full_cta_button">
                                <?php the_field('cta_full_background_button'); ?>
                            </a>
                        </div>
                    </div>
                <?php } ?>
                
            </div>
        </div>
    </div>
</section>