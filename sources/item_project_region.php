
<?php foreach ($list_district as $key => $district) {
	$sql1= "select * from #_district where district_id = {$district}";
	$info_district = $d->o_fet($sql1);
	if ($key<4) {
?>
	<div class="col-md-3">
		<div class="item-area">
			<a href="" title="">
				<div class="img_area">
					<img class="img_error" src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$value['hinh_anh']?>&w=600&h=420&zc=0" alt="">
				</div>
				<div class="content_area">
					<h3 class="title_area"><?=@$info_district[0]['district_name']?></h3>
					<p>4 Dự án</p>
				</div>
			</a>
		</div>
	</div>
<?php } } ?>