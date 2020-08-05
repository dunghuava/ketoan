<?php
	error_reporting(1);
	
	$loai = $d->simple_fetch("select * from #_category where hien_thi = 1 and alias_{$lang} = '$com'");
	if(count($loai) == 0) $d->location(URLPATH."404.html");
	$id_loai = $loai['id'];
	$id_sub=substr($d->findIdSub($loai['id'],1),1);
?>

<style>
	.title_main_page{
		text-transform:uppercase;
		font-weight:bold;
		padding-bottom:8px;
		border-bottom:1px solid #dcdcdc;
		position:relative;
	}
	.title_main_page::after{
		content:'';
		position:absolute;
		bottom:-2px;
		left:0px;
		width:150px;
		height:3px;
		background:#02AD88;
	}
	.sec-banner{
		background: #8aaf6c url('<?=URLPATH?>/images/bg_news.png');
		background-repeat: no-repeat !important;
		background-size: cover !important;
		background-position: center !important;
		padding: 30px 15px 50px;
		text-align: center;
		position: relative;
		height: auto;
		max-height: 220px;
		color:white;
	}
</style>
<div class="hidden-xs">
	<br><br><br>
</div>
<section class="sec-banner">
	<div class="container">
		<div class="text-center">
			<h3 style="margin:0px;font-size:30px"><?=$loai['ten_vn']?></h3>
			<p>Cập nhật tin tức nhanh chóng , chuyên nghiệp</p>
		</div>
	</div>
</section>
<section class="container">
	<div class="row">
		<div class="col-md-12">
			<h4><span class="fa fa-bell"></span>&nbsp;<?=$loai['ten_vn']?></h4>
		</div>
	</div>
</section>
<?php 
	// if ($id_sub!=''){
	// 	$arr_id=$id_sub;
	// }else{
	// 	$arr_id=$id_loai;
	// }
	// $sql= "select * from #_tintuc where hien_thi=1 and id_loai in ($arr_id) order by id asc";

	$sql= "select * from #_tintuc where hien_thi=1 and id_loai = {$id_loai} order by id desc";
	$data = $d->o_fet($sql);

    if(isset($_GET['page']) && !is_numeric(@$_GET['page'])) $d->location(URLPATH."404.html");
    $curPage = isset($_GET['page']) ? addslashes($_GET['page']) : 1;
    $url= $d->fullAddress();
    $maxR=9;
    $maxP=5;
    $phantrang=$d->phantrang($data, $url, $curPage, $maxR, $maxP,'classunlink','classlink','page');
	$data=$phantrang['source'];
	$col=4;
	include ('item_category.php');
?>
<script>
	$(document).ready(function () {
		$('#navbar_fix_top').addClass('sticky');
		$('#navbar_fix_top').css({'box-shadow':'none'});
		$('#slide_project_img').slick({
			dots: false,
			autoplay:true,
			slidesToShow: 3,
			slidesToScroll: 1,
		});
	});
	window.onscroll = function() {}
</script>