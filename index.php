<?php
	if(!isset($_SESSION)){
		session_start();
	}
	ob_start();
	error_reporting(0);
	define('_source','./sources/');
	define('_lib','./admin/lib/');
	@include _lib."config.php";
	@include_once _lib."function.php";
	global $d;
	global $lang;
	$d = new func_index($config['database']);
	date_default_timezone_set('Asia/Ho_Chi_Minh');

	if ($_REQUEST['lang']) {
		$_SESSION['lang'] = $_REQUEST['lang'];
		header("Location:".URLPATH);
	}
	elseif(!isset($_SESSION['lang'])) {
		$_SESSION['lang']='vn';
	}
	$lang = $_SESSION['lang'];

	include _source."lang.php";
	include _source."language_".$_SESSION['lang'].".php";
	include _source."file_router_index.php";

	$information = $d->simple_fetch("select * from #_thongtin limit 0,1");
	$url_page=$d->fullAddress();
	unset($_SESSION['nav']);
	$d->getActive($com,$_SESSION['lang']);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi" lang="vi">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" class="metaview">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="format-detection" content="telephone=no">
<base href="<?=URLPATH?>" />
<?php 
if(empty($_GET['com']) || $source == 'index'){
echo '<link rel="canonical" href="'.URLPATH.'" />';
}
else{
$exp_cal = explode("&", $d->fullAddress());
$exp_cal = explode("?", $exp_cal[0]);
echo '<link rel="canonical" href="'.$exp_cal[0].'" />';
}
?>
<?php if(strpos($_SERVER['HTTP_HOST'],"phuongnamvina.vn") <> null ) {  ?>
<!-- <meta name="robots" content="noindex">
<meta name="googlebot" content="noindex"> -->
<?php } ?>
<link href="<?=URLPATH."img_data/icon/".$information['favicon'];?>" rel="shortcut icon" type="image/x-icon" />
<?php include _source."seo.php" ?>
<link href="<?=URLPATH?>templates/extra/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?=URLPATH?>templates/extra/datetimepicker/datepicker.css" rel="stylesheet" />
<script src="<?=URLPATH?>templates/js/jquery-1.11.0.min.js"></script>

<link href="<?=URLPATH?>templates/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<link rel='stylesheet'  href='<?=URLPATH?>templates/extra/mmenu/jquery.mmenu.css' type='text/css' />
<script src='<?=URLPATH?>templates/extra/mmenu/jquery.mmenu.js'></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		 $('nav#menu').mmenu({
	        navbar: { title: '<?=_danhmuc?>' }        
	    });	
	});
</script>
<link href="<?=URLPATH?>templates/extra/fancybox/jquery.fancybox.css" rel="stylesheet" />
<link href="<?=URLPATH?>templates/extra/slick/slick.css" rel="stylesheet" />
<link href="<?=URLPATH?>templates/extra/wow/animate.css" rel="stylesheet" />
<link href="<?=URLPATH?>templates/css/aos.css" rel="stylesheet" />
<link href="<?=URLPATH?>templates/css/style.css" rel="stylesheet" />
<link href="<?=URLPATH?>templates/css/module.css" rel="stylesheet" />
<link href="<?=URLPATH?>templates/css/responsive.css" rel="stylesheet" />
<link href="<?=URLPATH?>templates/css/responsive_module.css" rel="stylesheet" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113229990-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-113229990-1');
</script>

</head>
<?php include ("limit.php") ?>
<body class="<?php if($com!='') echo 'module'?>">
<div class="fback-top"><i class="fa fa-angle-up"></i></div>
	<div id="container">
		<?php 
			echo $source;
			include _source."header.php"; ?>
		<?php 
			$slide=$d->getSlider();
			include _source.'slider.php';
		?>
		<?php 
			include _source.$source.".php"; ?>
		<?php include _source."footer.php";?>
	</div>
	<script src="<?=URLPATH?>templates/js/detect.js"></script>
	<script src="<?=URLPATH?>templates/extra/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=URLPATH?>templates/extra/fancybox/jquery.fancybox.js"></script>	
	<script src="<?=URLPATH?>templates/extra/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
	<script src="<?=URLPATH?>templates/extra/validate/jquery.validate.min.js"></script>	
	<script src="<?=URLPATH?>templates/extra/slick/slick.js"></script>
	<script src="<?=URLPATH?>templates/js/aos.js"></script>
	<script src="<?=URLPATH?>templates/js/home.js"></script>
	<script src="<?=URLPATH?>templates/extra/datetimepicker/datepicker.js"></script>
	<script src="<?=URLPATH?>templates/js/module.js"></script>
</body>
</html>
<?php $d->disconnect() ?>