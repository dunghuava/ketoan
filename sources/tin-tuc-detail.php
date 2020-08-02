<?php
	
	$tintuc = $d->simple_fetch("select * from #_tintuc where hien_thi = 1 and alias_".$lang." = '".$com."' limit 0,1");
	if(count($tintuc) == 0) {
		$d->location(URLPATH."404.html");
	}
	$tintuc_lienquan = $d->o_fet("select * from #_tintuc where hien_thi = 1 and id <> '".@$tintuc['id']."' and id_loai = '".$tintuc['id_loai']."' order by id desc limit 0,12");
	
	$loai=$d->simple_fetch("select * from #_category where id = '".$tintuc['id_loai']."'");
	$hinh_anh_slide = $d->o_fet("select * from #_baiviet_hinhanh where id_baiviet = '".$tintuc['id']."' order by id desc");

?>
<style type="text/css">
	.text-contents .relative-contents ul{ padding-left: 0px; }
	.text-contents .relative-contents ul li i{ font-size: 7px; position: absolute; top: 7px; left: 0; }
	.text-contents .relative-contents li{ position: relative; padding-left: 14px; }
	
</style>
<section class="module">
	<div class="container bg-white">
		<div class="row5">
			<?php include "left.php"; ?>						
			<div class="col-md-9 plr5">
				<div class="page-title">
					<div class="col-md-12 plr0">
						<ul class="breadcrumb">
							<li><a href="<?=URLPATH ?>" title="<?=_trangchu?>"><?=_trangchu?></a></li>
							<?=$d->breadcrumb($tintuc['id_loai'],$lang,URLPATH)?>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>							
				<div class="box-item module">
					<?php if(count($hinh_anh_slide>0) && $hinh_anh_slide[0]['hinh_anh']!='') {?>
						<div class="box-show-img">
							<div class="owl-detail-content owl-carousel owl-theme">
								<?php foreach($hinh_anh_slide as $item) {?>
									<figure>
										<a href="<?=URLPATH ?>img_data/images/<?=$item['hinh_anh'] ?>" title="<?=$item['title'] ?>" class="fancybox" rel="fan1">
										<img onerror="this.src='<?=URLPATH ?>templates/error/error.jpg';"  src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$item['hinh_anh'] ?>&w=400&h=300">
										</a>
									</figure>
								<?php } ?>
							</div>
						</div>
					<?php } ?>									
					<div class="text-contents">
						<h1 class="name"><?=@$tintuc['ten_'.$lang]?></h1>
						<div class="text-pages">
							<?=@$tintuc['noi_dung_'.$lang]?>
						</div>
						<?php include("ct_social.php"); ?>														
						<div class="clearfix"></div>	
						<div class="relative-contents">
							<h3><?=_baivietlienquan ?> | <a href="<?=URLPATH.$loai['alias_'.$lang]?>.html" title="Xem tất cả">Xem tất cả</a></h3>
							<ul>
							<?php foreach ($tintuc_lienquan as $tt) { ?>
								<li><i class="fa fa-circle"></i> <a href="<?=URLPATH.$d->create_long_link($tt['alias_'.$_SESSION['lang']],$_SESSION['lang']) ?>.html" title="<?=$tt['ten_'.$_SESSION['lang']]?>"><?=$tt['ten_'.$_SESSION['lang']]?></a></li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>