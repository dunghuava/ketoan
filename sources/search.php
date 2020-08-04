<?php
	$t = addslashes($_REQUEST['textsearch']);
	$s_type = 1;
	$sanpham = $d->o_fet("select * from #_duan where hien_thi = 1 and ten_{$lang} like '%".$t."%' order by id desc");
	if($s_type == 1){
		$sanpham = $d->o_fet("select * from #_tintuc where hien_thi = 1 and ten_{$lang} like '%".$t."%' order by id desc");
	}

	$name = _ketquatimkiem. " (".count($sanpham).")";
    if(isset($_GET['page']) && !is_numeric(@$_GET['page'])) $d->location(URLPATH."404.html");
    
    $curPage = isset($_GET['page']) ? addslashes($_GET['page']) : 1;
    $url= $d->fullAddress();
    $maxR=20;
    $maxP=5;
    $phantrang=$d->phantrang($sanpham, $url, $curPage, $maxR, $maxP,'classunlink','classlink','page');
    $sanpham=$phantrang['source'];

?>
<section>	
	<div class="container bg-white">
		<div class="row10">			
			<?php include "left.php"; ?>
			<div class="col-md-9 plr10">
				<div class="page-title">
					<div class="col-md-12 plr0">
						<ul class="breadcrumb">
							<li><a href="<?=URLPATH ?>" title="<?=_trangchu?>"><i class="fa fa-home"></i></a></li>
							<li><a title="<?=_search?>"><?=_search?></a></li>
						</ul>
					</div>
				</div>	
				<h4 class="title-module"><span><?=$name?></span></h4>
				<div class="clearfix"></div>
				<div class="box-item module row10">
					<?php if($s_type == 1){ ?>
						<?php foreach ($sanpham  as $i => $item) { ?>					
							<div class="item-content-row" >
								<div class="img">
									<a href="<?=URLPATH.$item['alias_'.$lang]?>.html" title="<?=@$item['ten_'.$lang] ?>">
									<img src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$item['hinh_anh']?>&w=150&h=120" alt="<?=@$item['ten_'.$lang] ?>" onerror="this.src='<?=URLPATH ?>templates/error/error.jpg';">
									</a>
								</div>
								<div class="content">
									<h3 class="name"><a href="<?=URLPATH.$item['alias_'.$lang] ?>.html" title="<?=@$item['ten_'.$lang] ?>"><?=@$item['ten_'.$lang] ?></a></h3>
									<div class="quote hidden-xs"><?=$d->catchuoi_new(strip_tags($item['mo_ta_'.$lang]),350) ?></div>
								</div>
							</div>
						<?php } ?>
					<?php } else { ?>
						<?php include("ct_product.php"); ?>	
					<?php } ?>										
				</div>
				<div class="clearfix"></div>
				<?php if(@$phantrang['paging'] <> ''){ ?>
					<div class="pagination-page">
						<?php echo @$phantrang['paging']?>
					</div>
				<?php } ?>	
			</div>	
		</div>		
	</div>	
</section>