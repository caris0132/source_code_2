<?php 
include 'ajax_config.php';

if ($_POST['id'] && $_POST['table'] ) {
	$id = $_POST['id'];
	if (empty($id)) {
		return false;
	}
	if (is_array($id)) {
		$db->where('id', $id, 'IN');
	}
	else {
		$db->where('id', (int)$id);
		$item = $db->getOne($_REQUEST['table']);
		$photo = glob( '../../upload/*/' . $item['photo']);
		$thumb = glob( '../../upload/*/' . $item['thumb']);
		if ($photo) {
			delete_file($photo[0]);
		}

		if ($thumb) {
			delete_file($thumb[0]);
		}


		$db->where('id', (int)$id);
	}


	$db->delete($_REQUEST['table']);
	echo 1;

}
?>