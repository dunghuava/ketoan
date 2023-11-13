<?php
$category = $d->simple_fetch('SELECT * FROM `db_category` WHERE hien_thi = 1 AND id = ' . $_GET['id'] . ' LIMIT 1');
if ($category) {
    $category_sub_ids = $d->findIdSub($category['id']);
    $category_sub_ids = trim($category['id'] . $category_sub_ids, ',');
    $products = $d->o_fet('SELECT * FROM db_products WHERE hien_thi = 1 AND id_loai IN (' . $category_sub_ids . ') ORDER BY so_thu_tu ASC');
}
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
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?=URLPATH?>"><i class="fa fa-home"></i></a></li>
                                <?= $d->breadcrumb($category['id'], 'vn', 'category') ?>
                            </ol>
                        </nav>
                    </div>
                    <?php foreach ($products as $item) { ?>
                        <div class="col-4 mb-4">
                            <a href="<?= URLPATH ?>product?id=<?= $item['id'] ?>">
                                <?php include _source . '/product-item.php' ?>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>