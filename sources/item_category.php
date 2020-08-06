<style>
	.item_category .title_cate{
		font-size: 18px;
		margin: 10px 0px;
		height: 38px;
		text-overflow: ellipsis;
		overflow: hidden;
		font-weight: bold;
	}
	.item_category img{
		border-radius:8px;
	}
	.item_category .title_des{
		height: 40px;
		overflow: hidden;
		text-overflow: ellipsis;
		width: -webkit-fill-available;
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
							<?php 
                                if(strlen($value['mo_ta_vn']) > 70){
                                    $trim_string = mb_substr($value['mo_ta_vn'], 0, 70,"UTF-8").' [...]';
                                        } else {
                                            $trim_string = $value['mo_ta_vn'];
                                        }
                                ?>
							<p class="title_des"><?=$trim_string?></p>
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