<?php 
include 'ajax_config.php';
if ($_POST['id']) {
	$db->where('id', (int)$_POST['id']);
	$item = $db->getOne('hinhanh');
	$photo = glob( '../../upload/*/' . $item['photo']);
	$thumb = glob( '../../upload/*/' . $item['thumb']);
	if ($photo) {
		delete_file($photo[0]);
	}

	if ($thumb) {
		delete_file($thumb[0]);
	}


	$db->where('id', (int)$_POST['id']);
	$db->delete('hinhanh');
	echo json_encode(true);
}

 ?>