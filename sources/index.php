<style type="text/css">
	section a{
		color: #000;
	}
	.sec-projects{
		background: #F4F6FD;
	}
	.item-project{
		background: white;
		border-radius: 8px;
		margin-bottom: 20px;
	}
	.item-project .img_project img{
		border-radius: 8px;
	}
	.item-project .content_project{
		padding: 15px;
	}
	.content_project .title{
		font-size: 18px;
		margin-top: 0px;
	}
	.content_project .extends li{
		display: inline-flex;
		width: 30%;
	}
</style>
<section class="sec-projects">
	<div class="container">
		<div class="text-center">
			<h3 class="title_main">Dự án nổi bật</h3>
			<p>Dự án đang cho thuê, chuyển nhượng giá tốt</p>
		</div>
		<div class="row">
			<?php for($i=0;$i<9;$i++){ ?>
			<div class="col-md-4">
				<div class="item-project">
					<a style="color: #000" href="" title="">
						<div class="img_project">
							<img src="<?=URLPATH?>img_data/b4838409525722.jpg" alt="">
						</div>
						<div class="content_project">
							<h3 class="title">Luxury Apartment In Chelsea</h3>
							<p class="price">$ 450,000 $777 m<sup>2</sup></p>
							<hr style="margin: 5px">
							<div class="extends">
								<li>3 phòng ngủ</li>
								<li>2 wc</li>
								<li>5 chỗ để xe</li>
							</div>
						</div>
					</a>
				</div>
			</div>
		   <?php } ?>
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
				<div class="col-md-4">
	                <div class="item-area">
	                	<a href="" title="">
	                		<div class="img_area">
	                			<img src="<?=URLPATH?>img_data/g1.jpg" alt="">
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
		width: 280px;
	}
	.item_news_small .c_left img{
		border-radius: 8px;
	}
	.item_news_small .c_right{
		padding: 0px 10px;
	}
	.item_news_small .c_right .title{
		margin: 0px;
		font-size: 18px;
	}
</style>
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
				<div class="item_new_big">
					<a href="" title="">
						<div class="img_new_big">
							<img src="<?=URLPATH?>img_data/img.jpg" alt="">
						</div>
						<div class="content_new_big">
							<h3 class="title">Dự án căn hộ Q2 Thao Dien chính thức được cất nóc sau gần 2 năm thi công</h3>
							<p>02/08/2020</p>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="slick_news_small">
					<?php for($i=0;$i<5;$i++){ ?>
						<div class="item_news_small">
							<a style="display: inline-flex;" href="" title="">
								<div class="c_left">
									<img src="<?=URLPATH?>img_data/img.jpg" alt="">
								</div>
								<div class="c_right">
									<h3 class="title">Dự án căn hộ Q2 Thao Dien chính thức được cất nóc sau gần 2 năm thi công</h3>
									<p>02/08/2020</p>
								</div>
							</a>
						</div>
					<?php } ?>
				</div>
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
	    verticalSwiping: false,
	  });
	});
</script>