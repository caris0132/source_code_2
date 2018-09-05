<?php 
include 'ajax_config.php';

if ($_POST['id'] && $_POST['table'] ) {
	$id = $_POST['id'];
	$table = $_POST['table'];
	delete_item($id, $table);

	$con_table = explode('_' , $table);
	if ($con_table['1'] == 'danhmuc') {
		$arr_danhmuc = [];
		
		$list_danhmuc = $db->get($table, null, 'id, id_parent');

		if (is_array($id)) {
			foreach ($id as $item_id) {
				array_push($arr_danhmuc, $item_id);
				dequy_get_con_item($list_danhmuc, $item_id);
			}
		} else {
			array_push($arr_danhmuc, $id);
			dequy_get_con_item($list_danhmuc, $id);
		}
		
		
	}

	//get list id item phụ thuộc vào các cấp cần xóa
	$db->where('id_danhmuc', $arr_danhmuc, 'IN');
	$list_con_id = $db->get($con_table[0], null, 'id');
	$arr_con_id = [];
	foreach ($list_con_id as $item) {
		array_push($arr_con_id , $item['id']);
	}

	if (count(arr_con_id)) {
		delete_item($arr_con_id, $con_table[0]);
	}

}

function dequy_get_con_item($list_danhmuc, $id_danhmuc )
{
	global $db, $arr_danhmuc;
	foreach ($list_danhmuc as $key => $item) {
		if ($item['id_parent'] == $id_danhmuc) {
			unset($list_danhmuc[$key]);
			array_push($arr_danhmuc, $item['id']);
			dequy_get_con_item($list_danhmuc, $item['id']);
		}
	}



}

function delete_item($id, $table)
{
	global $db;
	if (is_array($id)) {
		$db->where('id', $id, 'IN');
		$items = $db->get($table, null, 'thumb, photo');
		foreach ($items as $item) {
			$photo = glob( '../../upload/*/' . $item['photo']);
			$thumb = glob( '../../upload/*/' . $item['thumb']);
			if ($photo) {
				delete_file($photo[0]);
			}

			if ($thumb) {
				delete_file($thumb[0]);
			}
		}

		$db->where('id', $id, 'IN');
	}
	else {
		$db->where('id', (int)$id);
		$item = $db->getOne($table);
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


	$db->delete($table);
	echo 1;
}

?>