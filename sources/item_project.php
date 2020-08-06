<?php 
    if (!empty($data))
    {
    foreach ($data as $value){
        ?>
            <div class="col-md-<?=$col?>">
                <div class="item-project img-shine-4">
                    <a style="color: #000" href="<?=URLPATH.$value['alias_vn']?>.html" title="<?=$value['ten_vn']?>">
                        <div class="img_project img-shine-3">
                            <img class="img_error" src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$value['hinh_anh']?>&w=600&h=420&zc=0" alt="">
                        </div>
                        <div class="content_project">
                            <h3 class="title" style="text-align: center;font-size: 20px"><?=$value['ten_vn']?></h3>
                            <hr style="margin: 5px">
                            <div>
                                <?php 
                                    if(strlen($value['mo_ta_vn']) > 100){
                                        $trim_string = mb_substr($value['mo_ta_vn'], 0, 100,"UTF-8").'[...]';
                                        } else {
                                            $trim_string = $value['mo_ta_vn'];
                                        }
                                ?>
                                <?=$trim_string?>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        <?php
    }
    }else{
        include ('data_empty.php');
    }
?>
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