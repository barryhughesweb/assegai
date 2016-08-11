<?php if( have_rows('brands', 'option') ): ?>
   <section class="section--whole brands">
    <div class="container--xlarge">
 	<?php while ( have_rows('brands', 'option') ) : the_row();?><!--
        --><div class="grid__item--seventh brand">
        <?php $image = get_sub_field('brand');
if( !empty($image) ): ?>
	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
<?php endif; ?>
		</div><!--
   --><?php endwhile; ?>
    </div>
</section>  
 
<?php else :

    // no rows found

endif;

?>