<!DOCTYPE html>
<html lang="jp">

<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta name="Author" content="胸永晃考">
	<meta name="copyright" content="CopyRight (c) 2012 M/A Munenaga Akinari ">
	<meta name="Keywords" content="胸永,晃考,Munenaga,Akinari,ポートフォリオ,作品集,Wordpress,ワードプレス,Webデザイン,ウェブデザイン">

	<meta property="og:title" content="M/A 胸永晃考ポートフォリオ">
	<meta property="og:type" content="product">
	<meta property="og:url" content="http://munenaga.wp.xdomain.jp">
	<meta property="og:image" content="">
	<meta property="og:site_name" content="M/A 胸永晃考ポートフォリオ">
	<meta property="fb:admins" content="100001547551239">

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-64531258-1', 'auto');
	  ga('send', 'pageview');

	</script>

	
	<link rel="shortcut icon" href="<?php $upload_info = wp_upload_dir(); echo$upload_info['url']; ?>/favicon.ico" />
	
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css">

	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	
	<?php wp_head(); ?>

</head>

<body>
<header>
<h1><a href="<?php bloginfo('home'); ?> "><img class="top_banner" src="<?php bloginfo('template_directory'); ?>/images/ma_tab_header.png" alt="M/A　Munenaga Akinari Portforio site 胸永晃考　ポートフォリオサイト" title="M/A Munenaga Akinari Portforio site">
</a></h1>
</header>
