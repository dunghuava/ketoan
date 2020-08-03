<?php @include "sources/editor.php" ?>
<style type="text/css">
	.dv-img-ad {
    	width: 260px;
	}

	a.delete-img {
    display: inline-block;
    clear: both;
    padding: 3px 5px;
    background: #cb0606;
    color: #fff;
    position: absolute;
    bottom: 0px;
    right: 0;
    border-radius: 4px;
}

.img_addimage {
    position: relative;
    height: 100%;
}

.img_addimage img {
    max-width: 100%;
    max-height: 100%;
}

.btn-danger {
    color: #fff;
    background-color: #d9534f;
    border-color: #d43f3a;
    margin-left: 6px;
    width: 32px;
}

</style>

<ol class="breadcrumb">
  <li><a href="<?=urladmin ?>"><i class="glyphicon glyphicon-home"></i> Trang chủ</a></li>
   <li class="active"><a href="<?=urladmin ?>index.php">Danh mục</a></li>
  <li class="active"><a href="<?=urladmin ?>index.php?p=san-pham&a=man">Dự án</a></li>
  <li class="active"><a href="#"><?php if(isset($_GET['id'])) echo "Sửa"; else echo "Thêm mới" ?></a></li>
</ol>
<div class="col-xs-12">
<form name="CHm" method="post" action="index.php?p=san-pham&a=save&id=<?=@$_REQUEST['id']?>&page=<?=@$_REQUEST['page']?>" enctype="multipart/form-data">


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
					<?php if($items[0]['hinh_anh'] <> ''){ ?>
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
					<input type="file" name="file2" class="input width400 form-control"/>
				</td>
			</tr>
			<tr>
				<td class="td_left">
					Hình ảnh slide:
				</td>
				<td class="td_right ">
					<div class="td_hinhanh">
					<?php 
						$hinhanh =  $d->o_fet("select * FROM #_sanpham_hinhanh where id_sp ='".$_GET['id']."'");
						foreach ($hinhanh as $val) {
					?>
					<div class="dv-img-ad">
						<div class="img_addimage">
							<img src="../img_data/images/<?php echo @$val['hinh_anh']?>">
						</div>
						<div class="icon_deleteimage">
							<a href="javascript:xoa_anh_sp('<?=$val['id']?>','<?=$val['id_sp']?>')" onclick="if(!confirm('Xác nhận xóa?')) return false;  "><img src="public/images/delete.png" alt="Delete"></a>
						</div>
						<div class="name_addimg"><?php echo @$val['title']?></div>
					</div>
					<?php } ?>
					</div>
					<div class="add_img">

					</div>
					<div style="clear:both"></div>
					<div style=""><a href="javascript:them_anh()" style="  background-color: rgb(66, 139, 202);  padding: 5px 22px;  border-radius: 3px;  color: #fff;  text-decoration: none;">Thêm ảnh</a></div>
				</td>
			</tr>
			<tr>
				<td class="td_left">
					Danh mục:
				</td>
				<td class="td_right">
					<select name="id_loai" class="input width400 form-control" style="border-radius:4px">
	    				<option value="0">Chọn danh mục</option>
						<?=$loai?>
					</select>
				</td>
			</tr>
			
		</tbody>
	</table>
</div>
<div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">
	<ul id="myTabs" class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active">
			<a href="#id_viet" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Thông tin chi tiết</a>
		</li>
		<!-- <li role="presentation" class="">
			<a href="#id_us" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Ngôn ngữ EN</a>
		</li> -->
		<!--li role="presentation" class="">
			<a href="#id_ch" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Ngôn ngữ Japan</a>
		</li-->
		<li role="presentation" class="">
			<a href="#id_seo" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Hỗ trợ SEO</a>
		</li>
	</ul>
	<div id="myTabContent" class="tab-content">
		<div role="tabpanel" class="tab-pane fade active in" id="id_viet" aria-labelledby="home-tab">
		<!-- //lang viet -->
		<div class="ar_admin">
			<table class="table table-bordered table-hover them_dt" style="border:none">
				<tbody>
					<tr>
						<td class="td_left">
							Tiêu đề :
						</td>
						<td class="td_right">
							<input class="input width400 form-control" OnkeyUp="addText(this,'#alias_vn','#title_vn')"  id="ten_vn" name="ten_vn" value="<?php echo @$items[0]['ten_vn']?>"  />
						</td>
					</tr>
					<tr>
						<td class="td_left">
							Đường dẫn:
						</td>
						<td class="td_right">
							<input class="input width400 form-control" name="alias_vn" id="alias_vn" value="<?php echo @$items[0]['alias_vn']?>"   OnkeyUp="addText(this,'#alias_vn')" />
						</td>
					</tr>
					
					<tr>
						<td class="td_left">
							Mô tả:
						</td>
						<td class="td_right">
							<textarea class="input width400 form-control" style="height:80px" name="mo_ta_vn" id="mo_ta_vn"><?=@$items[0]['mo_ta_vn']?></textarea>
						</td>
					</tr>

					<tr>
							<td class="td_left">Địa chỉ</td>
							<td class="td_right">
								<div >
									<input style="margin:0px;" name="project_address" value="<?=@$items[0]['address']?>" type="text" class="input width400 form-control">
								</div>
								<br>
								<div>
									<select name="province_id" id="province_id" class="input width400 form-control" style="width: 30%!important;display: inline-block;">
										<option value="">Chọn Thành phố - Tỉnh</option>
										<?php foreach ($list_province as $prv){ ?>
											<option value="<?=$prv['province_id']?>"><?=$prv['province_name']?></option>
										<?php } ?>
									</select>
									<span>&nbsp;</span>
									<select name="district_id" id="district_id" class="input width400 form-control" style="width: 30%!important;display: inline-block;">
										<option value="">Chọn Quận - Huyện</option>
									</select>
									<span>&nbsp;</span>
									<select name="ward_id" id="ward_id" class="input width400 form-control" style="width: 30%!important;display: inline-block;">
										<option value="">Chọn Phường - Xã</option>
									</select>
								</div>
							</td>
						</tr>


						<tr>
							<td class="td_left">Tiện ích</td>
							<td class="td_right">
								<select multiple="multiple" name="project_extend_text[]" id="project_extend_text" class="input width400 form-control tags-field">
									
									<?php
										$project_extend_text = explode(',', @$items[0]['extend_text']);
											foreach ($project_extend_text as $pr){
											if ($pr!=''){
									?>
											<option selected value="<?=$pr?>"><?=$pr?></option>
									<?php 
											} 
										}
									?>
								</select>
								<p style="fonr-size:12px;margin-top:5px;color:#9d9d9d9d;margin-bottom:0px">Ví dụ: Chỗ đậu xe, Hồ bơi, Công viên, Wifi ... </p>
							</td>
						</tr>
						<tr>
							<td class="td_left">Tòa nhà</td>
							<td class="td_right">
								<select multiple="multiple" name="project_building[]" id="project_building" class="input width400 form-control tags-field">
									<?php
										$project_building = explode(',',@$items[0]['building']);
										foreach ($project_building as $pr){
											if ($pr!=''){
									?>
											<option selected value="<?=$pr?>"><?=$pr?></option>
									<?php 
											}
										}
									?>
								</select>
								<p style="fonr-size:12px;margin-top:5px;color:#9d9d9d9d;margin-bottom:0px">Ví dụ: Vinhome, Gigamall ... </p>
							</td>
						</tr>


						<tr>
							<td class="td_left">Tổng quan dự án</td>
							<td class="td_right" id="form_add_row">
								<div class="form-row">
									<input value="<?=@$extend[0]['extend_key']?>" placeholder="Tên loại" name="extend_key[]" type="text" class="input width400 form-control" style="width: 30%;display: inline-block;">
									<input value="<?=@$extend[0]['extend_value']?>" placeholder="Nội dung" name="extend_value[]" type="text" class="input width400 form-control" style="width: 30%;display: inline-block;">
									<input id="btn_add_row" type="button" value="+" class="btn btn-primary" autocomplete="off">
								</div>
									<?php foreach ($extend as $key => $ex){
									  if ($key>0){ 
								?>
										<div class="form-row">
											<input placeholder="Tên loại" name="extend_key[]" type="text"   value="<?=$ex['extend_key']?>" class="input width400 form-control" style="width: 30%;display: inline-block;">
											<input placeholder="Nội dung" name="extend_value[]" type="text" value="<?=$ex['extend_value']?>" class="input width400 form-control" style="width: 30%;display: inline-block;">
											<input type="button" class="btn btn-danger btn_delete_row" value="-">
										</div>
								<?php } } ?>
								
							</td>
						</tr>

		
					<tr>
						<td class="td_left">
							Thông tin nội dung:
						</td>
						<td class="td_right">
							<textarea  name="thong_tin_vn" id="thong_tin_vn"><?=@$items[0]['thong_tin_vn']?></textarea>
							<?php $ckeditor->replace('thong_tin_vn'); ?>
						</td>
					</tr>
                    
				</tbody>
			</table>
		</div>
		<!-- end -->
		</div>
		<div role="tabpanel" class="tab-pane fade" id="id_us" aria-labelledby="profile-tab">
		<!-- lang us -->
		<div class="ar_admin">
			<table class="table table-bordered table-hover them_dt" style="border:none">
				<tbody>		
					<tr>
						<td class="td_left">
							Tiêu đề (en):
						</td>
						<td class="td_right">
							<input class="input width400 form-control" OnkeyUp="addText(this,'#alias_us','#title_us')" id="ten_us" name="ten_us" value="<?php echo @$items[0]['ten_us']?>"  />
						</td>
					</tr>

					<tr>
						<td class="td_left">
							Đường dẫn (en):
						</td>
						<td class="td_right">
							<input class="input width400 form-control" name="alias_us" id="alias_us" value="<?php echo @$items[0]['alias_us']?>"  OnkeyUp="addText(this,'#alias_us')"  />
						</td>
					</tr>

					<tr>
						<td class="td_left">
							Mô tả (en):
						</td>
						<td class="td_right">
							<textarea  class="input width400 form-control" style="height:80px" name="mo_ta_us" id="mo_ta_us"><?=@$items[0]['mo_ta_us']?></textarea>
						</td>
					</tr>
				
					
					<tr>
						<td class="td_left">
							Nội dung chi tiết (en):
						</td>
						<td class="td_right">
							<textarea  name="thong_tin_us" id="thong_tin_us"><?=@$items[0]['thong_tin_us']?></textarea>
							<?php $ckeditor->replace('thong_tin_us'); ?>
						</td>
					</tr>
				</tbody>
			</table>
		<!-- end -->
		</div>
		</div>
		
		<div role="tabpanel" class="tab-pane fade" id="id_ch" aria-labelledby="profile-tab">
		<!-- lang ch -->
		<div class="ar_admin">
			<table class="table table-bordered table-hover them_dt" style="border:none">
				<tbody>		
					<tr>
						<td class="td_left">
							Tiêu đề (ja):
						</td>
						<td class="td_right">
							<input class="input width400 form-control"OnkeyUp="addText(this,'#alias_ch','#alias_ch')" id="ten_ch" name="ten_ch" value="<?php echo @$items[0]['ten_ch']?>"  />
						</td>
					</tr>

					<tr>
						<td class="td_left">
							Đường dẫn (ja):
						</td>
						<td class="td_right">
							<input class="input width400 form-control" name="alias_ch" id="alias_ch" value="<?php echo @$items[0]['alias_ch']?>" OnkeyUp="addText(this,'#alias_ch')"  />
						</td>
					</tr>

					<tr>
						<td class="td_left">
							Mô tả (ja):
						</td>
						<td class="td_right">
							<textarea  class="input width400 form-control" style="height:80px" name="mo_ta_ch" id="mo_ta_ch"><?=@$items[0]['mo_ta_ch']?></textarea>
						</td>
					</tr>
				
					
					<tr>
						<td class="td_left">
							Nội dung chi tiết (ja):
						</td>
						<td class="td_right">
							<textarea  name="thong_tin_ch" id="thong_tin_ch"><?=@$items[0]['thong_tin_ch']?></textarea>
							<?php $ckeditor->replace('thong_tin_ch'); ?>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<!-- end -->
		</div>
		
		<div role="tabpanel" class="tab-pane fade" id="id_seo" aria-labelledby="profile-tab">
		<!-- /seo -->
		<div class="ar_admin">
			<table class="table table-bordered table-hover them_dt" style="border:none">
				<tbody>
					<tr>
						<td class="td_left">
							Title:
						</td>
						<td class="td_right">
							<input class="input width400 form-control" autocomplete="off"  type="text" name="title_vn" id="title_vn" value="<?php echo @$items[0]['title_vn']?>"  />
						</td>
					</tr>
					<!--tr>
						<td class="td_left">
							Title (en):
						</td>
						<td class="td_right">
							<input class="input width400 form-control" autocomplete="off"  type="text" name="title_us" id="title_us" value="<?php echo @$items[0]['title_us']?>"  />
						</td>
					</tr-->
					<!--tr>
						<td class="td_left">
							Title (ja):
						</td>
						<td class="td_right">
							<input class="input width400 form-control" autocomplete="off"  type="text" name="title_ch" id="title_ch" value="<?php echo @$items[0]['title_ch']?>"  />
						</td>
					</tr-->
					<tr>
						<td class="td_left">
							Keyword:
						</td>
						<td class="td_right">
							<textarea class="input width400 form-control"  style="height:70px" name="keyword" id="keyword"><?=@$items[0]['keyword']?></textarea>
						</td>
					</tr>
					
					<tr>
						<td class="td_left">
							Description:
						</td>
						<td class="td_right">
							<textarea class="input width400 form-control"  style="height:70px" name="des" id="des"><?=@$items[0]['des']?></textarea>
						</td>
					</tr>
				</tbody>
			</table>
		<!-- end -->
		</div>
		</div>


		<div class="ar_admin last">
			<table class="table table-bordered table-hover tv them_dt" style="border:none">
				<tbody>
					<tr>
						<td class="td_left tv">
							Tác vụ: 
						</td>
						<td class="td_right">
							<!-- <input type="checkbox" class="chkbox" name="sp_hot" <?php if(isset($items[0]['sp_hot'])) { if(@$items[0]['sp_hot']==1) echo 'checked="checked"';else echo'';	}?> id="sp_hot"><label class="lb_nut" for="sp_hot">Home</label>  -->

							<!-- <input type="checkbox" class="chkbox" name="sp_moi" <?php if(isset($items[0]['sp_moi'])) { if(@$items[0]['sp_moi']==1) echo 'checked="checked"';else echo'';	}?> id="sp_moi"><label class="lb_nut" for="sp_moi">Nổi bật</label> -->
							<!-- <input type="checkbox" class="chkbox" name="tieu_bieu" <?php if(isset($items[0]['tieu_bieu'])) { if(@$items[0]['tieu_bieu']==1) echo 'checked="checked"';else echo'';	}?> id="tieu_bieu"><label class="lb_nut" for="tieu_bieu">Bánh khác</label> -->
							<input type="checkbox" class="chkbox" name="hien_thi" <?php if(isset($items[0]['hien_thi'])) { if(@$items[0]['hien_thi']==1) echo 'checked="checked"';} else echo'checked="checked"'; ?> id="hien_thi"><label class="lb_nut" for="hien_thi">Hiển thị</label>
						</td>
					</tr>
					<div class="clear"></div>
					<tr>
						<td class="td_left tv" style="text-align:right">
						</td>
						<td class="td_right">
							<input type="submit" value="Lưu" class="btn btn-primary"/>
							<input type="button" value="Thoát" onclick="javascript:window.location='index.php?p=san-pham&a=man'" class="btn btn-primary" />
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

	$('#btn_add_row').click(function (e) { 
			e.preventDefault();
		    var html ='<div class="form-row">';
				html+='<input placeholder="Tên loại" autocomplete="off" name="extend_key[]" type="text" class="input width400 form-control" style="width: 30%;display: inline-block;"> ';
				html+='<input placeholder="Nội dung" autocomplete="off" name="extend_value[]" type="text" class="input width400 form-control" style="width: 30%;display: inline-block;"> ';
				html+='<input type="button" value="-" class="btn btn-danger btn_delete_row" autocomplete="off"></div>';
				$('#form_add_row').append(html);
		});

	$(document).on('click','.btn_delete_row',function(e){
			if (confirm('delete ?')){
				$(this).parents('.form-row').remove();
			}
		});


		var province_id = <?=@$items[0]['province_id'] !='' ? @$items[0]['province_id']:0 ?>;
		var district_id = <?=@$items[0]['district_id'] !='' ? @$items[0]['district_id']:0?>;
		var ward_id 	= <?=@$items[0]['ward_id']     !='' ? @$items[0]['ward_id']:0?>;

		$('#province_id').val(province_id);
		if (district_id>0){
			$.ajax({
				type: "post",
				url: "./sources/ajax_province.php",
				data: {'district_id':district_id, 'province_id':province_id},
				success: function (response) {
					$('#district_id').html(response);
				}
			});
		}
		if (ward_id>0){
			$.ajax({
				type: "post",
				url: "./sources/ajax_district.php",
				data: {'ward_id':ward_id,'district_id':district_id},
				success: function (response) {
					$('#ward_id').html(response);
				}
			});
		}




	$('#province_id').change(function (e) { 
		var district_id = '';
			e.preventDefault();
			$.ajax({
				type: "post",
				url: "./sources/ajax_province.php",
				data: {'district_id':district_id,'province_id':$(this).val()},
				success: function (response) {
					$('#district_id').html(response);
					$('#district_id').trigger('change');
				}
			});
		});


	$('#district_id').change(function (e) { 
		var ward_id = '';
			e.preventDefault();
			$.ajax({
				type: "post",
				url: "./sources/ajax_district.php",
				data: {'ward_id':ward_id,'district_id':$(this).val()},
				success: function (response) {
					$('#ward_id').html(response);
				}
			});
		});
		


	$(document).ready(function () {
        $('.select2').select2();
        $(".tags-field").select2({
            tokenSeparators: [','],
            tags: true,
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
		  url: "./sources/ajax_xoaanh_sp.php",
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
			$(".add_img").append('<div class="dv-img-ad hide_js_'+fs_img+'"><input type="hidden" name="txt_up_'+fs_img+'" class="txt_up_'+fs_img+'"  value="1"><input type="file" class="file_img" name="file_'+fs_img+'"><a class="delete-img" href="javascript:;" onclick="xoa_anh_up(\''+fs_img+'\')"> Xóa </a></div>');
		}else{
			alert("Mỗi lần up tối đa 15 ảnh.");
		}
	}

	function xoa_anh_up(id){
		$(".hide_js_"+id).hide();
		$(".txt_up_"+id).val("0");

	}
	function gia_khuyen_mai(obj,val){
		var gia = $(obj).val();
		var km = "";
		if(gia == '') gia = 0;
		$.ajax({
			url: "./sources/giakm.php",
			type:'POST',
			data:"gia="+gia+"&khuyenmai="+km,
			success: function(data){
				$(val).html(data);
			}
		})
	}
	
	
</script>

