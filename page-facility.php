<?php
/*
Template Name: FACILITY
*/
?>

<?php get_header(); ?>

		<main class="l-main">
			<article class="l-subpage">

				<?php get_template_part( 'parts/headline' ); ?>

				<section class="p-facility">

					<?php if(have_rows('facility_wrap')): ?>
						<ul class="p-facility-list">
							<?php
								$count = 0;
								while(have_rows('facility_wrap')): the_row(); $count++;?>
								<li class="p-facility-item js-animate js-fade-in-up" id="facility0<?= $count; ?>">

									<?php if(get_sub_field('facility__ttl_jp')):?>
										<h3 class="p-facility-ttl">
											<?php the_sub_field('facility__ttl_jp');?>
										</h3>
									<?php endif; ?>

									<ul class="p-facility-img-wrap">
										<?php while(have_rows('facility__img')): the_row(); ?>
											<li class="p-facility-img-item js-animate js-fade-in-up">
												<figure class="p-facility-figure">
													<img class="p-facility-figure-img" src="<?php the_sub_field('img'); ?>" alt="">
												</figure>
											</li>
										<?php endwhile;?>
									</ul>

								</li>
							<?php endwhile; ?>
						</ul>
					<?php endif; ?>

				</section>

			</article>
		</main>

<?php get_footer(); ?>
