<section class="section--whole message_reviews">
    <div class="container--xlarge">
        <div class="grid--full">
            <div class="grid__item--half--desk__whole">
                <?php $img = get_field('encourage_image'); ?>
                <div class="half_full_image" style="background-image:url('<?php echo $img['sizes']['half_full_image']; ?>')">
                    <img src="<?php echo $img['sizes']['half_full_image']; ?>" alt="<?php if($img['alt']) {
                    echo $img['alt'];
                    } else {
                    echo $img['title']; } ?>" />
                </div>
                <div class="encourage_message"><?php the_field('encourage_text'); ?></div>
            </div><!--
            --><div class="grid__item--half--desk__whole">
                <?php get_template_part('_partials/content', 'testimonials'); ?>
            </div>
        </div>
    </div>
</section>