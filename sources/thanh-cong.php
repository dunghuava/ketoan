<?php
		$thanhcong = $d->getTemplates(29);
?>


<section>

<div class="page-title">
<div class="container bg-white">
<div class="col-md-12 plr10">
<ul class="breadcrumb">
	<li><a href="<?=URLPATH ?>" title="<?=_trangchu?>"><i class="fa fa-home"></i></a></li>
	<li style="color: #222;">Thành công</li>
</ul>
</div>
</div>
</div>

<div class="container bg-white">

<?php include "left.php"; ?>
						
	<div class="col-md-9 plr10">
		<div class="clearfix"></div>
						
		<div class="box-item module">
		<?=@$thanhcong['noi_dung_'.$_SESSION['lang']];?>
		</div>

	</div>

</div>
</section>

