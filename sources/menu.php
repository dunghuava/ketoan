<?php
$nav        = $d->o_fet("select * from #_category where tieu_bieu=1 and hien_thi=1 order by so_thu_tu asc, id desc");

?>
<ul class="nav navbar-nav">
    <li class="<?php if($com=='') echo 'active'; ?>">
        <a href="<?=URLPATH?>" title="<?=_trangchu?>">
           <?=_trangchu?>
        </a>
    </li>
    <?php foreach($nav as $item) {
        $sub=$d->o_fet("select * from #_category where id_loai={$item['id']} and hien_thi=1 order by so_thu_tu asc, id desc");
        ?>
        <li class="<?php if(count($sub)>0) echo "dropdown"; if($item['id']==$_SESSION['nav'][0]) echo ' active'?>">
            <a href="<?=URLPATH.$item['alias_'.$lang]?>.html" title="<?=$item['ten_'.$lang]?>">
                <?=$item['ten_'.$lang]?>
            </a>
            <?php if(count($sub)>0) {?>
               <span style="color: #fff" class="fa fa-angle-down"></span> 
               <ul class="dropdown-menu fadeInUp animate1">
                    <?php foreach($sub as $item1) {
                    $sub1=$d->o_fet("select * from #_category where id_loai={$item1['id']} and hien_thi=1 order by so_thu_tu asc, id desc");
                    ?>
                        <li class="<?php if(count($sub1)>0) echo "dropdown-submenu"?>">
                            <a href="<?=URLPATH.$item1['alias_'.$lang] ?>.html" title="<?=$item1['ten_'.$lang]?>"><?=$item1['ten_'.$lang]?></a>                                                    
                            <?php if(count($sub1)>0) {?>                                                  
                            <ul class="dropdown-menu fadeInUp animate1">    
                                <?php foreach($sub1 as $item2) { 
                                    $sub2=$d->o_fet("select * from #_category where id_loai={$item2['id']} and hien_thi=1 order by so_thu_tu asc, id desc");
                                    ?>
                                    <li class="<?php if(count($sub2)>0) echo "dropdown-submenu"?>">
                                        <a href="<?=URLPATH.$item2['alias_'.$lang] ?>.html" title="<?=$item2['ten_'.$lang]?>"><?=$item2['ten_'.$lang]?></a>
                                        <?php if(count($sub2)>0) {?>
                                        <ul class="dropdown-menu fadeInUp animate1">
                                        <?php foreach($sub2 as $item3) { ?>
                                            <li class="<?php if(count($sub3)>0) echo "dropdown-submenu"?>">
                                                <a href="<?=URLPATH.$item3['alias_'.$lang] ?>.html" title=" <?=$item3['ten_'.$lang]?>"><?=$item3['ten_'.$lang]?></a> 
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
    <li class="">
        <a href="<?=URLPATH?>" title="">
           Đăng nhập / đăng ký
        </a>
    </li>
    <li class="">
        <a href="<?=URLPATH?>" title="">
           Đăng tin nhà đất
        </a>
    </li>
<!--     <li>
        <a href="javascript:" class="show-search">
            <i class="fa fa-search"></i>
        </a>
        <div class="d7 d7-search d7-desktop">
            <form method="get" action="index.php">
                <input type="hidden" name="com" value="search">
                <input type="text" name="textsearch" onfocus="this.placeholder = ''" onblur="this.placeholder = '<?=_typekey?>'" placeholder="<?=_typekey?>" class="form-control">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>    
    </li> -->
<!--     <li class="flags text-right">
        <a title="Tiếng việt" class="not-hover" href="<?=URLPATH?>?lang=vn<?=$linkcom?>"><img src="images/vi.png" class="<?=$_SESSION['lang']=='vn'?'active':''?>"></a>
        <a title="English" class="not-hover" href="<?=URLPATH?>?lang=us<?=$linkcom?>"><img src="images/us.png" class="<?=$_SESSION['lang']=='us'?'active':''?>"></a>
    </li> -->
</ul>
<!-- product (id,type)
attribute (id,id_product,code)
product_attribute(id,id_attribute,value) -->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.show-search').click(function(event) {
            /* Act on the event */
            $('.d7-desktop').fadeToggle('slow/400/fast', function() {
                
            });
        });
    });
</script>