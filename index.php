<?php get_header(); ?>

<div id="container">

<div id="main_cont">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article>
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
	<footer><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time></footer>
	</article>

<?php endwhile; else: ?>
	<p>Contents not found.</p>

<?php endif ; ?>

<p id="sub_nav">Category:<?php the_category(' '); ?> / <a href="<?php bloginfo('home'); ?>"> Home</a></p>

</div>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
