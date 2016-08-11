<?php $options = get_option( 'theme_options' ); 
	
		$fb_link = $options['facebook'];
		$twitter_link = $options['twitter'];
		$gplus_link = $options['google_plus'];

?>
<a href="<?php echo $fb_link;?>" class="social__icon facebook" target="_blank"><i class="fa fa-facebook-square"></i></a>
<a href="<?php echo $twitter_link;?>" class="social__icon twitter" target="_blank"><i class="fa fa-twitter-square"></i></a>
<a href="<?php echo $gplus_link;?>" class="social__icon gplus" target="_blank"><i class="fa fa-google-plus-square"></i></a>