<?php
	$rf = str_replace('www.', '', $_SERVER["SERVER_NAME"]);
	$config['database']['refix'] = "db_";
	$config['database']['servername'] = 'localhost';
	$config['database']['username'] = 'cbsvn_vn';
	$config['database']['password'] = 'QBU-6Uu-hZp-tTR';
	$config['database']['database'] = 'cbsvn_vn';
	define("URLPATH","http://".$_SERVER["SERVER_NAME"]."/");
	define("urladmin","http://".$_SERVER["SERVER_NAME"]."/admin/");
?>