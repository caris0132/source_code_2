<?php	if(!defined('_source')) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

$urlcu = "";
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

?>