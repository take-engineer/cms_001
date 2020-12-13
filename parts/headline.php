<?php
	$subpage_ttl_en = get_field('subpage__ttl_en');
	$subpage_ttl_jp = get_field('subpage__ttl_jp');
	$subpage_headline_bg = get_field('subpage__headline_bg');

	if(is_single() || is_archive()):
		$page = get_page_by_path( 'blog' );
		$category = get_the_category();
		$cat_name = $category[0]->cat_name;
		$cat_slug = strtoupper($category[0]->category_nicename);
		$subpage_ttl_jp = $cat_name;
		$subpage_ttl_en = $cat_slug;
		$subpage_headline_bg = get_field('subpage__headline_bg', $page);
	endif;

	if(is_category()):
		$page = get_page_by_path( 'blog' );
		$category = get_the_category();
		$cat_name = $category[0]->cat_name;
		$cat_slug = strtoupper($category[0]->category_nicename);
		$subpage_ttl_jp = $cat_name;
		$subpage_ttl_en = $cat_slug;
		$subpage_headline_bg = get_field('subpage__headline_bg', $page);
	endif;

	if(is_404()):
		$subpage_ttl_en = '404';
		$subpage_ttl_jp = 'ページが見つかりません';
		$subpage_headline_bg = get_field('404__headline_bg', 'option');
	endif;
?>

<header class="p-subpage-header">
	<h1 class="p-subpage-header-ttl js-animate js-fade-in-left">
		<span class="p-subpage-header-ttl-en"><?= $subpage_ttl_en; ?></span>
		<span class="p-subpage-header-ttl-jp"><?= $subpage_ttl_jp; ?></span>
	</h1>
	<div class="p-subpage-header-bg js-animate js-fade-in-left" style="background-image:url(<?= $subpage_headline_bg; ?>);"></div>
</header>

<?php breadcrumbs(); ?>
