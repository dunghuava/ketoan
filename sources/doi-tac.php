<?php
  $doitac = $d->getImg(1155); 
?>
<style type="text/css">
  .marquee0 img{ padding: 5px; border: 1px solid #ccc; border-radius: 5px; }
</style>
<div class="clearfix"></div>
<section class="sec-partner">
  <div class="container p0">
    <div class="wrapper-partner">
      <div style="width:100%; margin:0 auto;">
          <div class="marquee" id="mycrawler2">
            <?php 
                foreach ($doitac as $dt) {
            ?>
          <a class="prods_pic_bg" href="<?=$dt['link'] ?>" >
                  <img onerror="this.src='./img/noImage.gif';" class="img_lkdoitac" src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$dt['picture'] ?>&w=160&h=85&zc=2" style="margin: 0px 5px;" />
              </a>
            <?php } ?>
        </div>
       </div>
    </div>
  </div>
</section>
<div class="clearfix mb20"></div>