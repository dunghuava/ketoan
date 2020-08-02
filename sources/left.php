<?php 
	$nav_left	= $d->o_fet("select * from #_category where hien_thi=1 and tieu_bieu=1 order by so_thu_tu asc, id desc");
    $support    = $d->o_fet("select * from #_hotro where hien_thi=1 order by so_thu_tu asc, id desc");
    $list_id = '1026'.$d->findIdSub(1026);
    $news_left  = $d->o_fet("select * from #_tintuc where hen_ngay_dang<'".time()."' and hien_thi=1 and id_loai in ({$list_id}) order by so_thu_tu asc, id desc limit 0,4");  
    $xemnhieu  = $d->o_fet("select * from #_sanpham where sp_hot=1 and hien_thi=1 order by so_thu_tu asc, id desc limit 0,10");  
    $video = $d->o_fet("select * from #_video where hien_thi=1 order by id desc");
?>

<div class="col-md-3 col-left plr10" >
    <div class="clearfix bao-left">
        <h3 class="title-left title-font"><span class="at"></span><?=_danhmuc?></h3>
        <div class="box category" >
            <ul class="sub fadeInRight" >
                <?php foreach($nav_left as $item) {                
                $sub=$d->o_fet("select * from #_category where id_loai={$item['id']} and hien_thi=1 order by so_thu_tu asc, id desc");  
                ?>
                <li <?=(count($sub) ? "class='arrow-sub'" : '')?>>
                    <span class="ic-menu"><i class="fa fa-plus-square-o" aria-hidden="true"></i></span>
                    <a <?=($item['id']==$_SESSION['nav'][1]) ? 'class="active"' : ''?> href="<?=URLPATH.$item['alias_'.$lang] ?>.html" title="<?=$item['ten_'.$_SESSION['lang']]?>"><?=$item['ten_'.$_SESSION['lang']]?></a>
                    <?php if(count($sub)>0) {?>
                    <ul class="sub_1">
                        <?php foreach($sub as $item1) {?>
                            <li><a <?=($item1['id']==$_SESSION['nav'][2]) ? 'class="active"' : ''?> href="<?=URLPATH.$item1['alias_'.$lang] ?>.html" title="<?=$item1['ten_'.$_SESSION['lang']]?>"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span><?=$item1['ten_'.$_SESSION['lang']]?></a>
                            <?php
                               $sub_2=$d->o_fet("select * from #_category where id_loai={$item1['id']} and hien_thi=1 order by so_thu_tu asc, id desc");    
                            ?>
                            <?php if(count($sub_2)>0) {?>
                                    <ul class="sub_2 fadeInRight animate1">
                                    <?php foreach($sub_2 as $item2) {?>
                                        <li><a <?=($item2['id']==$_SESSION['nav'][2]) ? 'class="active"' : ''?> href="<?=URLPATH.$item2['alias_'.$lang] ?>.html" title="<?=$item2['ten_'.$_SESSION['lang']]?>"><span><i class="fa fa-right" aria-hidden="true"></i></span><?=$item2['ten_'.$_SESSION['lang']]?></a>
                                            <?php
                                               $sub_3=$d->o_fet("select * from #_category where id_loai={$item2['id']} and hien_thi=1 order by so_thu_tu asc, id desc");    
                                            ?>
                                            <?php if(count($sub_2)>0) {?>
                                                <ul class="sub_2 fadeInRight animate1">
                                                     <?php foreach($sub_3 as $item3) {?>
                                                        <li><a <?=($item3['id']==$_SESSION['nav'][3]) ? 'class="active"' : ''?> href="<?=URLPATH.$item3['alias_'.$lang] ?>.html" title="<?=$item3['ten_'.$_SESSION['lang']]?>"><?=$item3['ten_'.$_SESSION['lang']]?></a>
                                                        </li>
                                                     <?php } ?>
                                                </ul>
                                            <?php } ?>
                                        </li>
                                    <?php } ?>
                                    </ul>
                            <?php } ?>
                            </li>
                        <?php } ?>
                    </ul>
                    <?php } ?>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="clearfix bao-left">
        <h3 class="title-left title-font"><span class="at"></span><?=_support_online?></h3>
        <div class="box box10">
            <div class="support-online">
                <div class="img-hotline mb10">
                    <img src="templates/images/hot-line.png" alt="hot line">
                </div>
                <?php foreach($support as $item) { $st++; ?>
                   
                     <div class="col-md-12 col-sm-6 plr5">
                        <div class="support mb10">
                            <div class="zalo">
                                <img src="templates/images/zalo.png"><a href="https://zalo.me/<?=$item['yahoo']?>"><span><?=$item['yahoo']?></span></a>
                            </div>
                            <div class="phone">
                                <i class="fa fa-phone"></i>
                                <span class="so-dt"><?=$item['sdt']?></span>
                            </div>
                            <div class="title-hotro">
                                <i class="fa fa-skype"></i>
                               <a href="<?=$item['skype']?>"><span class="name"><?=$item['ten_vn']?></span></a>
                            </div>                           
                            <div class="hot-line">
                                <i class="fa fa-envelope"></i>
                                <span class="email"><?=$item['yahoo']?></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="clearfix"></div>
            </div> 
        </div>
    </div>
    <!-- <div class="clearfix bao-left">
        <h3 class="title-left title-font"><span class="at"></span>Video</h3>
        <div class="box">
            <div class="wrapper-video mb10" id="video_left">
                <iframe width="560" height="200" src="https://www.youtube.com/embed/<?=$video[0]['link']?>" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="more-video">
                <select class="form-control list-video">
                    <?php foreach ($video as $key => $value): ?>
                       <option value="<?=$value['link']?>"><?=$value['ten_'.$lang]?></option> 
                    <?php endforeach ?>
                </select>
            </div>
        </div>
    </div> -->
    <div class="clearfix bao-left">
        <h3 class="title-left title-font"><span class="at"></span>Tin tức mới nhất</h3>
        <div class="box box10 news tin-tuc">
            <?php foreach($news_left as $item) {?>
                <div class="item">
                    <div class="img">
                        <a href="<?=URLPATH.$item['alias_'.$lang] ?>.html" title="<?=@$item['ten_'.$lang] ?>">
                            <img src="<?=URLPATH ?>thumb.php?src=<?=URLPATH ?>img_data/images/<?=$item['hinh_anh']?>&w=160&h=140" alt="<?=@$item['ten_'.$lang] ?>" onerror="this.src='<?=URLPATH ?>templates/error/error.jpg';">
                        </a>
                    </div>
                    <div class="info">
                        <a href="<?=URLPATH.$item['alias_'.$lang] ?>.html" title="<?=$item['ten_'.$lang]?>"><?=$d->subText($item['ten_'.$lang],50)?></a>
                    </div>
                </div>
            <?php } ?>     
        </div> 
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('span.ic-menu').click(function(event) {
            $(this).siblings('ul').slideToggle('fast');
        });
        $('.list-video').change(function(event) {
            var link = this.value;
            $('#video_left iframe').attr('src', 'https://www.youtube.com/embed/'+link);
        });
    });
    jQuery(document).ready(function($) {
        $(".carousel-sanpham").slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            prevArrow: "",
            nextArrow: "",
            vertical:true,
            verticalScrolling: true,
            autoplay: true,
            autoplaySpeed: 3000,
        });
    });
</script>


