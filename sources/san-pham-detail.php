<?php
	$ctsp = $d->o_fet("select * from #_duan where hien_thi = 1 and alias_".$_SESSION['lang']." = '".$com."'");
	$property=explode('@1@',$ctsp[0]['property']);
	if(count($ctsp) == 0) $d->location(URLPATH."404.html");

	$sanpham = $d->o_fet("select * from #_duan where hien_thi = 1  and id <> '".@$ctsp[0]['id']."' and id_loai = '".@$ctsp[0]['id_loai']."' order by id desc limit 0,16");
	$hinh_anh_sp = $d->o_fet("select * from #_duan_hinhanh where id_sp = '".@$ctsp[0]['id']."' order by id desc");
	$sanpham_extend = $d->o_fet("select * from #_tienich where project_id='".$ctsp[0]['id']."'");
?>
<div class="hidden-xs">
	<br><br><br><br>
</div>
<div class="title_project">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 style="margin:4px 0px;"><?=$ctsp[0]['ten_vn']?></h3>
				<p style="color:#7b7b7a"><?=$ctsp[0]['address']?></p>
			</div>
		</div>
	</div>
</div>
<section class="slide-project">
	<div id="slide_project_img">
	<div class="item_slider">
		<img class="img_error" src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$ctsp[0]['hinh_anh']?>&w=450&h=350&zc=0">
	</div>
	<?php 
		foreach ($hinh_anh_sp as $ha){
			?>
				<div class="item_slider">
					<img src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$ha['hinh_anh']?>&w=450&h=350&zc=0">
				</div>
			<?php
		}
	?>
	</div>
</section>

<style>
	.nav_top_prj{
		width:100%;
		box-shadow: 0 2px 5px 0 rgba(0,0,0,.07);
	}
	.nav_top_prj ul{
		padding:0px;
		margin:0px;
	}
	.nav_top_prj ul li{
		list-style: none;
		display: inline-flex;
		padding: 15px 15px 15px 0px;
		font-weight: bold;
		cursor:pointer;
		border-bottom:2px solid white;
	}
	.nav_top_prj ul li:hover{
		border-bottom:2px solid red;
	}
	.extend li{
		width: 20%;
		list-style: none;
		display: inline-flex;
		margin-bottom: 15px;
		font-size: 15px;
	}
	.panel-title{
		font-size:18px;
	}
	.panel-title a{color:#000}
	.panel-body li{
		list-style:none;
		display:inline-flex;
		width:20%;
	}
	#form-contact{
	border:1px solid #dcdcdc;
	padding:0px;
	}
	.form-head{
		padding:15px;
		background:#F3F4F7;
	}
	.form-body{
		padding:15px;
	}
	.form-body .button{
		padding:8px;
		border:1px solid #cccccc;
		background:none;
		width:100%;
		margin-bottom:5px;
		font-size:15px;
		font-weight:bold;
		float:none;
	}
	.button:hover{
		background:#30333A;
		color:#fff;
	}
