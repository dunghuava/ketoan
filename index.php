<?php
if (!isset($_SESSION)) {
	session_start();
}
ob_start();
error_reporting(0);
define('_source', './sources/');
define('_lib', './admin/lib/');
@include_once _lib . "config.php";
@include_once _lib . "function.php";
global $d;
global $lang;
$d = new func_index($config['database']);
date_default_timezone_set('Asia/Ho_Chi_Minh');

if ($_REQUEST['lang']) {
	$_SESSION['lang'] = $_REQUEST['lang'];
	header("Location:" . URLPATH);
} elseif (!isset($_SESSION['lang'])) {
	$_SESSION['lang'] = 'vn';
}
$lang = $_SESSION['lang'];

include _source . "lang.php";
include _source . "language_" . $_SESSION['lang'] . ".php";
include _source . "file_router_index.php";

$information = $d->simple_fetch("select * from #_thongtin limit 0,1");
$url_page = $d->fullAddress();
unset($_SESSION['nav']);
$d->getActive($com, $_SESSION['lang']);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi" lang="vi">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no">
	<base href="<?= URLPATH ?>" />
	<?php
	if (empty($_GET['com']) || $source == 'index') {
		echo '<link rel="canonical" href="' . URLPATH . '" />';
	} else {
		$exp_cal = explode("&", $d->fullAddress());
		$exp_cal = explode("?", $exp_cal[0]);
		echo '<link rel="canonical" href="' . $exp_cal[0] . '" />';
	}
	?>

	<link href="<?= URLPATH . "img_data/icon/" . $information['favicon']; ?>" rel="shortcut icon" type="image/x-icon" />
	<?php include _source . "seo.php" ?>
	<link href="<?= URLPATH ?>templates/extra/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?= URLPATH ?>templates/extra/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?= URLPATH ?>templates/extra/datetimepicker/datepicker.css" rel="stylesheet" />
	<link href="<?= URLPATH ?>templates/extra/slick/slick.css" rel="stylesheet" />
	<link href="<?= URLPATH ?>templates/extra/slick/slick-theme.css" rel="stylesheet" />
	<script src="<?= URLPATH ?>templates/js/jquery-1.11.0.min.js"></script>
	<link href="<?= URLPATH ?>templates/fonts/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?= URLPATH ?>templates/extra/fancybox/jquery.fancybox.css" rel="stylesheet" />
	<link href="<?= URLPATH ?>templates/css/style.css?v=<?= time() ?>" rel="stylesheet" />
</head>

<body class="<?php if ($com != '') echo 'module' ?>">
	<div id="container">
		<?php
			include _source . "header.php";
			include _source . "slider.php";
			include _source . $source . ".php";
			include _source . "footer.php";
		?>
	</div>
	<script src="<?= URLPATH ?>templates/js/detect.js"></script>
	<script src="<?= URLPATH ?>templates/extra/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?= URLPATH ?>templates/extra/fancybox/jquery.fancybox.js"></script>
	<script src="<?= URLPATH ?>templates/extra/validate/jquery.validate.min.js"></script>
	<script src="<?= URLPATH ?>templates/extra/slick/slick.js"></script>
	<script src="<?= URLPATH ?>templates/extra/datetimepicker/datepicker.js"></script>
	<script src="<?= URLPATH ?>templates/js/module.js"></script>
</body>

</html>
<?php $d->disconnect() ?>