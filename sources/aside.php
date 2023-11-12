<?php 
    $category_index = $d->o_fet('SELECT * FROM `db_category` WHERE hien_thi = 1 AND tieu_bieu = 1 ORDER BY so_thu_tu ASC');
?>
<aside>
    <div class="card card-style-1 mb-3">
        <div class="card-body">
            <div class="text-center">
                <br><br>
                <h5>Sản Phẩm</h5>
            </div>
            <ul class="aside-menu">
                <?php foreach($category_index as $cate){ ?>
                <li class="<?=$_GET['cateID'] == $cate['id'] ? 'active': ''?>"><a href="<?=URLPATH?>category?cateID=<?=$cate['id']?>"><?=$cate['ten_vn']?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="card card-style-2 mb-3">
        <div class="card-header mb-2">
            <h5 class="mb-0">Sản Phẩm Nổi Bật</h5>
        </div>
        <div class="card-body p-0">
            <div class="slick-product">
                <?php for($i=0;$i<3;$i++){ ?>
                <div class="card card-product mb-3">
                    <div class="card-body img-shine-2">
                        <img src="<?=ASSET_PATH?>va-com.jpg" alt="">
                    </div>
                    <div class="card-footer p-2">
                        <a href="<?=URLPATH?>?chitietsp=1" class="name text-center d-block">
                            Vá Cơm 1,22,32.45
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="card card-style-2 mb-3">
        <div class="card-header mb-2">
            <h5 class="mb-0">Sản Phẩm Mới</h5>
        </div>
        <div class="card-body p-0">
            <div class="slick-product">
                <?php for($i=0;$i<3;$i++){ ?>
                <div class="card card-product mb-3">
                    <div class="card-body img-shine-2">
                        <img src="<?=ASSET_PATH?>va-com.jpg" alt="">
                    </div>
                    <div class="card-footer p-2">
                        <a href="<?=URLPATH?>?chitietsp=1" class="name text-center d-block">
                            Vá Cơm 1,22,32.45 Vá Cơm 1,22,32.45
                        </a>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</aside>

<script>
    $(document).ready(function () {
        $('.slick-product').slick({
            autoplay: true,
            autoplaySpeed: 4000,
            slidesToShow: 1,
            slidesToScroll: 1
        });
    });
</script>