<?php
$product = $d->simple_fetch('SELECT * FROM `db_products` WHERE hien_thi = 1 AND id = ' . $_GET['id'] . ' LIMIT 1');
$product_related = $d->o_fet('SELECT * FROM `db_products` WHERE hien_thi = 1 AND id_loai = ' . $product['id_loai'] . ' AND id <> ' . $product['id'] . ' LIMIT 1');
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
                                <li class="breadcrumb-item"><a href="<?= URLPATH ?>"><i class="fa fa-home"></i></a></li>
                                <?= $d->breadcrumb($product['id_loai'], 'vn', 'category') ?>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-12">
                        <div class="card card-product">
                            <div class="card-body img-shine-2">
                                <img src="<?= URLPATH ?>img_data/images/<?= $product['hinh_anh'] ?>" alt="">
                            </div>
                            <div class="card-footer p-2">
                                <a href="" class="name text-left d-block">
                                    <?= $product['ten_vn'] ?>
                                </a>
                                <?php
                                if ($product['mo_ta_vn']) {
                                    echo $product['mo_ta_vn'];
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php if ($product['thong_tin_vn']) { ?>
                        <div class="col-12 mt-4">
                            <h5>Thông Tin Chi Tiết</h5>
                            <?=$product['thong_tin_vn']?>
                        </div>
                    <?php } ?>
                </div>
                <?php if (count($product_related)) { ?>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <h5 class="mb-2">Sản Phẩm Cùng Loại</h5>
                        </div>
                        <?php foreach ($product_related as $item) { ?>
                            <div class="col-4 mb-4">
                                <a href="<?= URLPATH ?>product?id=<?= $item['id'] ?>">
                                    <?php include _source . '/product-item.php' ?>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>