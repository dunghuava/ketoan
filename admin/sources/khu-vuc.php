<?php
if(!defined('_source')) die("Error");
$a = (isset($_REQUEST['a'])) ? addslashes($_REQUEST['a']) : "";
switch($a){
	case "man":
		$list_category = getlistCategory();
		showdulieu();
		$template = @$_REQUEST['p']."/hienthi";
		break;
	case "add":
		$list_category = getlistCategory();
		$list_district = getlistDistrict();
		showdulieu();
		$template = @$_REQUEST['p']."/them";
		break;
	case "edit":
		$list_category = getlistCategory();
		$list_district = getlistDistrict();
		showdulieu();
		$template = @$_REQUEST['p']."/them";
		break;
	case "save":
		luudulieu();
		break;
	case "delete":
		xoadulieu();
		break;
	case "delete_all":
		xoadulieu_mang();
		break;
	default:
		$template = "index";
}
// function show_menu_tintuc_hd($menus = array(), $parrent = 0 ,&$chuoi = '')
// {
//       foreach ($menus as $val)
//       {
//           if ($val['id_loai'] == $parrent)
//           {
//              $chuoi .= $val['id'].',';
//               show_menu_tintuc_hd($menus, $val['id'],$chuoi);
//           }
//       }
//       return $chuoi;
// }

function getlistCategory() {
	global $d;
	$str = $d->o_fet("select * from #_category where id_loai = '0' ");
	return $str;
}

function getlistDistrict() {
	global $d;
	$str = $d->o_fet("select * from #_district where province_id = '1' ");
	return $str;
}

