<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8" />
	<?php /* <title><?php bloginfo( 'name' );?></title> */ ?>
	<meta name="Keywords" content="" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0" />

<?php wp_head(); ?>
</head>
<body <?php body_class();?>>

<?php get_template_part( 'parts/loader' ); ?>

	<div class="l-wrapper">
		<header class="l-header">
			<div class="p-header">
			<?php if(is_home() || is_front_page()):?>
				<?php if(get_field('logo', 'option')):?>
					<h1 class="p-header-logo">
						<a href="<?= esc_url( home_url() );?>" class="p-header-logo-link">
							<img class="p-header-logo-img" src="<?php the_field('logo','option'); ?>" alt="">
						</a>
					</h1>
				<?php endif; ?>
			<?php else: ?>
				<?php if(get_field('logo', 'option')):?>
					<p class="p-header-logo">
						<a href="<?= esc_url( home_url() );?>" class="p-header-logo-link">
							<img class="p-header-logo-img" src="<?php the_field('logo','option'); ?>" alt="">
						</a>
					</p>
				<?php endif; ?>
			<?php endif; ?>
				<nav class="p-gnav">
					<ul class="p-gnav-list">
						<?php while(have_rows('gnav', 'option')): the_row(); ?>
							<?php
								$ttl = get_sub_field('gnav__ttl', 'option');
								$link = get_sub_field('gnav__link', 'option');
								$target = get_sub_field('gnav__target', 'option');
								$url = get_sub_field('gnav__url', 'option');
								$blank = 'target="_blank" rel="nofollow noopener';

								$uri = rtrim($link, '/');
								$uri = explode('/',$uri);
								$path = array_pop($uri);
								$is_current = '';

								if(is_category() || is_single()){
									$blog = 'blog';
								}
								if(is_page($path)){
									$is_current = 'is-current';
								}
								elseif($path == $blog){
									$is_current = 'is-current';
								}

								if($link || $url):
							?>
								<li class="p-gnav-item">
									<a class="p-gnav-link <?= $is_current; ?>" href="<?php if($url){ echo $url; } elseif($link){ echo $link; } ?>" <?php if($target){ echo $blank; }?>><?=$ttl;?></a>
								</li>
							<?php endif; ?>
						<?php endwhile;?>
					</ul>

					<?php if(has_sub_field('gnav_contact', 'option')):
							$disp = get_sub_field('gnav_contact__disp', 'option');
							$ttl = get_sub_field('gnav_contact__ttl', 'option');
							$link = get_sub_field('gnav_contact__link', 'option');
							$target = get_sub_field('gnav_contact__target', 'option');
							$url = get_sub_field('gnav_contact__url', 'option');
							$blank = 'target="_blank" rel="nofollow noopener';
						?>
							<?php if($disp):?>
								<div class="p-header-contact">
									<a class="p-header-contact-link -contact" href="<?php if($url){ echo $url; } elseif($link){ echo $link; } ?>" <?php if($target){ echo $blank; }?>>
										<i class="p-header-contact-icon far fa-envelope"></i>
										<span class="p-header-contact-text"><?= $ttl; ?></span>
									</a>
								</div>
							<?php endif; ?>
					<?php endif; ?>
				</nav>

				<div class="p-hum-wrap sp">
					<a class="p-hum sp">
						<span class="p-hum-line p-hum-line-top"></span>
						<span class="p-hum-line p-hum-line-center"></span>
						<span class="p-hum-line p-hum-line-bottom"></span>
					</a>
				</div>
				<nav class="p-hum-gnav">
					<div class="p-hum-gnav-wrap">
						<ul class="p-hum-gnav-list">
							<?php while(have_rows('gnav', 'option')): the_row(); ?>
								<?php
									$ttl = get_sub_field('gnav__ttl', 'option');
									$link = get_sub_field('gnav__link', 'option');
									$target = get_sub_field('gnav__target', 'option');
									$url = get_sub_field('gnav__url', 'option');
									$blank = 'target="_blank" rel="nofollow noopener';

									$uri = rtrim($link, '/');
									$uri = explode('/',$uri);
									$path = array_pop($uri);
									$is_current = '';

									if(is_category() || is_single()){
										$blog = 'blog';
									}
									if(is_page($path)){
										$is_current = 'is-current';
									}
									elseif($path == $blog){
										$is_current = 'is-current';
									}

									if($link || $url):
								?>
									<li class="p-hum-gnav-item">
										<a class="p-hum-gnav-link <?= $is_current; ?>" href="<?php if($url){ echo $url; } elseif($link){ echo $link; } ?>" <?php if($target){ echo $blank; }?>><?=$ttl;?></a>
									</li>
								<?php endif; ?>
							<?php endwhile;?>

							<?php if(get_field('gnav_contact', 'option')):
								$disp = get_sub_field('gnav_contact__disp', 'option');
								$ttl = get_sub_field('gnav_contact__ttl', 'option');
								$link = get_sub_field('gnav_contact__link', 'option');
								$target = get_sub_field('gnav_contact__target', 'option');
								$url = get_sub_field('gnav_contact__url', 'option');
								$blank = 'target="_blank" rel="nofollow noopener';
							?>
								<?php if($disp):?>
									<li class="p-hum-gnav-item">
										<a class="p-hum-gnav-link -contact" href="<?php if($url){ echo $url; } elseif($link){ echo $link; } ?>" <?php if($target){ echo $blank; }?>><?= $ttl; ?></a>
									</li>
								<?php endif; ?>
							<?php endif; ?>
						</ul>
					</div>
				</nav>
			</div>
		</header>
