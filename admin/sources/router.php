<?php 
$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

$curent_url = "index.php" . '?' . $_SERVER['QUERY_STRING'];

$create_url = "index.php";

$urlcu = $create_url;
$urlcu .= (isset($_REQUEST['com'])) ? "?com=".addslashes($_REQUEST['com']) : "";
$urlcu .= (isset($_REQUEST['id_danhmuc'])) ? "&id_danhmuc=".addslashes($_REQUEST['id_danhmuc']) : "";
$urlcu .= (isset($_REQUEST['id_list'])) ? "&id_list=".addslashes($_REQUEST['id_list']) : "";
$urlcu .= (isset($_REQUEST['id_cat'])) ? "&id_cat=".addslashes($_REQUEST['id_cat']) : "";
$urlcu .= (isset($_REQUEST['type'])) ? "&type=".addslashes($_REQUEST['type']) : "";
$urlcu .= (isset($_REQUEST['p'])) ? "&p=".addslashes($_REQUEST['p']) : "";



$db = new PDODb($config['database']);

$items; $item;

switch ($com) {
	case 'news':
		$source = 'news';
		break;
	
	default: 
		$source = "";
		$template = "dashboard";
		break;
}

 ?>