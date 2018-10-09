<?php

switch ($act) {
	case 'man':
	$items = get_items($com, $level);
	$template = "news_danhmuc/items";
	break;

	case "add":
	$template = "news_danhmuc/item_add";
	break;

	case "edit":
	$id = (int)$_REQUEST['id'];
	$item = get_item($id, $com);
	$template = "news_danhmuc/item_add";
	break;

	case "save":
	$result = save_edit_item($config_current, $com, $id_login);

	$msg = ($result) ? 'Cập nhật thành công!' : 'Cập nhật thất bại!' ;

	transfer($msg, $urlcu . "&act=man&level=$level");
	
	break;

	case "delete":
	delete_item();
	break;
}

function get_items($com, $level = 0)
{
	global $db;
	if($_REQUEST['type']!='')
	{
		$db->where('type', $_REQUEST['type']);
	}

	$db->where('level', $level);

	$db->orderBy("stt","ASC");
	$db->orderBy("id","DESC");
	$items = $db->get($com);
	return $items;
}

function get_item($id , $com)
{
	if (!$id) {
		return false;
	}
	global $db;
	$db->where('id', $id);

	$item = $db->getOne($com);
	return $item;
}

function save_edit_item($config_current, $com, $id_login)
{
	global $db;




	# validate dữ liệu trước khi thực thi.
	$data = $_POST['data'];

	$id = (int)$_POST['id'];
	foreach ($_POST['id_danhmuc'] as $value) {
		if ($value) {
			$danhmuc = $value;
		}
	}
	$data['id_parent'] = (int)$danhmuc;
	
	foreach ($config_current['checkbox'] as $key => $value) {
		$data[$key] = isset($data[$key]) ? $data[$key] : 0;
	}

	$file_name = $_FILES['file']['name'];

	if ($file_name) {
		$data['photo'] = upload_image('file', _upload_tintuc , $file_name);

		$thumb_type = $config_current['image']['thumb'];
		$thumb_width = $config_current['image']['width'];
		$thumb_height = $config_current['image']['height'];
		$data['thumb'] = create_thumb($data['photo'], $thumb_width, $thumb_height,$thumb_type, _upload_tintuc,$file_name);
		if ($id) {
			$db->where('id', $id);
			$row = $db->getOne($com);
			delete_file(_upload_tintuc.$row['photo']);
			delete_file(_upload_tintuc.$row['thumb']);
		}
	}
	if (!$id) {
		//insert
		$data['id_owner'] = (int)$id_login;
		$data['ngaytao'] = time();
		$id = $db->insert($com,$data);

	} else {
		//update
		$data['ngaysua'] = time();;
		$db->where('id', $id);
		if (!$db->update($com, $data)) {
			return false;
		}

	}



	if (!empty($_FILES['files']['name'])) {

		$files = reArrayFiles($_FILES['files']);

		foreach ($files as $key_file => $file) {
			if ($file['error'] == 0) {
				$photo = upload_photos($file, _upload_hinhthem,$file_name);
				$data1['photo'] = $photo;
				$thumb_img_type = $config_current['list_img']['type'];
				$thumb_img_width = $config_current['list_img']['width'];
				$thumb_img_height = $config_current['list_img']['height'];
				$data1['thumb'] = create_thumb($data1['photo'], $thumb_img_width, $thumb_img_height,$thumb_img_type, _upload_hinhthem,$file_name);
				$data1['stt'] = (int)$key_file;
				$data1['type'] = $data['type'];
				$data1['id_hinhanh'] = $id;
				$data1['hienthi'] = 1;


				$db->reset();

				$db->insert('hinhanh', $data1);
			}
		}
	}

	return $id;
}

function delete_item()
{
	global $db;

	$id = $_POST['id'];
	if (empty($id)) {
		return false;
	}
	if (is_array($id)) {
		$db->where('id', $id, 'IN');
	}
	else {
		$db->where('id', (int)$id);
	}

	return $db->delete($_REQUEST['com'])? true : false;
}

?>