<?php 
/**
 * Template Name: Отзывы 
 */
get_header(); ?>

<section id="container">
	<div class="wrap-container">
		<section class="content-box box-1"><!--Start Box-->
			<?php $reviews_posts = new WP_Query(['post_type' => 'reviews', 'posts_per_page' => -1]); ?>
			<div class="zerogrid">
				<div class="row">
					<div class="slider slider-reviews" id="js-slider-reviews">
						<?php if ( $reviews_posts->have_posts() ) : while ( $reviews_posts->have_posts() ) : $reviews_posts->the_post(); ?>
						  	<div class="slider__item">
						  		<a href="<?php the_field('link'); ?>" target="_blank">
							  		<header class="slider-reviews__header">
							  			<?php echo kama_thumb_img(['width' => 80, 'height' => 80]); ?>
							  			<div class="header-right">
							  				<h4><?php the_title(); ?></h4>
							  				<span><?php the_field('nick'); ?></span>
							  			</div>
							  		</header>
							  		<?php the_content(); ?>
						  		</a>
						  	</div>
						  <?php endwhile; ?>
						  <!-- post navigation -->
						  <?php else: ?>
						  <!-- no posts found -->
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
				
<?php get_footer(); ?>

