<?php foreach($sanpham as $item) {?>
	<div class="col-sm-3 col-xs-6 plr10">
		<div class="item-pro mb30">
			<div class="img-pro">
				<a class="img-shine-2" href="<?=URLPATH.$item['alias_'.$lang] ?>.html" title="<?=$item['ten_'.$lang] ?>">
				<img src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$item['hinh_anh'] ?>&w=300&h=320">				
				</a>
			</div>
			<div class="info">
				<h3>
					<a href="<?=URLPATH.$item['alias_'.$lang] ?>.html" title="<?=$item['ten_'.$lang] ?>">
						<?=$item['ten_'.$lang] ?>
					</a>
				</h3>
				<div class="price"><?=_price?>: <?=$item['gia']>0? $d->vnd($item['gia']):_lienhe?></div>
			</div>
		</div>
	</div>		
<?php } ?>