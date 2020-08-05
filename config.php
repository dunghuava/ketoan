<?php
	$rf = str_replace('www.', '', $_SERVER["SERVER_NAME"]).'';
	$config['database']['refix'] = "db_";
	$config['database']['servername'] = 'localhost';
	$config['database']['username'] = 'pkmatbao_bds';
	$config['database']['password'] = '2s=NZ~S~qu2(';
	$config['database']['database'] = 'pkmatbao_bds';
	
	define("URLPATH","http://".$_SERVER["SERVER_NAME"]."/");
	define("urladmin","http://".$_SERVER["SERVER_NAME"]."bds.pkmatbaoan/admin/");
?>