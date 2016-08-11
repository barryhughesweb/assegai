<?php if( have_rows('tabs', 'options') ): ?>
<section class="section--whole tabs">
    <div class="container--xlarge">
        <div class="grid--full"><!--
            <?php while ( have_rows('tabs', 'options') ) : the_row(); ?>
            --><a class="grid__item--fifth" href="<?php the_sub_field('tabs_link', 'options'); ?>" title="<?php the_sub_field('tabs_text', 'options'); ?>">
                <div class="tabs_box">
                    <?php $image = get_sub_field('tabs_icon', 'options');
                        if( !empty($image) ): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <?php endif; ?>
                    <span><?php the_sub_field('tabs_text', 'options'); ?></span>
                </div>
            </a><!--
            <?php endwhile; ?>
        --></div>
    </div>
</section>
<?php endif; ?>