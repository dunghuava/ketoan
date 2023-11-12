<?php
    
    // $temp = $d->checkUserPermission($_SESSION['id_user'],'seo-website');
?>
<div class="panel panel-default">
    <!-- <div class="panel-heading">
        <h3 class="panel-title">
            <a href="../" target="_blank"><i class="glyphicon glyphicon-th-large"></i> <span>Phương Nam Vina</span></a>
        </h3>
    </div> -->
    <?php if((int)$_SESSION['quyen']>0) { ?>
    <ul id="menu" class="list-group">
        <li class="list-group-item <?php if($_GET['p'] == '') echo "active"?>">
            <a href="index.php"><i class="glyphicon glyphicon-home"></i> <span>Trang chủ Admin</span></a>
        </li>
        <?php if($d->checkChildPermission($_SESSION['id_user'],'quan-tri-danh-muc') > 0 || (int)$_SESSION['is_admin'] == 1 ){ ?>
            <li class="list-group-item <?php if($_GET['p'] == 'category' || $_GET['p'] == 'san-pham' || $_GET['p'] == 'bat-dong-san' || $_GET['p'] == 'bai-viet' || $_GET['p'] == 'khu-vuc' ) echo "active" ?>">
                <a href="#"><i class="glyphicon glyphicon-dashboard"></i> <span>Quản trị Danh mục</span> <i class="caret"></i></a>
                <ul class="list-group">
                    <?php
                        if($d->checkUserPermission($_SESSION['id_user'],'category') > 0 || (int)$_SESSION['is_admin'] == 1 ){
                         
                    ?>
    				<li class="list-group-item <?php if($_GET['p'] == 'category') echo "active"?>">
                        <a href="?p=category&a=man"><i class="glyphicon glyphicon-chevron-right"></i> <span>Loại danh mục</span></a>
                    </li>
    				<?php } ?>
                    <?php
                        if($d->checkUserPermission($_SESSION['id_user'],'san-pham') > 0 || $_SESSION['is_admin'] == 1 ){
                    ?>
                    <li class="list-group-item <?php if($_GET['p'] == 'san-pham') echo "active"?>">
                        <a href="?p=san-pham&a=man"><i class="glyphicon glyphicon-chevron-right"></i> <span>Sản phẩm</span></a>
                    </li>
                    <?php } ?>    
                </ul>
            </li>
		<?php } ?>
        <?php if($d->checkChildPermission($_SESSION['id_user'],'quan-tri-giao-dien') > 0 || (int)$_SESSION['is_admin'] == 1 ){ ?>
        <li class="list-group-item <?php if($_GET['p'] == 'giaodien' || $_GET['p'] == 'video'  || $_GET['p'] == 'ql-thongtin' || $_GET['p'] == 'ho-tro-truc-tuyen' || $_GET['p'] == 'map' || $_GET['p'] == 'lien-ket-website' || $_GET['p'] == 'nhom-ho-tro' || $_GET['p'] == 'gallery' || $_GET['p'] == 'thanh-pho' || $_GET['p'] == 'quan'|| $_GET['p'] == 'upload-file' || $_GET['p'] == 'hinh-thuc-thanh-toan' || $_GET['p'] == 'slider' || $_GET['p'] == 'ql-binhluan' || $_GET['p'] == 'dat-lich') echo "active" ?>">
            <a href="#"><i class="glyphicon glyphicon-th-list"></i> <span>Quản trị giao diện</span> <i class="caret"></i></a>
            <ul class="list-group">
                <?php
                    if($d->checkUserPermission($_SESSION['id_user'],'slider') > 0 || $_SESSION['is_admin'] == 1 ){
                ?>
                <li class="list-group-item <?php if($_GET['p'] == 'slider') echo "active"?>">
                    <a href="?p=slider&a=man"><i class="glyphicon glyphicon-chevron-right"></i> <span>Slider</span></a>
                </li>

                 <?php } ?>
                <?php
                    if($d->checkUserPermission($_SESSION['id_user'],'ql-thongtin') > 0 || $_SESSION['is_admin'] == 1 ){
                ?>
                <li class="list-group-item <?php if($_GET['p'] == '') echo "active"?>">
                    <a href="?p=ql-thongtin&a=man"><i class="glyphicon glyphicon-chevron-right"></i> <span>QL Thông tin</span></a>
                </li>
                <?php } ?>
            </ul>
        </li>
        <?php } ?>
        <?php if($d->checkChildPermission($_SESSION['id_user'],'seo-website') > 0 || (int)$_SESSION['is_admin'] == 1 ){ ?>
            <li class="list-group-item <?php if($_GET['p'] == 'ho-tro-truc-tuyen' || $_GET['p'] == 'seo-co-ban' || $_GET['p'] == 'seo-nang-cao' || $_GET['p'] == 'lien-ket-doi-tac') echo "active" ?>">
                <a href="#"><i class="glyphicon glyphicon-list-alt"></i> <span>SEO Website</span> <i class="caret"></i></a>
                <ul class="list-group">
                    <?php
                        if($d->checkUserPermission($_SESSION['id_user'],'seo-co-ban') > 0 || $_SESSION['is_admin'] == 1 ){
                    ?>
                    <li class="list-group-item <?php if($_GET['p'] == 'seo-co-ban') echo "active"?>">
                        <a href="?p=seo-co-ban&a=man"><i class="glyphicon glyphicon-chevron-right"></i> <span>Seo cơ bản</span></a>
                    </li>
                    <?php } ?>
                    <?php
                        if($d->checkUserPermission($_SESSION['id_user'],'seo-nang-cao') > 0 || $_SESSION['is_admin'] == 1 ){
                    ?>
                    <li class="list-group-item <?php if($_GET['p'] == 'seo-nang-cao') echo "active"?>">
                        <a href="?p=seo-nang-cao&a=man"><i class="glyphicon glyphicon-chevron-right"></i> <span>Seo nâng cao</span></a>
                    </li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>
        <?php if($d->checkChildPermission($_SESSION['id_user'],'cau-hinh-user') > 0 || (int)$_SESSION['is_admin'] == 1 ){ ?>
        <li class="list-group-item <?php if($_GET['p'] == 'ql-user' || $_GET['p'] == 'permission' || $_GET['p'] == 'ql-user') echo "active" ?>">
            <a href="#"><i class="glyphicon glyphicon-user"></i> <span>Cấu Hình User <i class="caret"></i></span></a>
            <ul class="list-group">
                <?php if($_SESSION['is_admin'] == 1){ ?>
                    <li class="list-group-item <?php if($_GET['p'] == 'ql-user' && $_GET['a'] == 'man') echo "active"?>">
                        <a href="?p=ql-user&a=man"><i class="glyphicon glyphicon-chevron-right"></i> <span>Quản lý user</span></a>
                    </li>
<!--                     <li  class="list-group-item <?php if($_GET['p'] == 'permission' && $_GET['a'] == 'man') echo "active"?>">
                        <a href="?p=permission&a=man"><i class="glyphicon glyphicon-chevron-right"></i> <span>Danh sách quyền</span></a>
                    </li> -->
                <?php } ?>
                <li class="list-group-item <?php if($_GET['p'] == 'ql-user' && $_GET['a'] == 'change-pass') echo "active"?>">
                    <a href="?p=ql-user&a=change-pass"><i class="glyphicon glyphicon-chevron-right"></i> <span>Thông tin user</span></a>
                </li>
                <li class="list-group-item">
                    <a href="?p=out"><i class="glyphicon glyphicon-chevron-right"></i> <span>Thoát</span></a>
                </li>
            </ul>
        </li>
        <?php } ?>
    </ul>
    <?php } ?>
    
    
    
</div>

<style type="text/css">
    span.notify{
        background: url(../admin/public/images/notify-right.png);
        width: 32px;
        height: 22px;
        color: #fff;
        text-align: center;
        position: absolute;
        line-height: 11px;
        font-size: 13px;
        padding-top: 3px;
        z-index: 1;
        right: -15px;
        top: 0px;
        -webkit-filter: hue-rotate(340deg);
        -moz-filter: hue-rotate(340deg);
        -ms-filter: hue-rotate(340deg);
        -o-filter: hue-rotate(340deg);
    }
    span.notify-2{
        background: #ff0000;
        width: 30px;
        height: 20px;
        color: #fff;
        text-align: center;
        position: absolute;
        line-height: 13px;
        font-size: 13px;
        padding-top: 3px;
        z-index: 1;
        right: -0px;
        top: 0px;
        border-radius: 5px;
    }
</style>