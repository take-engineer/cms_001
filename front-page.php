<?php get_header(); ?>

	<main class="l-main">
		<article class="l-home">

			<header class="p-main-header js-100vh">
				<div class="p-main-visual">
					<div class="p-main-visual-container">

						<div class="swiper-container slider1 js-animate js-fade-in-left">
							<div class="swiper-wrapper">
								<?php if(have_rows('home_main_visual')):?>
									<?php while(have_rows('home_main_visual')): the_row();?>
										<div class="swiper-slide"><img class="swiper-slide-img" src="<?php the_sub_field('main_visual__img'); ?>"></div>
									<?php endwhile; ?>
								<?php endif; ?>
							</div>
						</div>

						<?php if(get_field('home_catchcopy')):?>
							<h2 class="p-main-visual-catchcopy js-animate js-fade-in-left">
								<?php the_field('home_catchcopy'); ?>
							</h2>
						<?php endif; ?>

					</div>
					<div class="c-scroll">
						<p class="c-scroll-txt">SCROLL</p>
						<div class="c-scroll-arrow"></div>
					</div>
				</div>
			</header>

			<!-- ABOUT -->
		<?php if(have_rows('home_section__about')):?>
			<?php while(have_rows('home_section__about')): the_row();?>
				<?php if(get_sub_field('home_section__disp')):?>

					<section class="p-home-about">
						<div class="p-home-about-inner js-animate js-fade-in-left">

							<?php if(get_sub_field('home_section__bg')):?>
								<div class="p-home-about-thumb">
									<img src="<?php the_sub_field('home_section__bg');?>" class="p-home-about-img">
								</div>
							<?php endif; ?>

							<div class="p-home-about-content">
								<?php if(get_sub_field('home_section__ttl_en')):?>
									<h3 class="p-home-about-ttl">
										<?php the_sub_field('home_section__ttl_en');?>

										<?php if(get_sub_field('home_section__ttl_jp')):?>
											<span class="p-home-about-ttl-sub"><?php the_sub_field('home_section__ttl_jp');?></span>
										<?php endif;?>

									</h3>
								<?php endif;?>

								<?php if(get_sub_field('home_section__txt')):?>
									<p class="p-home-about-txt"><?php the_sub_field('home_section__txt');?></p>
								<?php endif; ?>

								<?php
									$ttl = get_sub_field('home_section__link_txt');
									$link = get_sub_field('home_section__link');
									$url = get_sub_field('home_section__url');
									$target = get_sub_field('home_section__target');
									$blank = 'target="_blank" rel="nofollow noopener';

									if($link || $url):
								?>
									<div class="c-btn js-animate js-fade-in-up">
										<a class="c-btn-txt" href="<?php if($url){ echo $url; } elseif($link){ echo $link; } ?>" <?php if($target){ echo $blank; }?>><?=$ttl;?></a>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</section>

				<?php endif; ?>
			<?php endwhile;?>
		<?php endif; ?>

				<!-- PROGRAM -->
		<?php if(have_rows('home_section__program')):?>
			<?php while(have_rows('home_section__program')): the_row();?>
				<?php if(get_sub_field('home_section__disp')):?>

					<section class="p-home-program">
						<div class="p-home-program-inner js-animate js-fade-in-right">

							<?php if(get_sub_field('home_section__bg')):?>
								<div class="p-home-program-thumb">
									<img src="<?php the_sub_field('home_section__bg');?>" class="p-home-program-img">
								</div>
							<?php endif; ?>

							<div class="p-home-program-content">
								<?php if(get_sub_field('home_section__ttl_en')):?>
									<h3 class="p-home-program-ttl">
										<?php the_sub_field('home_section__ttl_en');?>

										<?php if(get_sub_field('home_section__ttl_jp')):?>
											<span class="p-home-program-ttl-sub"><?php the_sub_field('home_section__ttl_jp');?></span>
										<?php endif;?>

									</h3>
								<?php endif;?>

								<?php if(get_sub_field('home_section__txt')):?>
									<p class="p-home-program-txt"><?php the_sub_field('home_section__txt');?></p>
								<?php endif; ?>

								<?php
									$ttl = get_sub_field('home_section__link_txt');
									$link = get_sub_field('home_section__link');
									$url = get_sub_field('home_section__url');
									$target = get_sub_field('home_section__target');
									$blank = 'target="_blank" rel="nofollow noopener';

									if($link || $url):
								?>
									<div class="c-btn js-animate js-fade-in-up">
										<a class="c-btn-txt" href="<?php if($url){ echo $url; } elseif($link){ echo $link; } ?>" <?php if($target){ echo $blank; }?>><?=$ttl;?></a>
									</div>
								<?php endif; ?>
							</div>
						</div>
					</section>

				<?php endif; ?>
			<?php endwhile;?>
		<?php endif; ?>

		<!-- FACILITY -->
		<?php if(have_rows('home_section__facility')):?>
			<?php while(have_rows('home_section__facility')): the_row();?>
				<?php if(get_sub_field('home_section__disp')):?>

					<section class="p-home-facility js-animate js-fade-in-up">
						<div class="p-home-facility-inner">

							<?php /* if(get_sub_field('home_section__bg')):?>
								<div class="p-home-facility-bg" style="background-image: url(<?php the_sub_field('home_section__bg');?>)"></div>
							<?php endif; */ ?>

								<?php if(get_sub_field('home_section__ttl_en')):?>
									<h3 class="p-home-facility-ttl">
										<?php the_sub_field('home_section__ttl_en');?>

										<?php if(get_sub_field('home_section__ttl_jp')):?>
											<span class="p-home-facility-ttl-sub"><?php the_sub_field('home_section__ttl_jp');?></span>
										<?php endif;?>

									</h3>
								<?php endif;?>

							<?php if(get_sub_field('home_section__txt')):?>
								<p class="p-home-facility-txt"><?php the_sub_field('home_section__txt');?></p>
							<?php endif; ?>

							<?php
								$facility = get_page_by_path('facility');
								$count = 0;
								?>
								<?php if(have_rows('facility_wrap', $facility->ID)): ?>
									<div class="swiper-container slider2 js-animate js-fade-in-up">
										<div class="swiper-wrapper">
											<?php while(have_rows('facility_wrap', $facility->ID)): the_row(); $count++; ?>
												<?php while(have_rows('facility__img')): the_row(); ?>
													<div class="swiper-slide">
														<a href="<?= esc_url( home_url('facility') ); ?>/#facility0<?=$count?>" class="c-article-link">
															<figure class="c-article-figure">
																<img class="c-article-figure-img" src="<?php the_sub_field('img'); ?>" alt="">
															</figure>
														</a>
													</div>
												<?php endwhile;?>
											<?php endwhile; ?>
										</div>
										<div class="swiper-pagination"></div>
									</div>
								<?php endif; ?>

							<?php
								$ttl = get_sub_field('home_section__link_txt');
								$link = get_sub_field('home_section__link');
								$url = get_sub_field('home_section__url');
								$target = get_sub_field('home_section__target');
								$blank = 'target="_blank" rel="nofollow noopener';

								if($link || $url):
							?>
								<div class="c-btn js-animate js-fade-in-up">
									<a class="c-btn-txt" href="<?php if($url){ echo $url; } elseif($link){ echo $link; } ?>" <?php if($target){ echo $blank; }?>><?=$ttl;?></a>
								</div>
							<?php endif; ?>
						</div>
					</section>

				<?php endif; ?>
			<?php endwhile;?>
		<?php endif; ?>

		<!-- FAQ -->
		<?php if(have_rows('home_section__faq')):?>
			<?php while(have_rows('home_section__faq')): the_row();?>
				<?php if(get_sub_field('home_section__disp')):?>

					<section class="p-home-faq">
						<div class="p-home-faq-inner js-animate js-fade-in-up">

							<?php if(get_sub_field('home_section__ttl_en')):?>
								<h3 class="p-home-faq-ttl">
									<?php the_sub_field('home_section__ttl_en');?>

									<?php if(get_sub_field('home_section__ttl_jp')):?>
										<span class="p-home-faq-ttl-sub"><?php the_sub_field('home_section__ttl_jp');?></span>
									<?php endif;?>
								</h3>
							<?php endif;?>

							<?php if(get_sub_field('home_section__txt')):?>
								<p class="p-home-faq-txt"><?php the_sub_field('home_section__txt');?></p>
							<?php endif; ?>

							<?php
								$faq_posts = get_posts(	array(
									'post_type' => 'faq_post',
									'posts_per_page' => '3',
									'orderby' => 'DESC',
								));

								if($faq_posts): ?>
									<ul class="p-home-faq-list">
										<?php foreach($faq_posts as $post): setup_postdata( $post );
											if(get_the_title()):
										?>
												<li class="p-home-faq-item js-animate js-fade-in-up">
													<div class="p-home-faq-item-question">
														<h3 class="p-home-faq-item-question-ttl"><?php the_title(); ?></h3>
														<i class="fas fa-angle-down"></i>
													</div>
													<div class="p-home-faq-item-answer">
														<p>
															<?php the_content(); ?>
														</p>
													</div>
												</li>
											<?php endif; ?>
										<?php endforeach; wp_reset_postdata(); ?>
									</ul>
							<?php endif; ?>

							<?php
								$ttl = get_sub_field('home_section__link_txt');
								$link = get_sub_field('home_section__link');
								$url = get_sub_field('home_section__url');
								$target = get_sub_field('home_section__target');
								$blank = 'target="_blank" rel="nofollow noopener';

								if($link || $url):
							?>
								<div class="c-btn js-animate js-fade-in-up">
									<a class="c-btn-txt" href="<?php if($url){ echo $url; } elseif($link){ echo $link; } ?>" <?php if($target){ echo $blank; }?>><?=$ttl;?></a>
								</div>
							<?php endif; ?>
						</div>
					</section>

				<?php endif; ?>
			<?php endwhile;?>
		<?php endif; ?>

		<!-- BLOG -->
		<?php if(have_rows('home_section__blog')):?>
			<?php while(have_rows('home_section__blog')): the_row();?>
				<?php if(get_sub_field('home_section__disp')):?>
					<section class="p-home-blog">

						<?php if(get_sub_field('home_section__bg')):?>
							<div class="c-section-bg" style="background-image: url(<?php the_sub_field('home_section__bg');?>)"></div>
						<?php endif; ?>

						<div class="p-home-blog-inner js-animate js-fade-in-up">


							<?php if(get_sub_field('home_section__ttl_en')):?>
								<h3 class="p-home-blog-ttl">
									<?php the_sub_field('home_section__ttl_en');?>

									<?php if(get_sub_field('home_section__ttl_jp')):?>
										<span class="p-home-blog-ttl-sub"><?php the_sub_field('home_section__ttl_jp');?></span>
									<?php endif;?>

								</h3>
							<?php endif;?>

							<?php if(have_posts()):?>
								<div class="swiper-container slider3 js-animate js-fade-in-left">
									<div class="p-home-blog-list swiper-wrapper">
										<?php
										$information_posts = get_posts(	array(
											'post_type' => 'post',
											'posts_per_page' => '6',
											'category_name' => 'information',
											'orderby' => 'DESC',
										));

										foreach($information_posts as $post): setup_postdata( $post );
											$category = get_the_category();
										?>
											<article class="c-article-item swiper-slide">
												<a href="<?= esc_url( get_permalink() ); ?>" class="c-article-link">
													<figure class="c-article-figure">
														<?php
															if(has_post_thumbnail()):?>
																<?php
																	the_post_thumbnail('medium',array(
																	'class' => 'c-article-figure-img',
																	'alt' => get_the_title(),
																)); ?>
															<?php else: ?>
																<img class="c-article-figure-img" src="<?= get_template_directory_uri(); ?>/img/noimage.png" alt="">
															<?php endif; ?>
													</figure>
													<div class="c-article-caption">
														<div class="c-article-meta">
															<div class="c-article-category">
																<ul>
																	<li class="c-article-cat"><?=$category[0]->cat_name;?></li>
																</ul>
															</div>
															<time datetime="<?php the_time('Y.n.j'); ?>" class="c-article-time"><?php the_time('Y.n.j'); ?></time>
														</div>
														<h4 class="c-article-ttl"><?php the_title(); ?></h4>
													</div>
												</a>
											</article>
										<?php endforeach; wp_reset_postdata(); ?>
									</div>
									<div class="swiper-button-prev"></div>
									<div class="swiper-button-next"></div>
								</div>
							<?php endif; ?>

							<?php
								$ttl = get_sub_field('home_section__link_txt');
								$link = get_sub_field('home_section__link');
								$url = get_sub_field('home_section__url');
								$target = get_sub_field('home_section__target');
								$blank = 'target="_blank" rel="nofollow noopener';

								if($link || $url):
							?>
								<div class="c-btn js-animate js-fade-in-up">
									<a class="c-btn-txt" href="<?php if($url){ echo $url; } elseif($link){ echo $link; } ?>" <?php if($target){ echo $blank; }?>><?=$ttl;?></a>
								</div>
							<?php endif; ?>

						</div>

					</section>
				<?php endif; ?>
			<?php endwhile;?>
		<?php endif; ?>

				<!-- RECRUIT -->
		<?php if(have_rows('home_section__recruit')):?>
			<?php while(have_rows('home_section__recruit')): the_row();?>
				<?php if(get_sub_field('home_section__disp')):?>

					<section class="p-home-recruit">
						<div class="p-home-recruit-inner js-animate js-fade-in-up">

							<?php if(get_sub_field('home_section__bg')):?>
								<div class="p-home-recruit-bg" style="background-image: url(<?php the_sub_field('home_section__bg');?>)"></div>
							<?php endif; ?>

								<?php if(get_sub_field('home_section__ttl_en')):?>
									<h3 class="p-home-recruit-ttl">
										<?php the_sub_field('home_section__ttl_en');?>

										<?php if(get_sub_field('home_section__ttl_jp')):?>
											<span class="p-home-recruit-ttl-sub"><?php the_sub_field('home_section__ttl_jp');?></span>
										<?php endif;?>

									</h3>
								<?php endif;?>

							<?php if(get_sub_field('home_section__txt')):?>
								<p class="p-home-recruit-txt"><?php the_sub_field('home_section__txt');?></p>
							<?php endif; ?>

							<?php
								$ttl = get_sub_field('home_section__link_txt');
								$link = get_sub_field('home_section__link');
								$url = get_sub_field('home_section__url');
								$target = get_sub_field('home_section__target');
								$blank = 'target="_blank" rel="nofollow noopener';

								if($link || $url):
							?>
								<div class="c-btn -white">
									<a class="c-btn-txt" href="<?php if($url){ echo $url; } elseif($link){ echo $link; } ?>" <?php if($target){ echo $blank; }?>><?=$ttl;?></a>
								</div>
							<?php endif; ?>
						</div>
					</section>

				<?php endif; ?>
			<?php endwhile;?>
		<?php endif; ?>

		</article>
	</main>

<?php get_footer() ;?>
