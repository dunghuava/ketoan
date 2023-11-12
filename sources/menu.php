<?php 
    $category = $d->o_fet('SELECT * FROM `db_category` WHERE hien_thi = 1 AND id_loai = 0 AND menu = 1 ORDER BY so_thu_tu ASC');
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <ul id="navbar" class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="<?=URLPATH?>"><i class="fa fa-home"></i> Trang chủ</a>
                </li>
                <?php 
                    foreach($category as $cate){
                        $sub1 = $d->o_fet('SELECT * FROM `db_category` WHERE hien_thi = 1 AND id_loai = '.$cate['id'].' AND menu = 1 ORDER BY so_thu_tu ASC');
                ?>
                <li class="nav-item <?=count($sub1) > 0 ? 'dropdown':''?>">
                    <a class="nav-link" href="<?=URLPATH?>category?cateID=<?=$cate['id']?>"><?=$cate['ten_vn']?></a>
                    <?php if(count($sub1)){ ?>
                    <ul class="sub-menu">
                        <?php foreach($sub1 as $cate1){ ?>
                        <li class="sub-item"><a href="<?=URLPATH?>category?cateID=<?=$cate1['id']?>"><?=$cate1['ten_vn']?></a></li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>