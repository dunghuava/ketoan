<?php
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
</style>
<div class="hidden-xs">
	<br><br><br>
</div>
<div class="container">
	<div class="page-title">
		<ul class="breadcrumb">
			<li><a href="<?=URLPATH ?>" title="<?=_trangchu?>"><i class="fa fa-home"></i></a></li>
			<?=$d->breadcrumb($id_loai,$_SESSION['lang'],URLPATH)?>
		</ul>
	</div>
</div>
<?php
	if ($id_sub!=''){
		$arr_id=$id_sub;
	}else{
		$arr_id=$id_loai;
	}
	$sql= "select * from #_duan where hien_thi=1 and id_loai in ($arr_id) order by id desc";
	$data = $d->o_fet($sql);
    if(isset($_GET['page']) && !is_numeric(@$_GET['page'])) $d->location(URLPATH."404.html");
    $curPage = isset($_GET['page']) ? addslashes($_GET['page']) : 1;
    $url= $d->fullAddress();
    $maxR=9;
    $maxP=5;
    $phantrang=$d->phantrang($data, $url, $curPage, $maxR, $maxP,'classunlink','classlink','page');
	$data=$phantrang['source'];
	$col=4;
?>
	<div class="container">
		<div class="row">
			<?php
				include ('item_project.php');
			?>
		</div>
	</div>
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
