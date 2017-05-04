<?php get_header(); ?>

<div id="container">

<div id="main_cont">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
	<article>
	<h1><?php the_title(); ?></h1>
	<?php the_content(); ?>
	</article>

<?php endwhile; else: ?>
	<p>Contents not found.</p>

<?php endif ; ?>
</div>

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
