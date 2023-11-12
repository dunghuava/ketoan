<?php @include "sources/editor.php" ?>
<ol class="breadcrumb">
  <li><a href="<?=URLPATH."admin" ?>"><i class="glyphicon glyphicon-home"></i> Trang chủ</a></li>
  <li class="active"><a href="<?=URLPATH."admin" ?>/index.php">Hiển thị</a></li>
  <li class="active"><a href="<?=URLPATH."admin" ?>/index.php?p=<?=@$_REQUEST['p']?>&a=man">Ql thông tin</a></li>
</ol>
<div class="col-xs-12">
<form name="frm" method="post" action="index.php?p=<?=@$_REQUEST['p']?>&a=save&id=<?=@$_REQUEST['id']?>&page=<?=@$_REQUEST['page']?>" enctype="multipart/form-data">

<div class="bs-example bs-example-tabs" data-example-id="togglable-tabs">

	<ul id="myTabs" class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active">
			<a href="#id_viet" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Ngôn ngữ VN</a>
		</li>
		<!-- <li role="presentation" class="">
			<a href="#id_us" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">Ngôn ngữ US</a>
		</li> -->
	</ul>
	<div id="myTabContent" class="tab-content">
		<div role="tabpanel" class="tab-pane fade active in" id="id_viet" aria-labelledby="home-tab">
			<div class="ar_admin">
				<table class="table table-bordered table-hover them_dt" style="border:none;">
					<tbody>
				        <tr>
							<td class="td_left">
								Tên công ty:
							</td>
							<td class="td_right">
								<input class="input form-control  width400"  name="company" value="<?php echo @$items[0]['company']?>"  />
							</td>
						</tr>
						<tr>
							<td class="td_left">
								Logo:
							</td>
							<td class="td_right">
								<?php if($items[0]['logo'] <> ''){ ?>
								<img src="../img_data/icon/<?php echo @$items[0]['logo']?>"  width="50" alt="NO PHOTO" />
								<?php } ?>
							</td>
						</tr>
						<tr>
							<td class="td_left">
								
							</td>
							<td class="td_right">
								<input type="file" name="file_3" class="input width400 form-control"/>
							</td>
						</tr>
						<tr>
							<td class="td_left">
								Favicon:
							</td>
							<td class="td_right">
								<?php if($items[0]['favicon'] <> ''){ ?>
								<img src="../img_data/icon/<?php echo @$items[0]['favicon']?>"  width="50" alt="NO PHOTO" />
								<?php } ?>
							</td>
						</tr>
						<tr>
							<td class="td_left">
								
							</td>
							<td class="td_right">
								<input type="file" name="file" class="input width400 form-control"/>
							</td>
						</tr>
						<tr>
							<td class="td_left">
								Icon Chia sẻ:
							</td>
							<td class="td_right">
								<?php if($items[0]['icon_share'] <> ''){ ?>
								<img src="../img_data/icon/<?php echo @$items[0]['icon_share']?>"  width="50" alt="NO PHOTO" />
								<?php } ?>
							</td>
						</tr>
						<tr>
							<td class="td_left">
								
							</td>
							<td class="td_right">
								<input type="file" name="file_2" class="input width400 form-control"/>
							</td>
						</tr>
						<tr>
							<td class="td_left">
								Thông tin footer:
							</td>
							<td class="td_right">
								<textarea class="input form-control  width400"  name="footer_text"><?php echo @$items[0]['footer_text']?></textarea>
								<?php $ckeditor->replace('footer_text'); ?>
							</td>
						</tr>
						<tr>
							<td class="td_left">
								Copyright:
							</td>
							<td class="td_right">
								<input class="input form-control"  name="coppy_right" value="<?php echo @$items[0]['coppy_right']?>"/>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="ar_admin last">
			<table class="table table-bordered table-hover them_dt" style="border:none">
				<tr>
					<td class="td_left" style="text-align:right">
						<input type="submit" value="Lưu" class="btn btn-primary" />
					</td>
					<td class="td_right">
						<input type="button" value="Thoát" onclick="javascript:window.location='index.php'" class="btn btn-primary" />
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
</form>
</div>