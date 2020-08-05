<?php @include "sources/editor.php" ?>

<style type="text/css">
	.select2-selection{
		width: 500px;
		height: 120px;
	}

	.select2-container{
		width: 500px!important;
	}
</style>
<ol class="breadcrumb">
  <li><a href="<?=urladmin ?>"><i class="glyphicon glyphicon-home"></i> Trang chủ</a></li>
   <li class="active"><a href="<?=urladmin ?>index.php">Danh mục</a></li>
  <li class="active"><a href="<?=urladmin ?>index.php?p=khu-vuc&a=man">Chọn khu vục hiển hị</a></li>
  <li class="active"><a href="#"><?php if(isset($_GET['id'])) echo "Sửa "; else echo "Thêm mới" ?></a></li>
</ol>
<div class="col-xs-12">
<form name="frm" method="post" action="index.php?p=khu-vuc&a=save&id=<?=@$_REQUEST['id']?>&page=<?=@$_REQUEST['page']?>" enctype="multipart/form-data">

<div class="ar_admin">
	<div class="title_thongtinchung">
		Thông tin chung
	</div>
	<table class="table table-bordered table-hover them_dt" style="border:none">
		<tbody>
			<?php if(isset($_GET['id'])){ ?>
			<tr>
				<td class="td_left">
					Hình ảnh:
				</td>
				<td class="td_right">
					<?php if(@$items[0]['hinh_anh'] <> ''){ ?>
					<img src="../img_data/images/<?php echo @$items[0]['hinh_anh']?>"  width="120" alt="NO PHOTO" />
					<?php } ?>
				</td>
			</tr>
			<?php }?>
			<tr>
				<td class="td_left">
					Hình ảnh:
				</td>
				<td class="td_right">
					<?php if(@$items[0]['hinh_anh'] <> ''){ ?>
						<input type="file" name="file" class="input width400 form-control"/>
					<?php }else{ ?>
						<input type="file" name="file" class="input width400 form-control"/ required="">
					<?php } ?>
				</td>
			</tr>
			<!-- <tr>
				<td class="td_left">
					Hình ảnh slide:
				</td>
				<td class="td_right ">
					<div class="td_hinhanh">
					<?php 
						$hinhanh =  $d->o_fet("select * from #_baiviet_hinhanh where id_baiviet ='".$_GET['id']."'");
						foreach ($hinhanh as $val) {
					?>
					<div class="dv-img-ad">
						<img src="../img_data/images/<?php echo @$val['hinh_anh']?>" style="width:70px;height:70px;float:left;margin-right:5px"/>
						<div><?php echo @$val['title']?></div>
						<a style="margin-top:3px; display:block; position:absolute; bottom:5px; padding-left:15px;  right: 10px;" href="javascript:xoa_anh_sp('<?=$val['id']?>','<?=$val['id_baiviet']?>')" onclick="if(!confirm('Xác nhận xóa?')) return false;  "> Xóa ảnh </a>
					</div>
					<?php } ?>
					</div>
					<div class="add_img">

					</div>
					<div style="clear:both"></div>
					<div style=""><a href="javascript:them_anh()" style="  background-color: rgb(66, 139, 202);  padding: 5px 22px;  border-radius: 3px;  color: #fff;  text-decoration: none;">Thêm ảnh</a></div>
				</td>
			</tr> -->
				
			<tr>
				<td class="td_left">
					Danh mục:
				</td>
				<td class="td_right">
					<select name="id_loai" class="input width400 form-control" style="border-radius:4px" required="">
	    				<option value="">Chọn danh mục</option>
	    				<?php foreach ($list_category as $key => $category) {?>
							<option <?php if (@$items[0]['id_loai'] == $category['id']) echo "selected";?> value="<?php echo $category['id'] ?>"><?php echo $category['ten_vn'] ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>

			<tr>
				<td class="td_left">
					Chọn khu vực hiển thị:
				</td>
				<td class="td_right">
					<select name="id_district" id="id_district" class="input width400 form-control" style="border-radius:4px" required="">
						<!-- <?php foreach ($region as $key) { if ($key == $district['district_id']) echo "selected"; } ?> -->
	    				<option value="0">Chọn khu vực</option>
	    				<?php foreach ($list_district as $district) {?>
							<option <?php if (@$items[0]['id_district'] == $district['district_id']) echo "selected"; ?>  value="<?php echo $district['district_id'] ?>"><?php echo $district['district_name'] ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>

				<!-- <tr>
					<td class="td_left">
						Tác vụ: 
					</td>
					<td class="td_right">
						<input type="checkbox" class="chkbox" name="noi_bat" <?php if(isset($items[0]['noi_bat'])) { if(@$items[0]['noi_bat']==1) echo 'checked="checked"';else echo'';	}?> id="noi_bat"><label class="lb_nut" for="noi_bat">Tiêu biểu</label>
						<input type="checkbox" class="chkbox" name="hien_thi" <?php if(isset($items[0]['hien_thi'])) { if(@$items[0]['hien_thi']==1) echo 'checked="checked"';} else echo'checked="checked"'; ?> id="hien_thi"><label class="lb_nut" for="hien_thi">Hiển thị</label>
					</td>
				</tr> -->
				<tr>
					<td class="td_left" style="text-align:right">
					</td>
					<td class="td_right">
						<div class="luu">
							<input type="submit" value="Lưu"  class="btn btn-primary" />
						</div>
						<div class="luu thoat">
							<input type="button" value="Thoát" onclick="javascript:window.location='index.php?p=bai-viet&a=man'" class="btn btn-primary" />
						</div>
					</td>
				</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

</form>
</div>


<script>

	$(document).ready(function () {
        $('.select2').select2();
        $(".tags-field").select2({
            tokenSeparators: [','],
            tags: false,
        });
        $('input').attr('autocomplete','off');
    });

	function addText(text,target,title) {
		var str=$(text).val();
		var link=locdau(str);
		$(target).val(link);
		$(title).val(str);
	}

	function xoa_anh_sp(id,idsp){
		$.ajax({
		  url: "./sources/ajax_xoaanh_bv.php",
		  type:'POST',
		  data:"id="+id+"&idsp="+idsp,
		  success: function(data){
			  $(".td_hinhanh").html(data);
		  }
		})
	}

	var fs_img = 0;
	function them_anh(){
		fs_img++;
		if(fs_img < 16){
			$(".add_img").append('<div class="dv-img-ad hide_js_'+fs_img+'"><input type="hidden" name="txt_up_'+fs_img+'" class="txt_up_'+fs_img+'"  value="1"><input type="file" name="file_'+fs_img+'"><input type="text" name="title'+fs_img+'" placeholder="Tên sản phẩm" style="margin-top:5px;"/><a class="delete-img" href="javascript:;" onclick="xoa_anh_up(\''+fs_img+'\')"> Xóa </a></div>');
		}else{
			alert("Mỗi lần up tối đa 15 ảnh.");
		}
	}

	function xoa_anh_up(id){
		$(".hide_js_"+id).hide();
		$(".txt_up_"+id).val("0");

	}	
	
	// jQuery(document).ready(function($) {
	// 	$('.datepicker').datepicker({
	// 		format: 'dd-mm-yyyy'
	// 	});
	// });
</script>
<style type="text/css">
	.luu{ float: left; }
	.luu input{ margin-left: 0; margin-right: 10px; }
	.width150{ width: 150px; float: left;margin-right: 10px; }
	.sl-gio{ float: left; width: 150px; }
</style>