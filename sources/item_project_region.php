<?php
 foreach ($list_district as $key => $district) {
	$sql= "select * from #_district where district_id = {$district['id_district']}";
	$info_district = $d->o_fet($sql);
	$sql2= "select * from #_duan where district_id = {$district['id_district']}";
	$list_project = $d->o_fet($sql2);
	if ($key<4) {
?>
	<div class="col-md-3">
		<div class="item-area">
			<a href="" title="">
				<div class="img_area">
					<img class="img_error" src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$district['hinh_anh']?>&w=600&h=420&zc=0" alt="">
				</div>
				<div class="content_area">
					<h3 class="title_area"><?=@$info_district[0]['district_name']?></h3>
					<p><?php echo count($list_project) ?> Dự án</p>
				</div>
			</a>
		</div>
	</div>
<?php } } ?>