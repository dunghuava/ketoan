<?php
	$rf = str_replace('www.', '', $_SERVER["SERVER_NAME"]).'';
	$config['database']['refix'] = "db_";
	$config['database']['servername'] = 'localhost';
	$config['database']['username'] = 'pnvinanet_demo23';
	$config['database']['password'] = 'wT5wvuzXA';
	$config['database']['database'] = 'pnvinanet_demo23';
	
	define("URLPATH","http://".$_SERVER["SERVER_NAME"]."/");
	define("urladmin","http://".$_SERVER["SERVER_NAME"]."/admin/");
?>