function showdulieu(){
	global $d, $items, $paging,$loai;
	$loai = $d->array_category(0,'',$_GET['id_loai'],3);
	
	if($_REQUEST['a'] == 'man'){

		//show du lieu
		if(isset($_GET['id_loai']) && $_GET['id_loai'] <> ''){
			
			if($_GET['id_loai'] == 0){
				$items = $d->o_fet("select * from #_show_region order by so_thu_tu asc, id desc");
			}else{
				$id_loai = $_GET['id_loai'].$d->findIdSub($_GET['id_loai']);	
			    $items = $d->o_fet("select * from #_show_region where FIND_IN_SET(id_loai,'$id_loai') <> 0 order by so_thu_tu asc, id desc");
			}
		}
		// else if(isset($_GET['seach'])){
		// 	$seach = addslashes($_GET['seach']);
		// 	$key = (isset($_GET['key']))? addslashes($_GET['key']):"";
		// 	if($seach == 'id'){
		// 		$items = $d->o_fet("select * from #_show_region where id = '".$key."'");
		// 	}else if($seach == 'name'){
		// 		$items = $d->o_fet("select * from #_show_region where ten_vn like '%".$key."%'");
		// 	}else{
		// 		$items = $d->o_fet("select * from #_show_region where ma_sp like '%".$key."%'");
		// 	}
		// }
		else $items = $d->o_fet("select * from #_show_region order by id_loai asc");

		// foreach ($items as $key => $value) {
		// 	watermark_image($value['hinh_anh'], '../img_data/images/');
		// }
		if(isset($_GET['hienthi'])){
			$maxR= $d->lay_show_hienthi(addslashes($_GET['hienthi']));
		}
		else $maxR=20;
		// phan trang
		$page = isset($_GET['page']) ? addslashes($_GET['page']) : 1;
		$url=$d->fullAddress();
		$maxP=$maxR;
		$paging=$d->phantrang($items, $url, $page, $maxR, $maxP,'classunlink','classlink','page');
		$items=$paging['source'];
		//
	}else{
				
		//lay noi dung theo id
		if(isset($_REQUEST['id'])){
			@$id = addslashes($_REQUEST['id']);
			$items = $d->o_fet("select * from #_show_region where id =  '".$id."'");
			// $loai = $d->array_category(0,'',$items[0]['id_loai'],3);
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
		$info = $d->o_fet("select * from #_show_region where id =  '".$id."'");

		if(@$file = $d->upload_image("file", '', '../img_data/images/',$file_name)){

			$hinhanh = $d->o_fet("select * from #_show_region where id = '".$id."'");
			foreach ($hinhanh as $ha) {
				@unlink('../img_data/images/'.$ha['hinh_anh']);
			}
			$data['hinh_anh'] = $file;
		}else{
			$data['hinh_anh'] = @$info[0]['hinh_anh'];
		}

		$data['id_loai'] = addslashes($_POST['id_loai']);
		
		$data['id_district'] = $_POST['id_district'];
		$data['hien_thi'] = 1;
		$data['so_thu_tu'] = 0;
		$d->o_que("delete from #_show_region where id_loai = '".$_POST['id_loai']."' and id_district = '".$_POST['id_district']."'");
		$d->setTable('#_show_region');
		if($idsp = $d->insert($data))
		{

	    	// SITEMAP
	    	$sitemap = '<?xml version="1.0" encoding="UTF-8"?>
				<urlset
				    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
				    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
				    xsi:schemaLocation="
				            http://www.sitemaps.org/schemas/sitemap/0.9
				            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
					<url>
				       <loc>'.@URLPATH.'</loc>
				       <priority>1</priority>
				  	</url>';

	

	
			$tintuc = $d->o_fet("select * from #_tintuc where hien_thi = 1 order by id desc");
			foreach ($tintuc as $item) {
				if(!empty($item['alias_vn'])){
					$sitemap .= '
						<url>
						 <loc>'.URLPATH.$d->create_long_link($item['alias_vn'],'vn').'.html</loc>
						 <priority>'.((float)rand(500, 800)/1000).'</priority>
						</url>';
				}

			}


			$category = $d->o_fet("select * from #_category where hien_thi = 1 order by so_thu_tu asc,id desc");
			foreach ($category as $item) {

				$sitemap .= '
					<url>
					 <loc>'.URLPATH.$d->create_long_link($item['alias_vn'],'vn').'.html</loc>
					 <priority>'.((float)rand(500, 800)/1000).'</priority>
					</url>';	

			}


			$sanpham = $d->o_fet("select * from #_duan where hien_thi = 1 order by so_thu_tu asc, id desc");
			foreach ($sanpham as $item) {
				

				$sitemap .= '
						<url>
						 <loc>'.URLPATH.$d->create_long_link($item['alias_vn'],'vn').'.html</loc>
						 <priority>'.((float)rand(500, 800)/1000).'</priority>
						</url>';

			}



			$sitemap .= '
			</urlset>';

			$file = fopen("../sitemap.xml","w+");
			fwrite($file, $sitemap);
			fclose($file);

			
			$d->redirect("index.php?p=khu-vuc&a=man&page=".@$_REQUEST['page']);
		}
		else{

			$d->alert("Cập nhật dữ liệu bị lỗi!");
			$d->redirect("Cập nhật dữ liệu bị lỗi", "index.php?p=khu-vuc&a=man");
		}
	}
	else
	{


		if(@$file = $d->upload_image("file", '', '../img_data/images/',$file_name)){
			
			$data['hinh_anh'] = $file;
		}
		
		$data['id_loai'] = addslashes($_POST['id_loai']);
		
		$data['id_district'] = $_POST['id_district'];
		$data['hien_thi'] = 1;
		$data['so_thu_tu'] = 0;

		
		// var_dump($data['hen_ngay']); die;
		$d->o_que("delete from #_show_region where id_loai = '".$_POST['id_loai']."' and id_district = '".$_POST['id_district']."'");
		$d->setTable('#_show_region');
		if($idsp = $d->insert($data))
		{
			/////up hinh
			

	    	// SITEMAP
	    	$sitemap = '<?xml version="1.0" encoding="UTF-8"?>
				<urlset
				    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
				    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
				    xsi:schemaLocation="
				            http://www.sitemaps.org/schemas/sitemap/0.9
				            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
					<url>
				       <loc>'.@URLPATH.'</loc>
				       <priority>1</priority>
				  	</url>';

	

	
			$tintuc = $d->o_fet("select * from #_tintuc where hien_thi = 1 order by id desc");
			foreach ($tintuc as $item) {
				$sitemap .= '
						<url>
						 <loc>'.URLPATH.$d->create_long_link($item['alias_vn'],'vn').'.html</loc>
						 <priority>'.((float)rand(500, 800)/1000).'</priority>
						</url>';

			}


			$category = $d->o_fet("select * from #_category where hien_thi = 1 order by so_thu_tu asc,id desc");
			foreach ($category as $item) {

				$sitemap .= '
					<url>
					 <loc>'.URLPATH.$d->create_long_link($item['alias_vn'],'vn').'.html</loc>
					 <priority>'.((float)rand(500, 800)/1000).'</priority>
					</url>';	

			}


			$sanpham = $d->o_fet("select * from #_duan where hien_thi = 1 order by so_thu_tu asc, id desc");
			foreach ($sanpham as $item) {
				

				$sitemap .= '
						<url>
						 <loc>'.URLPATH.$d->create_long_link($item['alias_vn'],'vn').'.html</loc>
						 <priority>'.((float)rand(500, 800)/1000).'</priority>
						</url>';

			}



			$sitemap .= '
			</urlset>';

			$file = fopen("../sitemap.xml","w+");
			fwrite($file, $sitemap);
			fclose($file);
					
			$d->redirect("index.php?p=khu-vuc&a=man");
		}
		else{
			$d->alert("Thêm dữ liệu bị lỗi!");
			$d->redirect("Thêm dữ liệu bị lỗi", "index.php?p=bai-viet&a=man&loaitin=".@$_GET['loaitin']);
		}
	}
}

function xoadulieu(){
	global $d;
	if(isset($_GET['id'])){
		$id =  addslashes($_GET['id']);
		$hinhanh = $d->o_fet("select * from #_show_region where id = '".$id."'");
		@unlink('../img_data/images/'.$hinhanh[0]['hinh_anh']);
		
		// end		
		$d->reset();
		$d->setTable('#_show_region');
		$d->setWhere('id',$id);
		if($d->delete()){
			$d->redirect("index.php?p=khu-vuc&a=man&page=".@$_REQUEST['page']);
		}else{
			$d->alert("Xóa dữ liệu bị lỗi!");
			$d->redirect("Xóa dữ liệu bị lỗi", "index.php?p=khu-vuc&a=man");
		}
	}else {
		$d->alert("Không nhận được dữ liệu!");
		$d->redirect("Xóa dữ liệu bị lỗi", "index.php?p=khu-vuc&a=man");
	}
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
		$hinhanh = $d->o_fet("select * from #_show_region where id in ($chuoi)");
		if($d->o_que("delete from #_show_region where id in ($chuoi)")){
			//xoa hình ảnh
			foreach ($hinhanh as $ha) {
				@unlink('../img_data/images/'.$ha['hinh_anh']);

			}	
			
			$d->redirect("index.php?p=khu-vuc&a=man&page=".@$_REQUEST['page']);
		}
		else{
			$d->alert("Không nhận được dữ liệu!");
			$d->redirect("Xóa dữ liệu bị lỗi", "index.php?p=khu-vuc&a=man");
		} 
	}else $d->redirect("index.php?p=khu-vuc&a=man&page=".@$_REQUEST['page']);
}
?>