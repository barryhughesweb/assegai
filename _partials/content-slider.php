<?php if( have_rows('slider') ): ?>
<section class="section--whole home__slider">
    <div class="grid--full">
    <?php while ( have_rows('slider') ) : the_row(); ?>
    <?php $img = get_sub_field('slider_background_image'); ?>
        <div class="grid__item--half--lap__whole slider_left">
            <div class="full_overlay">
                <div class="padding_box">
                    <div class="slider__heading"><?php the_sub_field('slider_heading'); ?></div>
                    <div class="slider__message"><?php the_sub_field('slider_message'); ?></div>
                    <a href="<?php the_sub_field('button_link'); ?>" class="full_cta_button">
                        <?php the_sub_field('button_text'); ?>
                    </a>
                    <?php hobbes_phone_number_3(); ?>
                </div>                    
            </div>
        </div><!--
        --><div class="grid__item--half--lap__whole slider_right" style="background-image:url('<?php echo $img['sizes']['slider_background_image']; ?>')">
            <div class="slider_line">
                
            </div>
            <div class="full_overlay"></div>
        </div>
    <?php endwhile; ?>
    </div>
</section>
<?php endif; ?>