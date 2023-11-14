<?php
if ($source == 'product-detail') {
	$seo = $d->simple_fetch("select * from #_products where id = {$_GET['id']}");
	$seo_title = $seo['ten_vn'];
	$seo_keyword = $seo['keyword'];
	$seo_description = $seo['mo_ta_vn'];

} else if ($source == "category") {
	$seo = $d->simple_fetch("select * from #_category where id = {$_GET['id']}");
	$seo_title = $seo['ten_vn'];
	$seo_keyword = $seo['keyword'];
	$seo_description = $seo['mo_ta_vn'];
	if ($com == "tags") {
		$query = $d->simple_fetch("select * from #_tags where alias = '$alias'");
		$seo_title = "Từ khóa: " . $query['ten_vn'];
		$seo_keyword = "Từ khóa: " . $query['ten_vn'];
		$seo_description = "Từ khóa: " . $query['ten_vn'];
	}
} else {
	$seo = $d->simple_fetch("select * from #_seo limit 1");
	$seo_title = $seo['title_vn'];
	$seo_keyword = $seo['keyword_vn'];
	$seo_description = $seo['description_vn'];
}

//hinh anh

if (!empty($seo)) $img_cn = URLPATH . "img_data/images/" . $seo['hinh_anh'];
else $img_cn = URLPATH . "img_data/icon/" . $information['icon_share'];

$img_cn = URLPATH . 'thumb.php?src=' . $img_cn . '&w=527&h=250&zc=2'
?>
<title><?= $seo_title ?></title>
<meta name="keywords" content="<?= $seo_keyword ?>" />
<meta name="description" content="<?= $seo_description ?>" />
<!-- google -->
<meta itemprop="name" content="<?= $seo_title ?>">
<meta itemprop="description" content="<?= $seo_description ?>">
<meta itemprop="image" content="<?= $img_cn ?>">
<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@publisher_handle">
<meta name="twitter:title" content="<?= $seo_title ?>">
<meta name="twitter:description" content="<?= $seo_description ?>">
<meta name="twitter:creator" content="@author_handle">
<meta name="twitter:image:src" content="<?= $img_cn ?>">
<!-- facebook -->
<meta property="og:title" content="<?= $seo_title ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="<?= $d->fullAddress() ?>" />
<meta property="og:image" content="<?= $img_cn ?>" />
<meta property="og:description" content="<?= $seo_description ?>" />
<meta property="og:site_name" content="hutoglobal" />
<meta property="fb:page_id" content="<?= $info_map['id_facebook'] ?>" />