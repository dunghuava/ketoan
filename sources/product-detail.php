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
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <h4>Sản Phẩm Cùng Loại</h4>
                    </div>
                    <?php for($i=0;$i<5;$i++){ ?>
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