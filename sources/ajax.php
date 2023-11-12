<?php
	if(!isset($_SESSION)){
		session_start();
	}
	error_reporting(0); 
	define('_source','../sources/');
	define('_lib','../admin/lib/');
	@include _lib."config.php";
	@include_once _lib."function.php";
	$d = new func_index($config['database']);
?>