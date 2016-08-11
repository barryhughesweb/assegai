<section class="section--whole col_3_img_solution">
    <div class="container--xlarge">
        <div class="grid--full">
            <div class="grid__item--half--lap__whole fl">
                <div class="grid--full">
                    <div class="grid__item--whole">
                        <?php $img = get_field('quarter_image_1'); ?>
                        <div class="half_full_image" style="background-image:url('<?php echo $img['sizes']['half_full_image']; ?>')">
                            <img src="<?php echo $img['sizes']['half_full_image']; ?>" alt="<?php if($img['alt']) {
                            echo $img['alt'];
                            } else {
                            echo $img['title']; } ?>" />
                        </div>
                    </div><!--
                    --><div class="grid__item--whole">
                        <?php $img = get_field('quarter_image_2'); ?>
                        <div class="half_full_image" style="background-image:url('<?php echo $img['sizes']['quarter_image']; ?>')">
                            <img src="<?php echo $img['sizes']['quarter_image']; ?>" alt="<?php if($img['alt']) {
                            echo $img['alt'];
                            } else {
                            echo $img['title']; } ?>" />
                        </div>
                    </div>
                </div>
            </div><!--
            --><div class="grid__item--half--lap__whole fr">
                <div class="solutions">
                <div class="padding_box">
                    <?php if( get_field('h2') ): ?>
                        <h2><?php the_field('h2'); ?></h2>
                    <?php endif; ?>
                    <?php the_field('col_2'); ?>
                    <div class="solutions_title">
                        <?php the_field('solutions_title'); ?>
                    </div>
                    <a href="<?php the_field('solutions_link'); ?>" class="full_cta_button" title="<?php the_field('solutions_button'); ?>">
                        <?php the_field('solutions_button'); ?>
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>