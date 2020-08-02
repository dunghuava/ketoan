<?php
$ctsp = $d->o_fet("select * from #_sanpham where hien_thi = 1 and alias_".$_SESSION['lang']." = '".$com."'");
$property=explode('@1@',$ctsp[0]['property']);
if(count($ctsp) == 0) $d->location(URLPATH."404.html");

$sanpham = $d->o_fet("select * from #_sanpham where hien_thi = 1  and id <> '".@$ctsp[0]['id']."' and id_loai = '".@$ctsp[0]['id_loai']."' order by id desc limit 0,16");
$hinh_anh_sp = $d->o_fet("select * from #_sanpham_hinhanh where id_sp = '".@$ctsp[0]['id']."' order by id desc");

$list_color = $d->o_fet("select * from #_sanpham_phienban where type = 0 and id_sanpham = '".$ctsp[0]['id']."'");
$list_size = $d->o_fet("select * from #_sanpham_phienban where type = 1 and id_sanpham = '".$ctsp[0]['id']."'");

?>
<section class="detail">
<link href="<?=URLPATH?>templates/extra/magiczoomplus/magiczoomplus.css" rel="stylesheet" />
<script src="<?=URLPATH?>templates/extra/magiczoomplus/magiczoomplus.js"></script>
<div class="container bg-white">
	<div class="row10">	
		<?php include 'left.php'; ?>
		<div class="col-md-9 plr10">
			<div class="page-title">
				<div class="bg-white">
					<div class="col-md-12 plr0">
						<ul class="breadcrumb">
							<li><a href="<?=URLPATH ?>" title="<?=_trangchu?>"><i class="fa fa-home"></i></a></li>
							<?=$d->breadcrumb($ctsp[0]['id_loai'],$_SESSION['lang'],URLPATH)?>
						</ul>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="row10">
				<div class="col-md-6 plr10">
					<div class="owl-pro-slick">
						<a id="Zoomer" href="<?=URLPATH ?>img_data/images/<?=$ctsp[0]['hinh_anh'] ?>" title="<?=$ctsp[0]['ten_'.$_SESSION['lang']] ?>" class="MagicZoomPlus" rel="zoom-width:300px; zoom-height:300px;selectors-effect-speed: 600; selectors-class: Active;">
							<img onerror="this.src='<?=URLPATH ?>templates/error/error.jpg';"  src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$ctsp[0]['hinh_anh'] ?>&w=600&h=450&zc=2">
						</a>		
					</div>
					<div class="clearfix mb10"></div>
					<?php if(!empty($hinh_anh_sp)){ ?>
						<div id="sub_img_detail">
							<div class="list_sub_img_detail">
								<div class="owl_img_detail">
									<div class="col-md-3 plr5 item_owl_sub">
										<a href="<?=URLPATH ?>img_data/images/<?=$ctsp[0]['hinh_anh'] ?>" rel="zoom-id: Zoomer" rev="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$ctsp[0]['hinh_anh'] ?>&w=600&h=450&zc=2">
											<img src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$ctsp[0]['hinh_anh'] ?>&w=150&h=120"  class="w100" />
										</a>
									</div>
									<?php foreach ($hinh_anh_sp as $key => $item) { ?>
										<div class="col-md-3 plr5 item_owl_sub">
											<a href="<?=URLPATH ?>img_data/images/<?=$item['hinh_anh'] ?>" rel="zoom-id: Zoomer" rev="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$item['hinh_anh'] ?>&w=600&h=450&zc=2">
												<img src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$item['hinh_anh'] ?>&w=150&h=120" class="w100" />
											</a>
										</div>
									<?php } ?>
								</div><!--owl img detail-->
							</div>
						</div>
					<?php } ?>
				</div>

				<div class="col-md-6 plr10">
					<form method="post" action="<?=URLPATH."gio-hang.html" ?>">
						<input type="hidden" class="in-size" name="size" value="">
						<div class="box">
							<h1 class="bd-info name"><?=$ctsp[0]['ten_'.$_SESSION['lang']] ?></h1>
							<!-- <div class="bd-info ma-sp">
								<label><?=_masp?>: <?=$ctsp[0]['ma_sp']?></label>
							</div>	 -->
							<div class="bd-info gia-home">
								<div class="price <?=($ctsp[0]['khuyen_mai']>0)?'old-price':'';?>"><?=_price?>: <?=($ctsp[0]['gia']>0) ? $d->vnd($ctsp[0]['gia']) :  _lienhe;?></div>
								<?php if($ctsp[0]['khuyen_mai'] > 0){ ?>
									<span class="price-km"> <span><?= $d->vnd($ctsp[0]['khuyen_mai']) ?></span></span>
								<?php } ?>	
							</div>	
							<div class="clearfix mb10"></div>
						</div>
						<div class="form-add-cart">
							<input type="hidden" name="id" value="<?=$ctsp[0]['id'] ?>">
							<button type="submit" name="addcart" class="btn btn-danger addcart"><?=_buypro?></button>
							<div class="clearfix"></div>
						</div>
					</form>
					<div class="clearfix mb10"></div>
					<?php include("ct_share.php"); ?>
				</div>
				<div class="clearfix mb30"></div>
				<div class="col-md-12 plr10">
					<div class="thong_tin">
							<ul class="nav nav-tabs" role="tablist">
								<li class='active'><a href="#thong_tin_2" aria-controls="thong_tin_2" role="tab" data-toggle="tab"><?=_pro_detail?></a></li>
								<li ><a href="#thong_tin_5" aria-controls="thong_tin_5" role="tab" data-toggle="tab"><?=_comment?></a></li>
							</ul>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane fade in active" id="thong_tin_2">
									<?=$ctsp[0]['thong_tin_'.$_SESSION['lang']] ?>	
									<div class="clearfix mb15"></div>
								</div>
								<div role="tabpanel" class="tab-pane fade" id="thong_tin_5">			<div class="comment-facebook">
										<div class="fb-comments" data-href="<?=$url_page?>" data-numposts="5" data-width="100%"></div>
									</div>
								</div>
							</div>
					</div>
					<div class="clearfix mb20"></div>
					<!-- <div class="title-main title-font">
				        <h3><?=_pro_relative?></h3>
				    </div>
				    <div class="clearfix"></div>
				    <div class="row10">	
				    	<?php include("ct_product.php"); ?>	
				    </div>	
			    </div>		 -->	
			</div>				
		</div>	
		
	</div>	
