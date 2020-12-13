<?php
/*
Template Name: FAQ
*/
?>

<?php get_header(); ?>

		<main class="l-main">
			<article class="l-subpage">

				<?php get_template_part( 'parts/headline' ); ?>

				<section class="p-faq">
					<div class="p-faq-inner">

						<?php
							$args = array(
								'paged' => get_query_var('paged'),
								'post_type' => 'faq_post',
								'posts_per_page' => '10',
							);
							$wp_query = new WP_Query($args);

							if($wp_query->have_posts()): ?>
								<ul class="p-faq-list">
									<?php
										while($wp_query->have_posts()):
											$wp_query->the_post();
											$category = get_the_category();
											$cat_name = $category[0]->cat_name;

											if(get_the_title()):
									?>
											<li class="p-faq-item js-animate js-fade-in-up">
												<div class="p-faq-item-question">
													<h3 class="p-faq-item-question-ttl"><?php the_title(); ?></h3>
													<i class="fas fa-angle-down"></i>
												</div>
												<div class="p-faq-item-answer js-animate js-fade-in">
													<p>
														<?php the_content(); ?>
													</p>
												</div>
											</li>
										<?php endif; ?>
									<?php endwhile; wp_reset_postdata(); ?>
								</ul>
							<?php endif; ?>

							<?php	if(function_exists( "pagination" )){
								pagination( $additional_loop->max_num_pages );
							}
						?>

					</div>

				</section>

			</article>
		</main>

<?php get_footer(); ?>
