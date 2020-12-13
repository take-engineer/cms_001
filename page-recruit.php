<?php
/*
Template Name: RECRUIT
*/
?>

<?php get_header(); ?>

		<main class="l-main">
			<article class="l-subpage">

				<?php get_template_part( 'parts/headline' ); ?>


				<?php if(have_rows('recruit')): ?>
					<?php while(have_rows('recruit')): the_row(); ?>

						<section class="p-recruit-message">

							<?php if(have_rows('recruit_message')): ?>
								<?php while(have_rows('recruit_message')): the_row(); ?>
									<div class="p-recruit-message-wrap js-animate js-fade-in-up" style="background:url(<?php the_sub_field('recruit_message__bg'); ?>)">
										<div class="p-recruit-message-inner">
											<h2 class="p-recruit-message-ttl"><?php the_sub_field('recruit_message__ttl'); ?></h2>
											<div class="p-recruit-message-txt">
												<?php the_sub_field('recruit_message__txt'); ?>
											</div>
										</div>
									</div>
								<?php endwhile; ?>
							<?php endif;?>
						</section>

						<section class="p-recruit-info">

							<?php if(have_rows('recruit_info')): ?>
								<?php while(have_rows('recruit_info')): the_row(); ?>
									<article class="p-recruit-info-article js-animate js-fade-in-up">
										<h2 class="p-recruit-info-ttl"><?php the_sub_field('recruit_info__ttl'); ?></h2>

										<?php if(have_rows('recruit_info__dl')): ?>
											<dl class="p-recruit-info-data">
												<?php while(have_rows('recruit_info__dl')): the_row(); ?>
													<div class="p-recruit-info-row">
														<dt class="p-recruit-info-dt"><?php the_sub_field('recruit_info__dl_dt'); ?></dt>
														<dd><?php the_sub_field('recruit_info__dl_dd'); ?></dd>
													</div>
												<?php endwhile;?>
											</dl>
										<?php endif; ?>

										<?php if(get_sub_field('recruit_info__btn_label')): ?>
											<div class="c-btn p-recruit-btn">
												<a href="<?php the_sub_field('recruit_info__btn'); ?>" class="c-btn-txt"><?php the_sub_field('recruit_info__btn_label'); ?></a>
											</div>
										<?php endif; ?>

									</article>
								<?php endwhile;?>
							<?php endif; ?>

						</section>
					<?php endwhile; ?>
				<?php endif; ?>

			</article>
		</main>

<?php get_footer(); ?>
