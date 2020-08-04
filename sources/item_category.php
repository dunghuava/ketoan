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
				<div class="col-md-<?=$col?>">
					<div class="item_category">
						<a style="color:#000" href="<?=$value['alias_vn']?>.html" title="<?=$value['ten_vn']?>">
							<div class="img-shine-3">
								<img class="img_error" src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$value['hinh_anh']?>&w=600&h=420&zc=0">
							</div>
							<h3 class="title_cate"><?=$value['ten_vn']?></h3>
							<p><span class="fa fa-calendar"></span>&nbsp;<?=date('d/m/Y H:i',$value['ngay_dang'])?></p>
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
<div class="clearfix"></div>
<?php if(@$phantrang['paging'] <> ''){ ?>
	<div class="pagination-page">
		<?php echo @$phantrang['paging']?>
	</div>
<?php } ?>
<br>
<script>
		$('.img_error').on('error', function () {
			$(this).attr('src','<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/icon/noimg.png&w=600&h=420&zc=0')
		});
</script>