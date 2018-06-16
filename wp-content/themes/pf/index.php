<?php get_header(); ?>

<section id="container" class="container">
	<div class="container-wrap">
		<div class="blog-content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			  	<div class="post-item">
			  		<h2><?php the_title(); ?></h2>
			  		<p><?php the_excerpt(); ?></p>
			  		<a href="<?php the_permalink(); ?>">Читать далее...</a>
			  	</div>
			  <?php endwhile; ?>
			  <!-- post navigation -->
			  <?php else: ?>
			  <!-- no posts found -->
			<?php endif; ?>
		</div>
		
		<?php get_sidebar(); ?>
	</div>
</section>
<?php get_footer(); ?>

