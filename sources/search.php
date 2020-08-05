<?php
	$q	 ='';
	$and ='';
	$url = $d->fullAddress();
	$url_param = substr($url,strpos($url,'?')+1);
	$url_param=explode('=',$url_param);
	$q=$url_param[1];
	$sql_search = "select id,ten_vn,hinh_anh,alias_vn,mo_ta_vn from #_duan where ten_vn like '%".$q."%' '".$and."' order by id desc";
	$data = $d->o_fet($sql_search);
?>

<style>
	.nav_search_top{
		width:100%;
		padding:5px 0px;
		border-bottom:1px solid #cccccc;
		border-top:1px solid #cccccc;
		background:#F3F4F7;
	}
	.mg0{margin:0px;}
	#frm_search{
		border:1px solid #cdcdcd;
		width:fit-content;
		padding-right:5px;
	}
	#frm_search *{
		border:0px;
		outline:none !important;
		border-radius:0px;
		box-shadow:none;
		background:#FFFFFF;
		margin-right:-4px;
	}
	#full_width{
		width:99.5%;
		margin:auto;
	}
	.plr0{
		padding-left:0px !important;
		padding-right:0px !important;
	}
</style>
<div class="hidden-xs">
	<br><br><br><br>
</div>
<section class="sec-search">
	<div id="full_width" class="container">
		<div class="row">
			<div class="col-md-12 plr0">
				<div class="nav_search_top">
					<form id="frm_search" class="form-group form-inline mg0" action="" method="post">
						<select name="" id="" class="form-control">
							<option value="">Dự án</option>
							<option value="">Cho thuê</option>
							<option value="">Mua bán</option>
						</select>
						<input style="width:400px" type="search" class="form-control" value="<?=$q?>" placeholder="Tìm kiếm dự án">
						<button style="color:#5F8640" class="btn btn-primary form-control"><span class="fa fa-search"></span></button>
					</form>
				</div>
			</div>
			<div class="col-md-7" style="height:450px;overflow-y:scroll"><br>
				<div class="row">
					<?php
						$col=6;
						include ('item_project.php') 
					?>
				</div>
			</div>
			<div class="col-md-5 plr0">
				<!-- maps -->
				<div id="googleMap" style="width:100%;height:450px;"></div>
				<script>
					var lat = 100;
					var lng  = 100;
					function initMap() {
						var myLatLng = {lat: lat, lng: lng};

						var map = new google.maps.Map(document.getElementById('googleMap'), {
							zoom: 15,
							center: myLatLng,
						});
						var marker = new google.maps.Marker({
							position: myLatLng,
							map: map,
						});
						marker.addListener("click", () => {
							infowindow.open(map, marker);
						});
					}
				</script>
				<!-- maps -->
			</div>
		</div>
	</div>
</section>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqAHaMV9ZVcSX992nMQOgZ_Vy80GUZ_8I&callback=initMap&libraries=drawing,places"></script>
<script>
	$('#frm_search').submit(function (e) { 
		e.preventDefault();
		
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