<?php get_header(); ?>

<section id="container" class="container">
	<div class="container-wrap">
		<div class="blog-content">
			<?php if ( have_posts() ) : the_post(); ?>
			  	<div class="post-item">
			  		<h2><?php the_title(); ?></h2>
			  		<p><?php the_content(); ?></p>
			  	</div>
			  <?php else: ?>
			  	<h2>Ничего не найдено</h2>
			<?php endif; ?>
		</div>

		<?php get_sidebar(); ?>
	</div>
</section>
<?php get_footer(); ?>

