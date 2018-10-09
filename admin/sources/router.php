<?php 
session_start();

$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
$type = (isset($_REQUEST['type'])) ? addslashes($_REQUEST['type']) : "";
$level = (isset($_REQUEST['level'])) ? addslashes($_REQUEST['level']) : "";

$curent_url = "index.php" . '?' . $_SERVER['QUERY_STRING'];

$create_url = "index.php";

$urlcu = $create_url;
$urlcu .= (isset($_REQUEST['com'])) ? "?com=".addslashes($_REQUEST['com']) : "";
$urlcu .= (isset($_REQUEST['id_danhmuc'])) ? "&id_danhmuc=".addslashes($_REQUEST['id_danhmuc']) : "";
$urlcu .= (isset($_REQUEST['id_list'])) ? "&id_list=".addslashes($_REQUEST['id_list']) : "";
$urlcu .= (isset($_REQUEST['id_cat'])) ? "&id_cat=".addslashes($_REQUEST['id_cat']) : "";
$urlcu .= (isset($_REQUEST['type'])) ? "&type=".addslashes($_REQUEST['type']) : "";
$urlcu .= (isset($_REQUEST['p'])) ? "&p=".addslashes($_REQUEST['p']) : "";


$config_current = $config_type[$com][$type];
if ($level != '') {
	$config_current = $config_type[$com][$type][$level];
}

$db = new PDODb($config['database']);
$imagine = new Imagine\Gd\Imagine();


$items; $item;

if($act !='login' && !($_SESSION['login']['username'] && $_SESSION['isLoggedIn'])){
	redirect("index.php?com=user&act=login");
}

$db->where('username', $_SESSION['login']['username']);
$user = $db->getOne('user');

$id_login = $user['id'];
$is_root = $user['is_root'];


//get info user login
switch ($com) {
	case 'news':
	$source = 'news';
	break;

	case 'news_danhmuc':
	$source = 'news_danhmuc';
	break;

	case 'user':
	$source = 'user';
	break;
	
	default: 
	$source = "";
	$template = "dashboard";
	break;
}

if (!check_quyen($type, $act)) {
	transfer('Bạn không có quyền truy cập mục này', 'index.php?com=user&act=login');
}
?>