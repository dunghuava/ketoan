<?php
$category_index = $d->o_fet('SELECT * FROM `db_category` WHERE hien_thi = 1 AND tieu_bieu = 1 ORDER BY so_thu_tu ASC');
?>
<aside>
    <div class="card card-style-1 mb-3">
        <div class="card-body p-3">
            <div class="text-center">
                <br><br>
                <h5>Sản Phẩm</h5>
            </div>
            <ul class="aside-menu">
                <?php foreach ($category_index as $cate) { ?>
                    <li class="<?= $_GET['id'] == $cate['id'] ? 'active' : '' ?>"><a href="<?= URLPATH ?>category?id=<?= $cate['id'] ?>"><?= $cate['ten_vn'] ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <?php
    $product_outstandings = $d->o_fet('SELECT * FROM db_products WHERE hien_thi = 1 AND sp_hot = 1 ORDER BY so_thu_tu ASC');
    ?>
    <div class="card card-style-2 mb-3">
        <div class="card-header mb-2">
            <h5 class="mb-0">Sản Phẩm Nổi Bật</h5>
        </div>
        <div class="card-body p-0">
            <div class="slick-product">
                <?php foreach ($product_outstandings as $item) { ?>
                    <?php include _source . '/product-item.php' ?>
                <?php } ?>
            </div>
        </div>
    </div>

    <?php
    $product_news = $d->o_fet('SELECT * FROM db_products WHERE hien_thi = 1 AND sp_moi = 1 ORDER BY so_thu_tu ASC');
    ?>

    <div class="card card-style-2 mb-3">
        <div class="card-header mb-2">
            <h5 class="mb-0">Sản Phẩm Mới</h5>
        </div>
        <div class="card-body p-0">
            <div class="slick-product">
                <?php foreach ($product_news as $item) { ?>
                    <?php include _source . '/product-item.php' ?>
                <?php } ?>
            </div>
        </div>
    </div>
</aside>

<script>
    $(document).ready(function() {
        $('.slick-product').slick({
            autoplay: true,
            autoplaySpeed: 4000,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    });
</script>