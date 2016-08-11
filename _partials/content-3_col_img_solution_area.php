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
                <div class="useful_links">
                <div class="padding_box">
                    <div class="solutions_title">
                        <?php the_field('useful_links_main_title'); ?>
                    </div>
                    <div class="grid"><!--
                        <?php if(have_rows(/* name of custom field*/ 'useful_links')) { ?>
                            <?php while(have_rows('useful_links')) { the_row(); ?>
                            --><div class="grid__item--half--desk__whole">
                                <div class="useful_box">
                                    <div class="useful_title"><?php the_sub_field('useful_links_title'); ?></div>
                                    <?php the_sub_field('useful_links_description'); ?>
                                    <a href="<?php the_sub_field('useful_links_button_link'); ?>" class="full_cta_button" title="<?php the_sub_field('useful_links_button'); ?>" target="_blank" rel="nofollow">
                                        <?php the_sub_field('useful_links_button'); ?>
                                    </a>
                                </div>
                            </div><!--
                            <?php } //end while ?>
                        <?php } //endif ?>
                    --></div>
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