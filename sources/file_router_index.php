<?php
	$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
	$alias = (isset($_REQUEST['alias'])) ? addslashes($_REQUEST['alias']) : "";
	$alias1 = (isset($_REQUEST['alias1'])) ? addslashes($_REQUEST['alias1']) : "";
	$alias2 = (isset($_REQUEST['alias2'])) ? addslashes($_REQUEST['alias2']) : "";
		
	if($com=='category') {
		$source='category';
	}else if($com=='product') {
		$source='product-detail';
	}else{
		$source='index';
	}
?>