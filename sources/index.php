<style type="text/css">
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
					<a href="" title="">
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
	}
	.item-area img{
		border-radius: 8px;
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
	                		</div>
	                	</a>
	                </div>
                </div>
			<?php } ?>
		</div>
	</div>
</section>