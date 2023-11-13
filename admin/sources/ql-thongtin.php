<?php
if(!defined('_source')) die("Error");
$a = (isset($_REQUEST['a'])) ? addslashes($_REQUEST['a']) : "";

switch($a){
	case "man":
		showdulieu();
		$template = @$_REQUEST['p']."/them";
		break;
	case "save":
		luudulieu();
		break;
	default:
		$template = "index";
}
function showdulieu(){
	global $d, $items;
	if(isset($_REQUEST['p'])){
		$id = addslashes($_REQUEST['p']);
		$items = $d->o_fet("select * from #_thongtin limit 1");
	}
}

function luudulieu(){
	global $d;
	$file_name=$d->fns_Rand_digit(0,9,5);
	if(@$file = $d->upload_image("file", '', '../img_data/icon/',$file_name)){

		$hinhanh = $d->o_fet("select * from #_thongtin limit 1");
		@unlink('../img_data/icon/'.$hinhanh[0]['favicon']);
		$data['favicon'] = $file;

	}
	if(@$file2 = $d->upload_image("file_2", '', '../img_data/icon/','')){
		$hinhanh = $d->o_fet("select * from #_thongtin limit 1");
		@unlink('../img_data/icon/'.$hinhanh[0]['icon_share']);
		$data['icon_share'] = $file2;

	}

	if(@$file3 = $d->upload_image("file_3", '', '../img_data/icon/','')){
		$hinhanh = $d->o_fet("select * from #_thongtin limit 1");
		@unlink('../img_data/icon/'.$hinhanh[0]['logo']);
		$data['logo'] = $file3;

	}

	$data['company'] = addslashes($_POST['company']);
	$data['coppy_right'] = addslashes($_POST['coppy_right']);
	$data['footer_text'] = addslashes($_POST['footer_text']);
	$data['dien_thoai'] = addslashes($_POST['dien_thoai']);

	$d->reset();
	$d->setWhere("id","1");
	$d->setTable('#_thongtin');
	if($d->update($data)){
		$d->alert("Cập nhật dữ liệu thành công.");
		$d->redirect("index.php?p=".$_GET['p']."&a=man");
	}else{
		$d->alert("#ERR.");
		$d->redirect("index.php?p=".$_GET['p']."&a=man");
	}
}
?>