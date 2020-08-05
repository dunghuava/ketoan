<style type="text/css">
   .list_footer{
    padding: 0px;
   }
   .list_footer li{
    list-style: none;
   }
   .footer{
      background: #5f8640;
      background-attachment: fixed;
   }
   .title_footer{
       font-weight:bold;
       font-size:19px;
   }
   hr{
    border-top: 1px solid #fff;
   }
</style>
<script>
		$('.img_error').on('error', function () {
			$(this).attr('src','<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/icon/noimg.png&w=600&h=420&zc=0')
		});
</script>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="title_footer">Thông tin blog</h3>
                <p>ST01, LakeView 1, Đường Ven Hồ Trung Tâm, P. An Khánh, Quận 2, TP. Hồ Chí Minh</p>
                <hr style="margin:5px 0px;">
            </div>
            <div class="col-md-3">
                <h3 class="title_footer">Hướng dẫn mua / bán nhà</h3>
                <ul class="list_footer">
                    <li>menu</li>
                    <li>menu</li>
                    <li>menu</li>
                    <li>menu</li>
                </ul>
             </div>
             <div class="col-md-3">
                <h3 class="title_footer">Tư vấn luật - vay</h3>
                <ul class="list_footer">
                    <li>menu</li>
                    <li>menu</li>
                    <li>menu</li>
                    <li>menu</li>
                </ul> 
             </div>
             <div class="col-md-3">
                <h3 class="title_footer">Blog</h3>
                <ul class="list_footer">
                    <li>menu</li>
                    <li>menu</li>
                    <li>menu</li>
                    <li>menu</li>
                </ul> 
             </div>
             <div class="col-md-3">
                <h3 class="title_footer">Nhà đẹp</h3>
                <ul class="list_footer">
                    <li>menu</li>
                    <li>menu</li>
                    <li>menu</li>
                    <li>menu</li>
                </ul> 
             </div>
             <div class="col-md-12">
                 <hr>
                 <div class="text-center">
                     <p>Copyright © 2020 - Rever. All Rights Reserved.</p>
                 </div>
             </div>
        </div>
    </div>
</footer>
