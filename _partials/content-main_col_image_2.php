<section class="section--whole main_col_image_2">
    <div class="container--xlarge">
        <div class="grid--full">
            <div class="grid__item--half--desk__whole">
                <?php $img = get_field('half_full_image_2'); ?>
                <div class="half_full_image" style="background-image:url('<?php echo $img['sizes']['half_full_image']; ?>')">
                    <img src="<?php echo $img['sizes']['half_full_image']; ?>" alt="<?php if($img['alt']) {
                    echo $img['alt'];
                    } else {
                    echo $img['title']; } ?>" />
                </div>
            </div><!--
            --><div class="grid__item--half--desk__whole">
                <div class="padding_box">
                    <div class="wrap_p">
                        <?php if ( get_field('h2') == true ) { ?>

                            <h2><?php the_field('h2'); ?></h2>
                            <?php } else { ?>

                        <?php } ?>
                        <?php the_field('col_2'); ?>
                    </div>
                    
                    <?php get_template_part('_partials/content', 'main_presenter'); ?> 
                </div>
            </div>
        </div>
    </div>
</section>