<?php
	$loai = $d->simple_fetch("select * from #_category where hien_thi = 1 and alias_{$lang} = '$com'");
	if(count($loai) == 0) $d->location(URLPATH."404.html");
	$id_loai = $loai['id'];
	$id_sub=substr($d->findIdSub($loai['id'],1),1);
?>

<style>
	.title_main_page{
		text-transform:uppercase;
		font-weight:bold;
		padding-bottom:8px;
		border-bottom:1px solid #dcdcdc;
		position:relative;
	}
	.title_main_page::after{
		content:'';
		position:absolute;
		bottom:-2px;
		left:0px;
		width:150px;
		height:3px;
		background:#02AD88;
	}
</style>
<div class="container">
	<h3 class="title_main_page"><span class="fa fa-home"></span>&nbsp;<?=$loai['ten_vn']?></h3>
</div>
<?php 
	if ($id_sub!=''){
		$sql= "select * from #_category where hien_thi=1 and id in ($id_sub) order by so_thu_tu asc";
		$data = $d->o_fet($sql);
		include ('item_category.php');
	}else{
		$sql= "select * from #_category where hien_thi=1 and id = $id_loai order by id desc";
        $data = $d->o_fet($sql);
        ?>
        <div class="container">
            <div class="row">
                <?php
                    include ('item_project.php');
                ?>
            </div>
        </div>
        <?php
	}
?>
