<section class="section--whole col_3_img_solution">
    <div class="container--xlarge">
        <div class="grid--full">
            <div class="grid__item--quarter--lap__whole">
                <?php $img = get_field('quarter_image_1'); ?>
                <div class="half_full_image" style="background-image:url('<?php echo $img['sizes']['quarter_image']; ?>')">
                    <img src="<?php echo $img['sizes']['quarter_image']; ?>" alt="<?php if($img['alt']) {
                    echo $img['alt'];
                    } else {
                    echo $img['title']; } ?>" />
                </div>
            </div><!--
            --><div class="grid__item--half--lap__whole">
                <div class="solutions">
                <div class="padding_box">
                    <?php $img = get_field('solutions_image'); ?>
                    <img src="<?php echo $img['sizes']['solutions_image']; ?>" alt="<?php if($img['alt']) {
                    echo $img['alt'];
                    } else {
                    echo $img['title']; } ?>" />
                    <div class="solutions_title">
                        <?php the_field('solutions_title'); ?>
                    </div>
                    <a href="<?php the_field('solutions_link'); ?>" class="full_cta_button" title="<?php the_field('solutions_button'); ?>">
                        <?php the_field('solutions_button'); ?>
                    </a>
                </div>
                </div>
            
            </div><!--
            --><div class="grid__item--quarter--lap__whole">
                <?php $img = get_field('quarter_image_2'); ?>
                <div class="half_full_image" style="background-image:url('<?php echo $img['sizes']['quarter_image']; ?>')">
                    <img src="<?php echo $img['sizes']['quarter_image']; ?>" alt="<?php if($img['alt']) {
                    echo $img['alt'];
                    } else {
                    echo $img['title']; } ?>" />
                </div>
            </div>
        </div>
    </div>
</section>