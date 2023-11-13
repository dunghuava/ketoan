<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-2">
                <a href="<?=URLPATH?>">
                    <img src="<?=URLPATH?>/img_data/icon/<?php echo @$information['logo']?>" alt="">
                </a>
            </div>
            <div class="col-md-10">
                <h4 class="mb-0"><?=$information['company']?></h4>
            </div>
        </div>
    </div>
</header>
<? include _source.'menu.php' ?>