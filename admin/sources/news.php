<?php
$imagine = new Imagine\Gd\Imagine();



switch ($act) {
	case 'man':
	get_items();
	$template = "news/items";
	break;

	case "add":
	$template = "news/item_add";
	break;

	case "edit":		
	get_item();		
	$template = "news/item_add";
	break;

	case "save":
	save_edit_item();
	break;
	
	
}

function get_items()
{
	global $db, $items;
	if($_REQUEST['type']!='')
	{
		$db->where('type', $_REQUEST['type']);
	}
	$db->orderBy("stt","ASC");
	$db->orderBy("id","DESC");
	$items = $db->get('news');
}

function get_item()
{
	$id= (int)$_REQUEST['id'];
	if (!$id) {
		return false;
	}
	global $db, $item;
	$db->where('id', $id);
	
	$item = $db->getOne('news');
}

function save_edit_item()
{
	global $db, $act, $urlcu;

	# validate dữ liệu trước khi thực thi.
	$data = $_POST['data'];

	$id = (int)$_POST['id'];

	$data['id_danhmuc'] = (int)$data['id_danhmuc'];
	$data['id_list'] = (int)$data['id_list'];
	$data['hienthi'] = isset($data['hienthi']) ? 1 : 0;
	$data['noibat'] = isset($data['noibat']) ? 1 : 0;

	$file_name = $_FILES['file']['name'];

	if ($file_name) {
		$data['photo'] = upload_image('file', _upload_tintuc , $file_name);

		$thumb_type = _style_thumb != 1 ? THUMBNAIL_INSET : THUMBNAIL_OUTBOUND;
		$data['thumb'] = create_thumb($data['photo'], _width_thumb, _height_thumb,$thumb_type, _upload_tintuc,$file_name);
		if ($id) {
			$db->where('id', $id);
			$row = $db->getOne('news');
			delete_file(_upload_tintuc.$row['photo']);
			delete_file(_upload_tintuc.$row['thumb']);
		}
	}

	if (!$id) {
		//insert
		$data['ngaytao'] = time();
		if ($db->insert('news',$data)) {
			$msg = "Insert thành công";
		} else {
			$msg = "Insert thất bại";
		}
		
	} else {
		//update
		$data['ngaysua'] = time();;
		$db->where('id', $id);
		if ($db->update('news', $data)) {
			$msg = "Update thành công";
		} else {
			$msg = "Update thất bại";
		}
		
	}

	if ($_FILES['files']) {
		$files = reArrayFiles($_FILES['files']);
		foreach ($files as $key_file => $file) {
			$photo = upload_photos($file, _upload_hinhthem,$file_name);
			$data1['photo'] = $photo;
			$data1['thumb'] = create_thumb($data1['photo'], 100, 100,1, _upload_hinhthem,$file_name);
			$data1['stt'] = (int)$key_file;
			$data1['type'] = $_POST['type'];
			$data1['id_hinhanh'] = $id;
			$data1['hienthi'] = 1;

			$db->reset();

			$db->insert('hinhanh', $data1);
		}
	}

	transfer($msg, $urlcu . "&act=man");
}

?>