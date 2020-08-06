
<section class="sec-projects">
	<div class="container">
		<div class="text-center">
			<h3 class="title_main">Dự án nổi bật</h3>
			<p>Danh sách các dự án nổi bật, giá tốt nhất hiện nay.</p>
		</div>
		<div class="row">
			<?php

			//loai du an
			$loai = '1173';

			$sql = "select #_duan.* from #_duan inner join #_category on #_duan.id_loai=#_category.id where #_duan.hien_thi=1 and #_duan.tieu_bieu = 1 and #_category.id_loai = {$loai}   order by #_duan.id desc limit 0,6";
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
			<p>Danh sách các khu vực có các dự án nổi bật nhất hiện nay.</p>
		</div>
		<div class="col-md-2"></div>
		<div class="row">

			<?php
				$sql1= "select * from #_show_region where id_loai = {$loai}";
				$list_district = $d->o_fet($sql1);

				// $list_district = $data[0]['id_district'];
				// $list_district_format = explode(',', $list_district);
				include ('item_project_region.php'); 
			?>





			<!-- <?php for($i=0;$i<6;$i++){ ?>
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
			<?php } ?> -->
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
	$date = date('Ymd');
    $hours = (int)date("H");
    $time = $date.$hours;

    $id_loai_tintuc = '1177';
    // print_r($time);die();

	$sql1 = "select * from #_tintuc where hien_thi=1 and hen_ngay_dang <= $time and id_loai = {$id_loai_tintuc} order by noi_bat desc, id desc limit 0,4";
	$tintuc_noibat = $d->o_fet($sql1);
	$sql2 = "select * from #_tintuc where hien_thi=1 and hen_ngay_dang <= $time and id != {$tintuc_noibat[0]['id']} and id_loai = {$id_loai_tintuc} order by id desc limit 0,3";
	$data_tintuc = $d->o_fet($sql2);

?>
<section class="sec-news">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
				<div class="text-center col-md-8">
					<h3 class="title_main">Tin tức</h3>
					<p>Danh sách các tin tức mới nhất, nổi bật nhất.</p>
				</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="item_new_big img-shine-3">
					<a style="color:#fff" href="<?=$tintuc_noibat[0]['alias_vn']?>.html" title="<?=$data_tintuc[0]['ten_vn']?>">
						<div class="img_new_big">
							<img src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$tintuc_noibat[0]['hinh_anh']?>&w=800&h=450&zc=0">
						</div>
						<div class="content_new_big">
							<h3 class="title"><?=$tintuc_noibat[0]['ten_vn']?></h3>
							<p><?=date('d-m-Y',$tintuc_noibat[0]['ngay_dang'])?></p>
						</div>
					</a>
				</div>
				<br>
			</div>
			<div class="col-md-6">
				<div class="slick_news_small_">
					<?php foreach ($data_tintuc as $key => $tin){ 
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
					<?php } ?>
				</div>
				<a style="color:#000" href="<?=URLPATH?>tin-tuc.html">Xem tất cả <span class="fa fa-angle-right"></span></a>
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