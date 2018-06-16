<?php get_header(); ?>

<section id="container" class="container">
	<div class="container-wrap">
		<div class="blog-content">
			<?php if ( have_posts() ) : the_post(); ?>
			  	<div class="post-item">
			  		<h2><?php the_title(); ?></h2>
			  		<p><?php the_content(); ?></p>
			  	</div>
			<?php endif; ?>
		</div>
		
		<aside class="blog-sidebar">
			<?php if(is_active_sidebar( 'sidebar-widget' )): ?>
				<?php dynamic_sidebar( 'sidebar-widget' ); ?>
			<?php else: ?>
				<h2>Место для виджета сайдбара</h2>
			<?php endif; ?>
		</aside>
	</div>

	<?php 
		comments_template();
		wp_list_comments(); 
	?>
</section>
<?php get_footer(); ?>

