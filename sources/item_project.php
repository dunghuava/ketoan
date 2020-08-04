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
                            <h3 class="title"><?=$value['ten_vn']?></h3>
                            <p class="price">$ 450,000 $777 m<sup>2</sup></p>
                            <hr style="margin: 5px">
                            <div class="extends">
                                <li>3 phòng ngủ</li>
                                <li>2 wc</li>
                                <li>5 chỗ để xe</li>
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