</style>
<section class="content_project">
	<div class="nav_top_prj">
		<div class="container" style="padding:0px">
			<div class="row">
				<div class="col-md-12">
					<ul>
						<li>Tổng quan</li>
						<li>Vị trí</li>
						<li>Dự án lân cận</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="content_ct">
		<div class="container" style="margin-top: 10px">
			<div class="row">
				<div class="col-md-9">
					<div class="extend">
						<div class="container__">
							<?php foreach ($sanpham_extend as $extend){ ?>
								<li>©&nbsp;<?=$extend['extend_key']?></li>
								<li><b><?=$extend['extend_value']?></b></li>
							<?php } ?>
						</div>
					</div>
					<h3 style="margin:5px 0px">Giới thiệu</h3>
					<span><?=$ctsp[0]['mo_ta_vn']?></span>
					<!-- tab -->
					<br><br>
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#extends">
								Tiện ích dự án</a>
							</h4>
							</div>
							<div id="extends" class="panel-collapse collapse in">
							<div class="panel-body">
								<?php
									$str_content='';
									$extend_text = $ctsp[0]['extend_text'];
									$extend_text = explode(',',$extend_text);
									foreach ($extend_text as $ex){
										$str_content.='<li> <span style="color:green">✔</span>&nbsp;'.$ex.'</li>';
										echo '<li> <span style="color:green">✔</span>&nbsp;'.$ex.'</li>';
									}
								?>
							</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#project">
								Thôn tin chi tiết</a>
							</h4>
							</div>
							<div id="project" class="panel-collapse collapse">
							<div class="panel-body"><?=$ctsp[0]['thong_tin_vn']?></div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#location">
								Vị trí dự án</a>
							</h4>
							</div>
							<div id="location" class="panel-collapse collapse">
							<div class="panel-body_">
								<div id="googleMap" style="width:100%;height:360px;"></div>
								<script>
									var lat = <?=$ctsp[0]['lat']!='' ? $ctsp[0]['lat']:0?>;
									var lng  = <?=$ctsp[0]['lng']!='' ? $ctsp[0]['lng']:0?>;
									function initMap() {
										var myLatLng = {lat: lat, lng: lng};

										var map = new google.maps.Map(document.getElementById('googleMap'), {
											zoom: 15,
											center: myLatLng,
											icon:false,
										});
										var contentString='<h4><?=$ctsp[0]['ten_vn']?></h4><p><?=substr($ctsp[0]['mo_ta_vn'],0,150)?>...</p>';
										const infowindow = new google.maps.InfoWindow({
    										content: contentString
  										});
										var marker = new google.maps.Marker({
											position: myLatLng,
											map: map,
											icon:false,
											title: '<?=$ctsp[0]['ten_vn']?>',
										});
										infowindow.open(map, marker);
										marker.addListener("click", () => {
											infowindow.open(map, marker);
										});
									}
								</script>
							</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#building">
								Tòa nhà</a>
							</h4>
							</div>
							<div id="building" class="panel-collapse collapse">
							<div class="panel-body">
								<?php 
									$building = explode(',',$ctsp[0]['building']);
									foreach ($building as $ex){
										echo '<li> <span style="color:green">✔</span>&nbsp;'.$ex.'</li>';
									}
								?>
							</div>
							</div>
						</div>
						</div>
					<!-- tab -->
				</div>
				<div class="col-md-3">
					<div action="" id="form-contact">
						<div class="form-head">
							<span></span>
							<h4>Admin</h4>
							<span>Real Estate Consultant</span>
						</div>
						<div class="form-body">
								<a href="tel:0383868205">
									<button class="button" style="background:red;color:#fff">0383868205</button>
								</a>
								<div class="text-center" style="margin:5px 0px;font-size:12px">Hoặc</div>
								<button onclick="$('#modal-title').html($(this).html())" data-toggle="modal" data-target="#exp" class="button">Đăng kí xem mẫu nhà</button>
								<button onclick="$('#modal-title').html($(this).html())" data-toggle="modal" data-target="#exp" class="button">Đăng kí nhận bảng giá</button>
								<button onclick="$('#modal-title').html($(this).html())" data-toggle="modal" data-target="#exp" class="button">Hỏi thêm thông tin</button>
						</div>
				</div>
				<br>
			</div>
		</div>
	</div>
</section>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqAHaMV9ZVcSX992nMQOgZ_Vy80GUZ_8I&callback=initMap&libraries=drawing,places"></script>
<script>
	$('.img_error').on('error', function () {
		$(this).attr('src','<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/icon/noimg.png&w=450&h=350&zc=0')
	});
	$(document).ready(function () {
		$('#navbar_fix_top').addClass('sticky');
		$('#slide_project_img').slick({
			dots: false,
			autoplay:true,
			slidesToShow: 3,
			slidesToScroll: 1,
		});
	});
	window.onscroll = function() {}
</script>
