<?php
	define('_lib','../lib/');
	@include _lib."config.php";
	@include_once _lib."function.php";
	$d = new func_index($config['database']);

	$id = addslashes($_POST['province_id']);

	$district_id = $_POST['district_id'];
	
	
	$district = $d->o_sel("*","#_district","province_id = '".$id."'");
	echo '<option value="">Chọn Quận - Huyện</option>';
	foreach ($district as $tp) {
?>
	<option <?php if ($district_id == $tp['district_id']) echo "selected"; ?> value="<?=$tp['district_id'] ?>"><?=$tp['district_name'] ?></option>
<?php } ?>