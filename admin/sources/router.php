<?php 
$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
$db = new PDODb($config['database']);
$news = $db->get('news');

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