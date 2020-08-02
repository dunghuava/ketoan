<?php
	$time_cur = time();

	if($com=='tags') {
		$tags=addslashes($_REQUEST['alias']);
		$query = $d->simple_fetch("select * from #_tags where alias = '$tags'");
		$tintuc = $d->o_fet("select  * from #_tintuc where hien_thi = 1 and tags_hienthi like '%".$query['ten_vn']."%' order by so_thu_tu asc, id desc");
	}
	else {
		$loai = $d->simple_fetch("select * from #_category where hien_thi = 1 and alias_{$lang} = '$com'");

		if(count($loai) == 0) $d->location(URLPATH."404.html");
		$id_sub=substr($d->findIdSub($loai['id'],1),1);
		
		$id_loai=$loai['id'].$d->findIdSub($loai['id']);
		$tintuc = $d->o_fet("select * from #_tintuc where hien_thi = 1 and hen_ngay_dang < '".time()."' and FIND_IN_SET(id_loai,'$id_loai') <> 0 order by so_thu_tu asc, id desc");
	}
   if(isset($_GET['page']) && !is_numeric(@$_GET['page'])) $d->location(URLPATH."404.html");
  
    $curPage = isset($_GET['page']) ? addslashes($_GET['page']) : 1;
    $url= $d->fullAddress();
    $maxR=25;
    $maxP=5;
    $phantrang=$d->phantrang($tintuc, $url, $curPage, $maxR, $maxP,'classunlink','classlink','page');
    $tintuc=$phantrang['source'];

?>
<section>
	<div class="container bg-white">	        
		<div class="row10">       	
			<?php include("left.php"); ?>			
			<div class="col-md-9 plr10">
				<div class="page-title">
					<div class="col-md-12 plr0">
						<ul class="breadcrumb">
							<li><a href="<?=URLPATH ?>" title="<?=_trangchu?>"><?=_trangchu?></a></li>
							<?php if($com!='tags') {?>
							<?=$d->breadcrumb($loai['id'],$lang,URLPATH)?>
							<?php } else { ?>
							<li><a href="<?=URLPATH ?>tags/<?=$tags?>.html" title="Tìm theo <?=$tags?>">Tag: <?=$tags?></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
				<div class="clearfix"></div>
				<?php if($com!='tags' && !empty($loai['mo_ta_'.$lang])){ ?>	
					<!-- <div class="des-module">
						<?= $loai['mo_ta_'.$lang]; ?>			
					</div>
					<div class="clearfix mb10"></div> -->
				<?php } ?>
				<div class="box-item module row0">
					<?php foreach ($tintuc  as $i => $item) { ?>					
						<div class="item-content-row" >
							<div class="img">
								<a href="<?=URLPATH.$item['alias_'.$lang] ?>.html" title="<?=@$item['ten_'.$lang] ?>">
								<img src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$item['hinh_anh']?>&w=150&h=120" alt="<?=@$item['ten_'.$lang] ?>" onerror="this.src='<?=URLPATH ?>templates/error/error.jpg';">
								</a>
							</div>
							<div class="content">
								<h3 class="name"><a href="<?=URLPATH.$item['alias_'.$lang] ?>.html" title="<?=@$item['ten_'.$lang] ?>"><?=@$item['ten_'.$lang] ?></a></h3>
								<div class="quote hidden-xs"><?=$d->catchuoi_new(strip_tags($item['mo_ta_'.$lang]),350) ?></div>
							</div>
						</div>
					<?php } ?>
					<div class="clearfix"></div>
					<div class="pagination-page">
						<?php echo @$phantrang['paging']?>
					</div>								
				</div>				
			</div>
		</div>		
	</div>
</section>

