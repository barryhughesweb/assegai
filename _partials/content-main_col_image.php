<section class="section--whole main_col_image">
    <div class="container--xlarge">
        <div class="grid--full">
            <div class="grid__item--half--desk__whole">
                <div class="padding_box">         
                    <?php if ( get_field('h1') == true ) { ?>

                        <h1><?php the_field('h1'); ?></h1>
                        <?php } else { ?>
                        <h1><?php the_title(); ?></h1>

                    <?php } ?>
                    <?php the_content(''); ?>
                </div>
            </div><!--
            --><div class="grid__item--half--desk__whole">
                <?php $img = get_field('half_full_image'); ?>
                <div class="half_full_image" style="background-image:url('<?php echo $img['sizes']['half_full_image']; ?>')">
                    <img src="<?php echo $img['sizes']['half_full_image']; ?>" alt="<?php if($img['alt']) {
                    echo $img['alt'];
                    } else {
                    echo $img['title']; } ?>" />
                </div>
            </div>
        </div>
    </div>
</section>