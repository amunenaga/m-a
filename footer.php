<footer>
<p>Copyright (c) 2012 M/A Munenaga Akinari All Rights Reserved.</p>
</footer>

<?php if (is_front_page()) : ?>
<script type="text/javascript">
  window.___gcfg = {lang: 'ja'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


(function($){
	var touch = false;
	$('#humberger').on('click touchstart',function(e){
		switch (e.type) {
			case 'touchstart':
				drawerToggle();
				touch = true;
				return false;
				break;
			case 'click':
				if(!touch)
				drawerToggle();
				return false;
				break;
			}
			function drawerToggle(){
				$('body').toggleClass('drawer-opened');
				touch = false;
			}
		})
		$('#overlay').on('click touchstart',function(){
			$('body').removeClass('drawer-opened');
		})
	}
)(jQuery);
</script>
<?php endif; ?>

<?php wp_footer(); ?>

</body>
</html>