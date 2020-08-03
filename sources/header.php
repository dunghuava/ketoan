<?php
    $nav        = $d->o_fet("select * from #_category where tieu_bieu=1 and hien_thi=1 order by so_thu_tu asc, id desc");
    $banner     = $d->getTemplates(30);
?>
<style type="text/css">
    .sticky {
        position: fixed !important;
        top: 0;
        width: 100%;
        background: white !important;
        animation: fade-down 0.2s;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
    }
    @keyframes fade-down{
        from{
            top:-50px;
        }
        to{
            top:0px;
        }
    }
    .sticky .navbar-nav>li>a{
        color:black !important;
    }
    .sticky .fa-angle-down{
        color:black !important;
    }
</style>
<header>
    <div class="top-header" id="navbar_fix_top">
        <div class="container" style="padding:0px">
            <div class="row">
                <div class="col-md-2 hidden-xs">
                    <div class="logo-top">
                        <a data-aos="fade-down" href="<?=URLPATH?>" title="Home">
                            <img src="<?=URLPATH?>img_data/images/<?=@$banner['hinh_anh']?>" alt="banner">
                        </a>
                    </div>
                </div>
                <div class="col-md-10">
                    <nav id="aff_menu" class="nav">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                                <span class="fa fa-bars" title="Danh mục sản phẩm"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse navbar-responsive-collapse">
                            <?php include 'menu.php'; ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>  
    <style>
        #mobile_menu{
            box-shadow: 1px 1px 10px rgba(0,0,0,0.15);
        }
    </style>      
    <div id="mobile_menu">
        <div class="header">
            <a href="#menu"><span class="fa fa-bars" title="Danh mục sản phẩm"></span></a>
            <a></a>
            <div class="text-center">
                <a style="width:50%;margin-top: -10px;" data-aos="fade-down" href="<?=URLPATH?>" title="Home">
                    <img src="<?=URLPATH?>img_data/images/<?=@$banner['hinh_anh']?>" alt="banner">
                </a>
            </div>
        </div>
        <nav id="menu">
            <?php include 'mmenu.php'; ?>
        </nav>
    </div>
</header>
<div class="clearfix"></div>
<script>
window.onscroll = function() {myFunction()};
    var navbar = document.getElementById("navbar_fix_top");
    var sticky = navbar.offsetTop+50;
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
</script>