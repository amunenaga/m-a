<?php

function que_jquery() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'javascript',get_template_directory_uri().'/js/javascript.js',array('jquery'));
  }
add_action( 'wp_enqueue_scripts', 'que_jquery' );

remove_action('wp_head','wp_generator');

add_theme_support('menus');

/* Google Analytics */
add_action('wp_footer', 'ga');
 
function ga() { ?>
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28973540-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

	</script>

<?php } ?>