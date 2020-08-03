<?php
	
	$tintuc = $d->simple_fetch("select * from #_tintuc where hien_thi = 1 and alias_".$lang." = '".$com."' limit 0,1");
	if(count($tintuc) == 0) {
		$d->location(URLPATH."404.html");
	}
	$tin_lienquan = $d->o_fet("select * from #_tintuc where hien_thi = 1 and id <> '".@$tintuc['id']."' and id_loai = '".$tintuc['id_loai']."' order by id desc limit 0,6");
	
	$loai=$d->simple_fetch("select * from #_category where id = '".$tintuc['id_loai']."'");
	$hinh_anh_slide = $d->o_fet("select * from #_baiviet_hinhanh where id_baiviet = '".$tintuc['id']."' order by id desc");

?>
<style>
	.title_news{
		font-weight:bold;
		padding-bottom:5px;
		position:relative;
	}
	.title_news::after{
		content:'';
		width:50px;
		height:3px;
		background:#E5E5E5;
		position:absolute;
		bottom:-5px;
		left:0px;
	}
</style>
<div class="hidden-xs">
	<br><br><br>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<h3 class="title_news"><?=$tintuc['ten_vn']?></h3>
			<p style="margin-bottom:0px;color:#8a8a8a;font-family: monospace;">POST ON <?=date('d/m/Y H:i',$tintuc['ngay_dang'])?> BỞI ADMIN</p>
			<div class="text-left" style="height:30px">
				<?php include ('shares.php') ?>
			</div>
			<hr style="margin:5px;">
			<div class="contents">
				<span><?=$tintuc['noi_dung_vn']?></span>
			</div>
		</div>
		<div class="col-md-3">
			<h4 class="title_news">Dự án liên quan</h4>
			<?php foreach ($tin_lienquan as $tin){ ?>
				<div class="news_relate" style="margin-bottom:10px">
					<a style="color:#000" href="<?=$tin['alias_vn']?>.html" title="<?=$tin['ten_vn']?>">
						<div class="img-shine-3">
							<img style="border-radius:8px;" src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$tin['hinh_anh']?>&w=400&h=220&zc=0">
						</div>
						<h5 style="font-size:15px;font-weight:bold"><?=$tin['ten_vn']?></h5>
						<p style="color:gray;"><span class="fa fa-calendar"></span>&nbsp;&nbsp;<?=date('d/m/Y',$tin['ngay_dang'])?></p>
					</a>
				</div>
			<?php } ?>
		</div>
	</div>
</div>
<script>
	$(document).ready(function () {
		$('#navbar_fix_top').addClass('sticky');
	});
	window.onscroll = function() {}
</script>
