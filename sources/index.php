<?php
    $spHome = $d->o_fet('SELECT * FROM db_products WHERE hien_thi = 1 AND tieu_bieu = 1 ORDER BY so_thu_tu ASC');
?>
<div class="container mt-2">
    <div class="row">
        <div class="col-3">
            <div class="aside">
                <? include _source . 'aside.php' ?>
            </div>
        </div>
        <div class="col-9">
            <div class="main-contain">
                <div class="row">
                    <?php foreach ($spHome as $item) { ?>
                        <div class="col-4 mb-4">
                            <a href="<?= URLPATH ?>product?id=<?=$item['id']?>">
                                <?php include _source . '/product-item.php' ?>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>