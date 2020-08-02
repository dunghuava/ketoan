<?php
	if(!isset($_SESSION)){
		session_start();
	}
	include "./smtp/index.php";
	date_default_timezone_set('Asia/Ho_Chi_Minh');

	if(isset($_POST['sub_email'])){
		$chuoi1 = strtolower($_SESSION['captcha_code']);
		$chuoi2 = strtolower($_POST['captcha']);
		if($chuoi1 == $chuoi2){
			$d->reset();
			$data['ho_ten'] = addslashes($_POST['ho_ten']);
			$data['email'] = addslashes($_POST['email']);
			$data['sdt'] = addslashes($_POST['so_dien_thoai']);
			$data['noi_dung'] = addslashes($_POST['noi_dung']);
			$data['dia_chi'] = addslashes($_POST['dia_chi']);
			$data['ngay_hoi'] = date('d-m-Y H:i:s');
			$data['trang_thai'] = '0';

			$d->setTable('#_lienhe');
				$noidung = "<div style='margin-bottom:5px;'>Bạn nhận được tin nhắn từ website: ".URLPATH." : </div>";
				$noidung .= "<div style='margin-bottom:5px;'>Thông tin: </div>";
				$noidung .= "<div style='margin-bottom:5px;'>Họ tên: ".$_POST['ho_ten']."</div>";
				$noidung .= "<div style='margin-bottom:5px;'>Địa chỉ: ".$_POST['dia_chi']."</div>";
				$noidung .= "<div style='margin-bottom:5px;'>Số điện thoại: ".$_POST['so_dien_thoai']."</div>";
				$noidung .= "<div style='margin-bottom:5px;'>Email: ".$_POST['mail']."</div>";
				// $noidung .= "<div style='margin-bottom:5px;'>Tiêu đề: ".$_POST['tieu_de']."</div>";
				$noidung .= "<div style='margin-bottom:5px;    line-height: 1.5;'>Content: ".$_POST['noi_dung']."</div>";
				$noidung .= "<div style='margin-bottom:5px;'>Date: ".date('d-m-Y h:i:s', time())."</div>";
				$noidung .= "<div style='color:red; margin-top:10px; font-style:italic; font-size:12px'>Đây là thư gửi tự động, vui lòng ko trả lời thư này!</div>";
			if($d->insert($data)) {
				// if(sendmail("Liên hệ từ website ".URLPATH, $noidung, $_POST['mail'] , $thongtin[0]['email'] ,  $data['ho_ten'])) {
				// }
				$d->alert("Gửi thành công!");
				$d->location(URLPATH);
			}
			else {
				$d->alert("Error!");
			}
		}else {
			$d->alert("Security code is incorrect");
		} 
	}
	$dulieu = $d->getTemplates(10);
?>
<style type="text/css">
	#map_contact{ height: 350px; }
	.map_title{ text-align: center; font-weight: bold; color: red; margin-bottom: 5px; }
</style>
<section>
	<div class="container bg-white">
		<div class="row10">
		<?php include("left.php");?>
			<div class="col-md-9 plr10">
				<div class="page-title">
					<div class="bg-white">
						<div class="col-md-12 plr0">
							<ul class="breadcrumb">
								<li><a href="<?=URLPATH ?>" title="<?=_trangchu?>"><?=_trangchu?></a></li>
								<li><a href="<?=URLPATH ?>lien-he.html" title="Liên hệ"><?=_lienhe?></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="contact-info">
					<div class="contact-form">
						<div class="col-sm-12 plr0 mb10">
							<?=$dulieu['noi_dung_'.$_SESSION['lang']];?>
						</div>
						<div class="config-map">
							<div id="map">	
								<?php if (!empty($information['map'])) { ?>
									<?=$information['map']?>
								<?php }else{ ?>
									<div id="map_contact"></div>
								<?php } ?>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="col-md-12 plr0">
							<div class="row">
								<form id="form-contact" method="post">
									<h3 class="title-contact">Thông tin liên hệ</h3>
									<div class="col-sm-6">
										<div class="form-group">
										<input type="text" id="ho_ten" name="ho_ten" class="form-control"  placeholder="<?=_hoten ?>">
										</div>
										<div class="form-group">
										<input type="text" id="dia_chi" name="dia_chi" class="form-control"  placeholder="<?=_address ?>">
										</div>
										<div class="form-group">
										<input type="email" id="email" name="email" class="form-control"  placeholder="Email">
										</div>
										<div class="form-group">
										<input type="text" id="so_dien_thoai" name="so_dien_thoai" class="form-control" placeholder="<?=_sodienthoai ?>">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="textarea-message">
										<textarea class="form-control" name="noi_dung" placeholder="Message" rows="3"></textarea>
										</div>
										<div class="form-group item-captcha">
											<div class="row10">
												 <div class="col-sm-8 plr10">
												 	<input type="text" class="form-control" id="captcha" name="captcha" style="background: url(./sources/capchaimage.php) center right no-repeat">
												 </div>
												 <div class="col-sm-4 plr10">
												 	<button class="form-control btn btn-success btn-send-contact" name="sub_email" type="submit"><?=_send ?> 
													<i class="fa fa-paper-plane"></i>
													</button>
												 </div>
											</div>
										</div>
										
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>				
			</div>
		</div>	
	</div>
</section>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDbYXUfyXrfWP46Zq7koC2u08xw_8So_ng&sensor=true"></script>
<script type="text/javascript">
   var map;
   var infowindow;
   var marker= new Array();
   var old_id= 0;
   var infoWindowArray= new Array();
   var infowindow_array= new Array();
    function initialize(){
       var defaultLatLng = new google.maps.LatLng(<?=$information['toa_do']?>);
       var myOptions= {
           zoom: 16,
           center: defaultLatLng,
           scrollwheel : false,
           mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById("map_contact"), myOptions);map.setCenter(defaultLatLng);
        
       var arrLatLng = new google.maps.LatLng(<?=$information['toa_do']?>);
       infoWindowArray[7895] = '<div class="map_description"><div class="map_title"><?=$information['company']?></div><div>Địa Chỉ : <?=$information['address']?></div></div>';
       loadMarker(arrLatLng, infoWindowArray[7895], 7895);     
       moveToMaker(7895);
    }
    function loadMarker(myLocation, myInfoWindow, id){
       	marker[id] = new google.maps.Marker({position: myLocation, map: map, visible:true,animation:google.maps.Animation.BOUNCE});
       var popup = myInfoWindow;infowindow_array[id] = new google.maps.InfoWindow({ content: popup});google.maps.event.addListener(marker[id], 'mouseover', function() {if (id == old_id) return;if (old_id > 0) infowindow_array[old_id].close();infowindow_array[id].open(map, marker[id]);old_id = id;});google.maps.event.addListener(infowindow_array[id], 'closeclick', function() {old_id = 0;});
    }
    function moveToMaker(id){
      	var location = marker[id].position;map.setCenter(location);if (old_id > 0) infowindow_array[old_id].close();infowindow_array[id].open(map, marker[id]);old_id = id;
    }
       
    google.maps.event.addDomListener(window, "load", initialize);
 </script>