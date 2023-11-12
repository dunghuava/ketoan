<?php 
    $categoryById = $d->simple_fetch('SELECT * FROM `db_category` WHERE hien_thi = 1 AND tieu_bieu = 1 AND id = '.$_GET['cateID'].' LIMIT 1');
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-3">
            <div class="aside">
                <? include _source . 'aside.php' ?>
            </div>
        </div>
        <div class="col-9">
            <div class="main-contain">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data</li>
                            </ol>
                        </nav>
                    </div>
                    <?php for($i=0;$i<10;$i++){ ?>
                    <div class="col-4 mb-4">
                        <a href="<?=URLPATH?>chitietsp?id=1">
                            <div class="card card-product">
                                <div class="card-body img-shine-2">
                                    <img src="<?=ASSET_PATH?>va-com.jpg" alt="">
                                </div>
                                <div class="card-footer p-2">
                                    <a href="" class="name text-center d-block">
                                        Vá Cơm
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>