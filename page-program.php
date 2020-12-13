<?php
/*
Template Name: PROGRAM
*/
?>

<?php get_header(); ?>

		<main class="l-main">
			<article class="l-subpage">

				<?php get_template_part( 'parts/headline' ); ?>

				<section class="p-program">

					<?php if(have_rows('program_wrap')): ?>
						<ul class="p-program-list">
							<?php
								$count = 0;
								while(have_rows('program_wrap')): the_row(); $count++; ?>
									<li id="program<?=$count?>" class="p-program-item js-animate js-fade-in-up">

									<div class="p-program-item-data">
											<h3 class="p-program-item-data-head"><?php the_sub_field('program__ttl'); ?></h3>
											<?php if(have_rows('program__dl')): ?>
												<?php while(have_rows('program__dl')): the_row(); ?>
													<dl class="p-program-item-data-list">
														<dt class="p-program-item-data-list-dt"><?php the_sub_field('program_dl__dt'); ?></dt>
														<dd class="p-program-item-data-list-dd"><?php the_sub_field('program_dl__dd'); ?></dd>
													</dl>
												<?php endwhile; ?>
											<?php endif;?>

											<?php if(get_field('program__disp_link')): ?>
												<div class="c-btn p-program-btn">
													<a href="<?php the_field('program__link'); ?>" class="c-btn-txt"><?php the_field('program__link_label'); ?></a>
												</div>
											<?php endif; ?>
										</div>

										<div class="p-program-item-img"><img src="<?php the_sub_field('program__img'); ?>" alt=""></div>

									</li>
								<?php endwhile; ?>
						</ul>
					<?php endif; ?>

				</section>

			</article>
		</main>

<?php get_footer(); ?>
