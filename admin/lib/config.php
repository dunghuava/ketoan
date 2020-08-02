<?php
	$rf = str_replace('www.', '', $_SERVER["SERVER_NAME"]).'';
	$config['database']['refix'] = "db_";
	$config['database']['servername'] = 'localhost';
	$config['database']['username'] = 'root';
	$config['database']['password'] = '';
	$config['database']['database'] = 'landing';
	
	define("URLPATH","http://".$_SERVER["SERVER_NAME"]."/ketoan/");
	define("urladmin","http://".$_SERVER["SERVER_NAME"]."ketoan/admin/");
?>