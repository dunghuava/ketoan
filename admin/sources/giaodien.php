<?php
if(!defined('_source')) die("Error");
$a = (isset($_REQUEST['a'])) ? addslashes($_REQUEST['a']) : "";
switch($a){
	case "man":
		showdulieu();
		$template = @$_REQUEST['p']."/hienthi";
		break;
	case "add":
		showdulieu();
		$template = @$_REQUEST['p']."/them";
		break;
	case "edit":
		showdulieu();
		$template = @$_REQUEST['p']."/them";
		break;
	case "save":
		luudulieu();
		break;
	case "delete":
		xoadulieu();
		break;
	case "delete_image":
		xoadulieu_image();
		break;
	case "delete_all":
		xoadulieu_mang();
		break;
	default:
		$template = "index";
}

function showdulieu(){
	global $d, $items, $paging ;

	if($_REQUEST['a'] == 'man'){


		$items = $d->o_fet("select * from #_setting order by id asc");

		if(isset($_GET['hienthi'])){
			$maxR= $d->lay_show_hienthi(addslashes($_GET['hienthi']));
		}
		else $maxR=35;
		// phan trang
		$page = isset($_GET['page']) ? addslashes($_GET['page']) : 1;
		$url=$d->fullAddress();
		$maxP= $maxR;
		$paging=$d->phantrang($items, $url, $page, $maxR, $maxP,'classunlink','classlink','page');
		$items=$paging['source'];
		//
	}else{
		//lay noi dung theo id
		if(isset($_REQUEST['id'])){
			@$id = addslashes($_REQUEST['id']);
			$items = $d->o_fet("select * from #_setting where id =  '".$id."'");
		}
	}
}

function luudulieu(){
	global $d;
	@include('resize_img.php');
	$image = new SimpleImage();

	$id = (isset($_REQUEST['id'])) ? addslashes($_REQUEST['id']) : "";
	$file_name=$d->fns_Rand_digit(0,9,12);
	if($id != '')
	{

		if(@$file = $d->upload_image("file", '', '../img_data/images/',$file_name)){

			$hinhanh = $d->o_fet("select * from #_setting where id = '".$id."'");
			foreach ($hinhanh as $ha) {
				@unlink('../img_data/images/'.$ha['hinh_anh']);
			}
			$data['hinh_anh'] = $file;
		}

		$data['ten_vn'] =$d->clear(addslashes($_POST['ten_vn']));
		$data['ten_us'] =$d->clear(addslashes($_POST['ten_us']));
		$data['ten_ch'] =$d->clear(addslashes($_POST['ten_ch']));
		// $data['noi_dung_vn'] = $d->clear(addslashes($_POST['noi_dung_vn']));
		$data['noi_dung_vn'] = $_POST['noi_dung_vn'];
		$data['noi_dung_us'] = $d->clear(addslashes($_POST['noi_dung_us']));
		$data['noi_dung_ch'] = $d->clear(addslashes($_POST['noi_dung_ch']));
		$data['hien_thi'] = isset($_POST['hien_thi']) ? 1 : 0;


		$d->setTable('#_setting');
		$d->setWhere('id',$id);
		if($d->update($data)){
			$d->redirect("index.php?p=giaodien&a=man&page=".@$_REQUEST['page']);
		}
		else{
			$d->alert("Cập nhật dữ liệu bị lỗi!");
			$d->redirect("Cập nhật dữ liệu bị lỗi", "index.php?p=giaodien&a=man");
		}
	}
	else
	{


		if(@$file = $d->upload_image("file", '', '../img_data/images/',$file_name)){
			
			$data['hinh_anh'] = $file;
		}

		$data['ten_vn'] =$d->clear(addslashes($_POST['ten_vn']));
		$data['ten_us'] =$d->clear(addslashes($_POST['ten_us']));
		$data['ten_ch'] =$d->clear(addslashes($_POST['ten_ch']));
		$data['noi_dung_vn'] = $d->clear(addslashes($_POST['noi_dung_vn']));
		$data['noi_dung_us'] = $d->clear(addslashes($_POST['noi_dung_us']));
		$data['noi_dung_ch'] = $d->clear(addslashes($_POST['noi_dung_ch']));
		$data['hien_thi'] = isset($_POST['hien_thi']) ? 1 : 0;


		$d->setTable('#_setting');
		
		if($d->insert($data))
		{
			$d->redirect("index.php?p=giaodien&a=man");
		}
		else{

			$d->alert("Thêm dữ liệu bị lỗi!");
			$d->redirect("Thêm dữ liệu bị lỗi", "index.php?p=giaodien&a=man");
		}
	}
}

function xoadulieu(){
	global $d;
	if(isset($_GET['id'])){
		$id =  addslashes($_GET['id']);
		$hinhanh = $d->o_fet("select * from #_setting where id = '".$id."'");
		@unlink('../img_data/images/'.$hinhanh[0]['hinh_anh']);

		$d->reset();
		$d->setTable('#_setting');
		$d->setWhere('id',$id);
		if($d->delete()){
			$d->redirect("index.php?p=giaodien&a=man&page=".@$_REQUEST['page']);
		}else{
			$d->alert("Xóa dữ liệu bị lỗi!");
			$d->redirect("Xóa dữ liệu bị lỗi", "index.php?p=giaodien&a=man");
		}
	}else {
		$d->alert("Không nhận được dữ liệu!");
		$d->redirect("Xóa dữ liệu bị lỗi", "index.php?p=giaodien&a=man");
	}
}
function xoadulieu_image(){
	global $d;
	if(isset($_GET['id'])){
		$id =  addslashes($_GET['id']);
		$hinhanh = $d->o_fet("select * from #_setting where id = '".$id."'");
		@unlink('../img_data/images/'.$hinhanh[0]['hinh_anh']);
		$datahinh['hinh_anh'] = '';
		$d->reset();
		$d->setTable('#_setting');
		$d->setWhere('id',$id);
		if($d->update($datahinh)){
			$d->redirect("index.php?p=giaodien&a=man&page=".@$_REQUEST['page']."");
		}else{
			$d->transfer("Xóa dữ liệu bị lỗi", "index.php?p=giaodien&a=man");
		}
	}else $d->transfer("Không nhận được dữ liệu", "index.php?p=giaodien&a=man");
}
function xoadulieu_mang(){
	global $d;
	if(isset($_POST['chk_child'])){
		$chuoi = "";
		foreach ($_POST['chk_child'] as $val) {
			$chuoi .=$val.',';
		}
		$chuoi = trim($chuoi,',');
		//lay danh sách idsp theo chuoi
		$hinhanh = $d->o_fet("select * from #_setting where id in ($chuoi)");
		if($d->o_que("delete from #_setting where id in ($chuoi)")){
			//xoa hình ảnh
			foreach ($hinhanh as $ha) {
				@unlink('../img_data/images/'.$ha['hinh_anh']);

			}
			$d->redirect("index.php?p=giaodien&a=man&page=".@$_REQUEST['page']);
		}
		else{
			$d->alert("Không nhận được dữ liệu!");
			$d->redirect("Xóa dữ liệu bị lỗi", "index.php?p=giaodien&a=man");
		} 
	}else $d->redirect("index.php?p=giaodien&a=man&page=".@$_REQUEST['page']);
}
?>