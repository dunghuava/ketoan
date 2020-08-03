<?php
	define('_lib','../lib/');
	@include _lib."config.php";
	@include_once _lib."function.php";
	$d = new func_index($config['database']);

	$id = addslashes($_POST['district_id']);

	$ward_id = $_POST['ward_id'];
	
	
	$ward = $d->o_sel("*","#_ward","district_id = '".$id."'");
	echo '<option value="">Chọn Phường - Xã</option>';
	foreach ($ward as $ph) {
?>
<option <?php if ($ward_id == $ph['ward_id']) echo "selected"; ?> value="<?=$ph['ward_id'] ?>"><?=$ph['ward_name'] ?></option>
<?php } ?>