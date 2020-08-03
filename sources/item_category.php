<style>
	.item_category .title_cate{
		font-size:18px;
		margin:10px 0px;
	}
	.item_category img{
		border-radius:8px;
	}
</style>
<div class="container">
	<div class="row">
		<?php
			if (!empty($data))
			{
				foreach ($data as $value)
				{
			?>
				<div class="col-md-4">
					<div class="item_category">
						<a style="color:#000" href="<?=$value['alias_vn']?>.html" title="<?=$value['ten_vn']?>">
							<img src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/b4838409525722.jpg&w=600&h=420&zc=2">
							<h3 class="title_cate"><?=$value['ten_vn']?></h3>
							<p><?=$value['mo_ta_vn']?>&nbsp;&nbsp;[...]</p>
						</a>
					</div>
				</div>
			<?php
				}
			}else{
				include ('data_empty.php');
			}
		?>
	</div>
</div>
<br>