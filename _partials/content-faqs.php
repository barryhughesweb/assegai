<?php if( have_rows('faqs') ): ?>
   <section class="section--whole main_col_image">
    <div class="container--xlarge">
        <div class="grid--full"><!--
            <?php while ( have_rows('faqs') ) : the_row(); ?>
            --><div class="grid__item--half--desk__whole">
                <div class="padding_box">
                    <h2><?php the_sub_field('faq_question'); ?></h2>
                    <?php the_sub_field('faq_answer'); ?>
                </div>
            </div><!--
            <?php endwhile; ?>
        --></div>
    </div>
</section>
<?php endif; ?>