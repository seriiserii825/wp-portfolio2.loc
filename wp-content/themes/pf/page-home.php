<?php 
get_header(); ?>

<section id="container">
	<div class="wrap-container">
		<section class="content-box box-1"><!--Start Box-->
			<?php $portfolio_posts = new WP_Query(['post_type' => 'portfolio', 'posts_per_page' => -1]); ?>
			<div class="zerogrid">
				<div class="row">
					<div class="slider" id="js-slider">
						<?php if ( $portfolio_posts->have_posts() ) : while ( $portfolio_posts->have_posts() ) : $portfolio_posts->the_post(); ?>
							<div class="slider__item">
								<a href="<?php the_field('link_to_project'); ?>" target="_blank">
									<?php echo kama_thumb_img(['width' => 1200, 'height' => 595 ]); ?>
								</a>
							</div>
						<?php endwhile; ?>
						<!-- post navigation -->
					<?php else: ?>
						<!-- no posts found -->
					<?php endif; ?>
				</div>
			</div>

			<div class="row">
				<div class="slider-small" id="js-slider-small">
					<?php if ( $portfolio_posts->have_posts() ) : while ( $portfolio_posts->have_posts() ) : $portfolio_posts->the_post(); ?>
						<div class="slider__item">
							<?php echo kama_thumb_img([
								'width' => 234,
								'height' => 116
								]); ?>
							</div>
						<?php endwhile; ?>
						<!-- post navigation -->
					<?php else: ?>
						<!-- no posts found -->
					<?php endif; ?>
				</div>
			</div>

			<div class="row">
				<h2 class="reviews-title">Отзывы</h2>	
				<div class="slider slider-reviews" id="js-slider-reviews">
					<?php $reviews_posts = new WP_Query(['post_type' => 'reviews', 'posts_per_page' => -1]); ?>
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
	</section>

	<?php get_footer(); ?>

