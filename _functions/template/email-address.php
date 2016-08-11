<?php 

if ( ! function_exists( 'hobbes_email' ) ) :

function hobbes_email($string) {
	
$options = get_option( 'theme_options' );
	
$company_email = $options['company_email']; ?>
      
<p><?php _e( $string, 'hobbes' ); ?><a class="email" href="mailto:<?php echo $company_email; ?>"><?php echo $company_email; ?></a></p>
<?php 

}
endif;
