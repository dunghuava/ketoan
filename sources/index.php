
<section class="sec-projects">
	<div class="container">
		<div class="text-center">
			<h3 class="title_main">Dự án nổi bật</h3>
			<p>Dự án đang cho thuê, chuyển nhượng giá tốt</p>
		</div>
		<div class="row">
			<?php
				$sql= "select * from #_sanpham where hien_thi=1 order by id desc limit 0,6";
				$data = $d->o_fet($sql);
				$col=3;
				include ('item_project.php') 
			?>
		</div>
	</div>
</section>


<style type="text/css">
	.item-area{
		border-radius: 8px;
		position: relative;
		margin-bottom: 25px;
	}
	.item-area a{
		color: #fff;
	}
	.item-area img{
		border-radius: 8px;
	}
	.item-area .content_area{
		border-radius: 8px;
		position: absolute;
		bottom: 0px;
		left: 0px;
		padding: 15px;
		background: linear-gradient(to bottom, rgba(0, 0, 0, 0.01) 0, rgba(0, 0, 0, 0.09) 11%, rgba(0, 0, 0, 0.12) 13%, rgba(0, 0, 0, 0.19) 20%, rgba(0, 0, 0, 0.29) 28%, rgba(0, 0, 0, 0.29) 29%, rgba(0, 0, 0, 0.42) 38%, rgba(0, 0, 0, 0.46) 43%, rgba(0, 0, 0, 0.53) 47%, rgba(0, 0, 0, 0.75) 69%, rgba(0, 0, 0, 0.87) 84%, rgba(0, 0, 0, 0.98) 99%, rgba(0, 0, 0, 0.94) 100%);
		transition: all .5s ease 0s;
		width: 100%;
	}
	.item-area:hover .content_area{
		padding-bottom: 45px;
	}
	.content_area .title{
		font-weight: bold;
	}

</style>
<section class="sec-project-area">
	<div class="container">
		<div class="col-md-2"></div>
		<div class="text-center col-md-8">
			<h3 class="title_main">Dự án theo khu vực</h3>
			<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam.</p>
		</div>
		<div class="col-md-2"></div>
		<div class="row">
			<?php for($i=0;$i<6;$i++){ ?>
				<div class="col-md-3">
	                <div class="item-area">
	                	<a href="" title="">
	                		<div class="img_area">
	                			<img class="img_error" src="<?=URLPATH?>img_data/g1.jpg" alt="">
	                		</div>
	                		<div class="content_area">
	                			<h3 class="title_area">Quận <?=$i?></h3>
	                			<p>4 Dự án</p>
	                		</div>
	                	</a>
	                </div>
                </div>
			<?php } ?>
		</div>
	</div>
</section>

<style type="text/css">
	.sec-news{
		background: #F4F6FD;
	}
	.item_new_big a{
		color: #fff;
	}
	.item_new_big{
		border-radius: 8px;
		position: relative;
		box-shadow: 0px 0px 21px 4px rgba(0,0,0,0.08);
    	transition: 0.3s all;
	}
	.item_new_big img{
		border-radius: 8px;
	}
	.item_new_big .content_new_big{
		position: absolute;
		bottom: 0px;
		left: 0px;
		width: 100%;
		padding: 15px;
		background: linear-gradient(180deg,transparent,rgba(0,0,0,.9));
		border-radius: 8px;
	}
	.content_new_big .title{
		font-size: 18px;
	}
	.item_news_small{
		display: inline-flex;
		margin-bottom: 10px;
	}
	.item_news_small .c_left{
		float:left;
		width:160px !important;
	}
	.item_news_small .c_left img{
		border-radius: 8px;
	}
	.item_news_small .c_right{
		padding: 0px 10px;
		float:left;
		width:280px;
	}
	.item_news_small .c_right .title{
		margin: 0px;
		font-size: 17px;
	}
</style>
<?php 
	$sql = "select * from #_tintuc where hien_thi=1 order by id desc limit 0,4";
	$data_tintuc = $d->o_fet($sql);
?>
<section class="sec-news">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
				<div class="text-center col-md-8">
					<h3 class="title_main">Tin tức</h3>
					<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam.</p>
				</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="item_new_big img-shine-3">
					<a style="color:#fff" href="<?=$data_tintuc[0]['alias_vn']?>.html" title="<?=$data_tintuc[0]['ten_vn']?>">
						<div class="img_new_big">
							<img src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$data_tintuc[0]['hinh_anh']?>&w=800&h=450&zc=0">
						</div>
						<div class="content_new_big">
							<h3 class="title"><?=$data_tintuc[0]['ten_vn']?></h3>
							<p><?=date('d-m-Y',$data_tintuc[0]['ngay_dang'])?></p>
						</div>
					</a>
				</div>
				<br>
			</div>
			<div class="col-md-6">
				<div class="slick_news_small_">
					<?php foreach ($data_tintuc as $key => $tin){ 
						if ($key>0){	
					?>
						<div style="display:flex" class="item_news_small img-shine-4">
							<a style="color: #000;display:flex" href="<?=$tin['alias_vn']?>.html" title="<?=$tin['ten_vn']?>">
								<div class="c_left">
									<img src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$tin['hinh_anh']?>&w=200&h=120&zc=0">
								</div>
								<div class="c_right">
									<h3 class="title"><?=$tin['ten_vn']?></h3>
									<p><?=date('d-m-Y',$tin['ngay_dang'])?></p>
								</div>
							</a>
						</div>
					<?php } } ?>
				</div>
				<a style="font-size:12px;color:#000" href="<?=URLPATH?>tin-tuc.html">Xem tất cả <span class="fa fa-angle-right"></span></a>
			</div>
		</div>
	</div>
</section>

<script type="text/javascript">
	$(document).ready(function() {
	  $('.slick_news_small').slick({
	    dots: false,
	    vertical: true,
	    autoplay:true,
	    prevArrow: false,
	    nextArrow: false,
	    slidesToShow: 3,
	    slidesToScroll: 1,
	  });
	});
</script>