<?php if($information['dien_thoai']){ ?>
<div id="contact-sell" class="card">
    <div class="card-body">
        <p class="text mb-0">Liên Hệ Mua Hàng</p>
        <h5 class="phone mb-0">
            <a href="tel:<?=preg_replace('/[^0-9]/','',$information['dien_thoai'])?>"><?=$information['dien_thoai']?></a>
        </h5>
    </div>
</div>
<?php } ?>
<footer class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <p><img src="<?=ASSET_PATH?>line-footer.jpg" alt=""></p>
                    <?=@$information['footer_text']?>
                    <p class="mb-0"><img src="<?=ASSET_PATH?>line-footer.jpg" alt=""></p>
                    <p><?=@$information['coppy_right']?></p>
                </div>
            </div>
        </div>
    </div>
</footer>