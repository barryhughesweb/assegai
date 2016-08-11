<aside class="grid__item--third">

	<div class="padding_box">

		<div class="grid--full">
    <?php if ( is_active_sidebar( 'default-sidebar' ) ) : ?>

    <div class="widget"><?php //  Simply Add More Unique Widgets by adding another Widget grid item // ?>


    </div><!--

    --><?php dynamic_sidebar( 'default-sidebar' ); ?>

    <?php else :

      //  If there are no widgets set, then do all this stuff instead!  // ?>

      <div class="widget">
        <p class="widget__title"><?php _e( 'Archives', 'hobbes' ); ?></p>
        <ul>
          <?php wp_get_archives('type=monthly'); ?>
        </ul>
      </div><!--

      --><div class="widget">
        <p class="widget__title"><?php _e( 'Categories', 'hobbes' ); ?></p>
        <ul>
          <?php wp_list_categories('show_count=1&title_li='); ?>
        </ul>
      </div>

    <?php endif; ?>
		</div>

	</div>

</aside>  
  