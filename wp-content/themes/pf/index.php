<?php get_header(); ?>

<section id="container">
	<div class="wrap-container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		  	<?php the_title(); ?>
		  	<?php the_content(); ?>
		  <?php endwhile; ?>
		  <!-- post navigation -->
		  <?php else: ?>
		  <!-- no posts found -->
		<?php endif; ?>
				
<?php get_footer(); ?>

