<?php

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

$urlcu = $create_url;
$urlcu .= (isset($_REQUEST['id_danhmuc'])) ? "&id_danhmuc=".addslashes($_REQUEST['id_danhmuc']) : "";
$urlcu .= (isset($_REQUEST['id_list'])) ? "&id_list=".addslashes($_REQUEST['id_list']) : "";
$urlcu .= (isset($_REQUEST['id_cat'])) ? "&id_cat=".addslashes($_REQUEST['id_cat']) : "";
$urlcu .= (isset($_REQUEST['type'])) ? "&type=".addslashes($_REQUEST['type']) : "";
$urlcu .= (isset($_REQUEST['p'])) ? "&p=".addslashes($_REQUEST['p']) : "";


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
	if($_REQUEST['type']!='')
	{
		$db->where('type', $_REQUEST['type']);
	}
	if($_REQUEST['id_danhmuc']!='')
	{
		$db->where('type', (int)$_REQUEST['id_danhmuc']);
	}
	if($_REQUEST['id_list']!='')
	{
		$db->where('type', (int)$_REQUEST['id_list']);
	}
	$item = $db->getOne('news');
}

function save_edit_item($value='')
{
	global $db, $act;




	# validate dữ liệu trước khi thực thi.
	$data = $_POST['data'];

	$id = (int)$_POST['id'];

	$data['id_danhmuc'] = (int)$data['id_danhmuc'];
	$data['id_list'] = (int)$data['id_list'];
	$data['hienthi'] = isset($data['hienthi']) ? 1 : 0;
	$data['noibat'] = isset($data['noibat']) ? 1 : 0;

	var_dump($data);
	if ($act == 'save') {
		$data['ngaytao'] = $db->now();
		if ($db->insert('news',$data)) {
			echo "Insert thành công";
		} else {
			echo "Insert thất bại";
		}
		
	} else {
		$data['ngaysua'] = $db->now();
		$db->where('id', $id);
		if ($db->update('news', $data)) {
			echo "Update thành công";
		} else {
			echo "Update thất bại";
		}
		
	}
	

	die();


	$file_name = $_FILES['file']['name'];
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=news&act=man".$urlcu);
	$id = isset($_POST['id']) ? intval($_POST['id']) : "";

	if ($id) {
		# code...
	}
}

?>