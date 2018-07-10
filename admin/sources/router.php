<?php 
$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";

$create_url = "index.php";
if ($_REQUEST['com']) {
	$create_url .= "?com=" . $_REQUEST['com'];
}

if ($_REQUEST['type']) {
	$create_url .= "&type=" . $_REQUEST['type'];
}

$db = new PDODb($config['database']);

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