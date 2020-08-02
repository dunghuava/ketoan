<?php
	$query=$d->simple_fetch("select id,ten_vn,alias_vn,mo_ta_vn from #_category where alias_{$_SESSION['lang']}='$com'");
	$id_loai=$query['id'];
	$all_id=$id_loai.$d->findIdSub($id_loai);

	if($id_loai == '') {
		$d->location(URLPATH."404.html");
	}
	$sanpham = $d->o_fet("select * from #_sanpham where hien_thi = 1  and id_loai in ( $all_id ) and style=0 order by so_thu_tu asc, id desc");

	if(isset($_GET['page']) && !is_numeric(@$_GET['page'])) {
		$d->location(URLPATH."404.html");
	}
	$curPage = isset($_GET['page']) ? addslashes($_GET['page']) : 1;
	$url= $d->fullAddress();
	$maxR= 24;
	$maxP=3;
	$phantrang=$d->phantrang($sanpham, $url, $curPage, $maxR, $maxP,'classunlink','classlink','page');
	$sanpham=$phantrang['source'];
	
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
					<?php 
						if(!empty($sanpham)){
							include("ct_product.php");
						}
						else{
							
						}
					 ?>
				</div>
				<div class="clearfix"></div>
				<div class="pagination-page">
				<?php echo @$phantrang['paging']?>
				</div>
			</div>
		</div>
	</div>
</section>