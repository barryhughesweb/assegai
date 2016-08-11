<div class="video-holder">
	<?php if(strpos($_SERVER['HTTP_USER_AGENT'], "iPhone") || strpos($_SERVER['HTTP_USER_AGENT'], "iPad")) { ?>
    <div id="video-overlay" class="button"></div>
    <script>

		
$('#video-overlay').click(function() {
	$(".button").toggleClass('hidden');
  if (document.getElementById('video').paused == false) {
      document.getElementById('video').pause();
	  
  } else {
      document.getElementById('video').play();
  }
});
		
		
		
</script>
<video id="video" poster="/wp-content/themes/assegai/jw/preview.jpg">
<source src="/wp-content/themes/assegai/jw/1536_AssegaiSecuritySolutions_204x274.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
</video>

<?php } else { ?>   
<video id="video" poster="/wp-content/themes/assegai/jw/preview.jpg" controls>
<source src="/wp-content/themes/assegai/jw/1536_AssegaiSecuritySolutions_204x274.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
</video>
<?php } ?>
</div>