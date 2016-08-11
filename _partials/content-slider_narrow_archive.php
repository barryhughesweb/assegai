<section class="section--whole home__slider">
    <div class="grid--full">
    <?php $img = get_field('slider_background_image',8); ?>
        <div class="grid__item--full">
        <div class="slider_narrow" style="background:transparent" data-parallax="scroll" data-image-src="<?php echo $img['sizes']['slider_background_image']; ?>">
            <div class="full_overlay">
                <div class="padding_box">
                    <h1 class="slider__heading">
      <?php
        if ( is_category() ) :
          single_cat_title();
          
        elseif ( is_tag() ) :
          single_tag_title();
          
        elseif ( is_author() ) :
          printf( __( 'Author: %s', 'hobbes' ), '<span class="vcard">' . get_the_author() . '</span>' );
          
        elseif ( is_day() ) :
          printf( __( 'Day: %s', 'hobbes' ), '<span>' . get_the_date() . '</span>' );
          
        elseif ( is_month() ) :
          printf( __( 'Month: %s', 'hobbes' ), '<span>' . get_the_date( _x( 'F Y', 'monthly archives date format', 'hobbes' ) ) . '</span>' );
          
        elseif ( is_year() ) :
          printf( __( 'Year: %s', 'hobbes' ), '<span>' . get_the_date( _x( 'Y', 'yearly archives date format', 'hobbes' ) ) . '</span>' );
          
        elseif ( is_tax( 'post_format', 'post-format-aside' ) ) :
          _e( 'Asides', 'hobbes' );
          
        elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) :
          _e( 'Galleries', 'hobbes' );
          
        elseif ( is_tax( 'post_format', 'post-format-image' ) ) :
          _e( 'Images', 'hobbes' );
          
        elseif ( is_tax( 'post_format', 'post-format-video' ) ) :
          _e( 'Videos', 'hobbes' );
          
        elseif ( is_tax( 'post_format', 'post-format-quote' ) ) :
          _e( 'Quotes', 'hobbes' );
          
        elseif ( is_tax( 'post_format', 'post-format-link' ) ) :
          _e( 'Links', 'hobbes' );
          
        elseif ( is_tax( 'post_format', 'post-format-status' ) ) :
          _e( 'Statuses', 'hobbes' );
          
        elseif ( is_tax( 'post_format', 'post-format-audio' ) ) :
          _e( 'Audios', 'hobbes' );
          
        elseif ( is_tax( 'post_format', 'post-format-chat' ) ) :
          _e( 'Chats', 'hobbes' );

        else :
          _e( 'Archives', 'hobbes' );
          
        endif;
      ?></h1>
                    <?php if(is_page_template('_templates/page-home.php')){ ?>
                    <?php  } else {  ?>
                    <?php get_template_part('_partials/content', 'crumbs'); ?>
                    <?php } ?>
                </div>                    
            </div>
        </div>
        </div>
    </div>
</section>