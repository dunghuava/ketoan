<div class="card card-product mb-3">
    <a href="<?= URLPATH ?>product?id=<?= $item['id'] ?>">
        <div class="card-body img-shine-2">
            <img src="<?= URLPATH ?>img_data/images/<?= $item['hinh_anh'] ?>" alt="">
        </div>
        <div class="card-footer p-2">
            <a href="<?= URLPATH ?>product?id=<?= $item['id'] ?>" class="name text-center d-block">
                <?= $item['ten_vn'] ?>
            </a>
        </div>
    </a>
</div>