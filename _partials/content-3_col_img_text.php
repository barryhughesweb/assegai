<section class="section--whole col_3_img_solution">
    <div class="container--xlarge">
        <div class="grid--full">
            <div class="grid__item--half--lap__whole">
                <div class="grid--full">
                    <div class="grid__item--half--lap__whole">
                        <div class="accred_message">
                            <?php the_field('accreditations_title', 'options'); ?>
                        </div>
                    </div><!--
                    <?php if(have_rows(/* name of custom field*/ 'accreditations_icons', 'options')) { ?>
                    --><div class="grid__item--half--lap__whole">
                       <div class="grid--full accreditations"><!--
                        
                            <?php while(have_rows('accreditations_icons', 'options')) { the_row(); ?>
                                --><div class="grid__item--third">
                                    <?php $img = get_sub_field('accreditations_icons_list', 'options'); ?>
                                    <img src="<?php echo $img['url']; ?>" alt="<?php if($img['alt']) {
                                    echo $img['alt'];
                                    } else {
                                    echo $img['title']; } ?>"/>
                                </div><!--
                            <?php } //end while ?>
                        
                    --></div></div><!--
                    <?php } //endif ?>
                    --><div class="grid__item--whole">
                        <div class="grid--full why_list">
                            <div class="padding_box"><!--

                            <?php while(have_rows('why_list')) { the_row(); ?>
                                --><div class="grid__item--half">
                                    <?php the_sub_field('why_list_1'); ?>
                                </div><!--
                            <?php } //end while ?>
                            <?php if( get_field('why_list_last') ){ ?>
                            --><div class="grid__item--whole why_list_full">
                                <?php the_field('why_list_last'); ?>
                            </div><!--
                            <?php  } else {  ?>
                    
                            <?php } ?>
                            --></div>
                        </div>
                    </div>
                
                </div>
            </div><!--
            --><div class="grid__item--half--lap__whole">
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