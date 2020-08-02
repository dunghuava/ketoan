<?php
	$query=$d->simple_fetch("select id,ten_vn,alias_vn,mo_ta_vn from #_category where alias_{$_SESSION['lang']}='$com'");
	$id_loai=$query['id'];
	$all_id=$id_loai.$d->findIdSub($id_loai);

	if($id_loai == '') {
		$d->location(URLPATH."404.html");
	}
	$sanpham = $d->o_fet("select * from #_category where hien_thi = 1  and id_loai = '".$query['id']."' order by so_thu_tu asc, id desc");

	
?>
<section>
	<div class="container bg-white">
		<div class="row10">		
			<?php include 'left.php'; ?>
			<div class="col-md-9 plr10">
				<div class="page-title">
					<div class="col-md-12 plr0">
						<ul class="breadcrumb">
							<li><a href="<?=URLPATH ?>" title="<?=_trangchu?>"><?=_trangchu?></a></li>
							<?=$d->breadcrumb($id_loai,$_SESSION['lang'],URLPATH)?>
						</ul>
					</div>
				</div>
				<!-- <?php if(!empty($query['mo_ta_'.$lang])){ ?>	
					<div class="des-module mb10">
						<?= $query['mo_ta_'.$lang]; ?>			
					</div>
				<?php } ?> -->
				<div class="clearfix"></div>
				<div class="row10">
					<?php foreach($sanpham as $item) {?>
						<div class="col-sm-3 col-xs-6 plr10">
							<div class="item-pro mb30">
								<div class="img-pro">
									<a class="img-shine-2" href="<?=URLPATH.$item['alias_'.$lang] ?>.html" title="<?=$item['ten_'.$lang] ?>">
									<img onerror="this.src='<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>templates/error/error.jpg&w=400&h=300';"  src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$item['hinh_anh'] ?>&w=400&h=300&zc=2">				
									</a>
								</div>
								<div class="info">
									<h3>
										<a href="<?=URLPATH.$item['alias_'.$lang] ?>.html" title="<?=$item['ten_'.$lang] ?>">
											<?=$item['ten_'.$lang] ?>
										</a>
									</h3>
								</div>
							</div>
						</div>		
					<?php } ?>
				</div>
				<div class="clearfix"></div>
				<div class="pagination-page">
				<?php echo @$phantrang['paging']?>
				</div>
			</div>
		</div>
	</div>
</section>