</div>
</section>
<style type="text/css">
	button.style-bt{ position: absolute; top: 50%; margin-top: -20px; border: 0; background: #ddd; padding: 10px 5px; z-index: 99; outline: none; display: none; }
	button.bt-pre{ left: 10px; }
	button.bt-next{ right: 10px; }
	button.style-bt:hover{ background: #ccc; }
	.owl_img_detail:hover button.style-bt{ display: block; }
</style>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.owl_img_detail').slick({
		    slidesToShow: 5,
		    infinite: false,
		    prevArrow: "<button class='style-bt bt-pre'><i class='fa fa-chevron-left'></i></button>",
	        nextArrow: "<button class='style-bt bt-next'><i class='fa fa-chevron-right'></i></button>",
	  	});

	  	$('.choose-color > span').click(function(event) {
	  		var id = $(this).attr('rel');
	  		$('.choose-color').removeClass('selected');
	  		$(this).parent('.choose-color').addClass('selected');
	  		$('.in-color').val(id);
	  	});
	  	$('.choose-size > span').click(function(event) {
	  		var id = $(this).attr('rel');
	  		$('.choose-size').removeClass('selected');
	  		$(this).parent('.choose-size').addClass('selected');
	  		$('.in-size').val(id);
	  	});
	});
</script>

