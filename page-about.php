<?php
/*
Template Name: ABOUT
*/
?>

<?php get_header(); ?>

		<main class="l-main">
			<article class="l-subpage">

				<?php get_template_part( 'parts/headline' ); ?>


				<section class="p-about">
					<div class="p-about-info">
						<?php if(have_rows('about_info')):?>
							<dl class="p-about-info-data">
								<?php while(have_rows('about_info')): the_row();?>
									<?php if(get_sub_field('about_info__dt') || get_sub_field('about_info__dt')):?>
										<div class="p-about-info-row js-animate js-fade-in-up">
											<dt class="p-about-info-dt"><?php the_sub_field('about_info__dt'); ?></dt>
											<dd class="p-about-info-dd"><?php the_sub_field('about_info__dd'); ?></dd>
										</div>
									<?php endif; ?>
								<?php endwhile; ?>
							</dl>
						<?php endif; ?>

						<?php if(get_field('about_map')): ?>
						<div class="c-map js-animate js-fade-in-up">
							<?php the_field('about_map'); ?>
						</div>
					<?php endif; ?>
					</div>

				</section>

			</article>
		</main>

<?php get_footer(); ?>
