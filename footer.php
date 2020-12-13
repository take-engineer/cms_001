
		<footer class="l-footer">
			<?php if(!is_page('contact')):?>
				<?php if(have_rows('footer__contact', 'option')):?>
					<?php while(have_rows('footer__contact', 'option')): the_row();?>
						<?php if(get_sub_field('home_section__disp')):?>

							<section class="p-global-footer-contact">
								<div class="p-global-footer-contact-inner js-animate js-fade-in">

									<?php if(get_sub_field('home_section__bg')):?>
										<div class="p-global-footer-contact-bg" style="background-image: url(<?php the_sub_field('home_section__bg');?>)"></div>
									<?php endif; ?>

										<?php if(get_sub_field('home_section__ttl_en')):?>
											<h3 class="p-global-footer-contact-ttl">
												<?php the_sub_field('home_section__ttl_en');?>

												<?php if(get_sub_field('home_section__ttl_jp')):?>
													<span class="p-global-footer-contact-ttl-sub"><?php the_sub_field('home_section__ttl_jp');?></span>
												<?php endif;?>

											</h3>
										<?php endif;?>

									<?php if(get_sub_field('home_section__txt')):?>
										<p class="p-global-footer-contact-txt"><?php the_sub_field('home_section__txt');?></p>
									<?php endif; ?>

									<?php
										$ttl = get_sub_field('home_section__link_txt');
										$link = get_sub_field('home_section__link');
										$url = get_sub_field('home_section__url');
										$target = get_sub_field('home_section__target');
										$blank = 'target="_blank" rel="nofollow noopener';

										if($link || $url):
									?>
										<div class="c-btn -contact">
											<a class="c-btn-txt" href="<?php if($url){ echo $url; } elseif($link){ echo $link; } ?>" <?php if($target){ echo $blank; }?>>
												<i class="p-footer-contact-icon far fa-envelope"></i>
												<?=$ttl;?>
											</a>
										</div>
									<?php endif; ?>

								</div>
							</section>

						<?php endif; ?>
					<?php endwhile;?>
				<?php endif; ?>
			<?php endif; ?>

			<div class="p-global-footer">
				<?php if(get_field('logo', 'option')):?>
					<div class="p-global-footer-logo">
						<img class="p-global-footer-logo-img" src="<?php the_field('logo','option'); ?>" alt="">
						<?php /* <span class="p-global-footer-logo-small"></span> */?>
					</div>
				<?php endif; ?>

				<nav class="p-footer-nav">
					<ul class="p-footer-nav-list">
						<?php while(have_rows('gnav', 'option')): the_row(); ?>
							<?php
								$ttl = get_sub_field('gnav__ttl', 'option');
								$link = get_sub_field('gnav__link', 'option');
								$target = get_sub_field('gnav__target', 'option');
								$url = get_sub_field('gnav__url', 'option');
								$blank = 'target="_blank" rel="nofollow noopener';

								if($link || $url):
							?>
								<li class="p-footer-nav-item">
									<a class="p-footer-nav-link" href="<?php if($url){ echo $url; } elseif($link){ echo $link; } ?>" <?php if($target){ echo $blank; }?>><?=$ttl;?></a>
								</li>
							<?php endif; ?>
						<?php endwhile;?>
					</ul>
				</nav>
			</div>
			<?php if(get_field('copyright', 'option')):?>
				<small class="p-copy"><?php the_field('copyright', 'option');?></small>
			<?php endif; ?>
		</footer>

		<!-- <div class="floating">
			<a href="#top" class="toTop"><img src="<?= get_template_directory_uri(); ?>/img/totop.svg" alt="" /></a>
		</div> -->

		<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	</div>

	<?php wp_footer(); ?>
</body>
</html>
