<?php 

switch ($act) {
	case "login":
	if(!empty($_POST));
	$template = "user/login";
	break;

	case "logout":
	logout();
	break;

	case "add":
	$template = "user/item_add";
	break;

	case "edit":		
	get_item();		
	$template = "user/item_add";
	break;

	case "save":
	save_edit_item();
	break;

	case "delete":
	delete_item();
	break;
}


function logout()
{
	$_SESSION['login'] = false;
	$_SESSION['isLoggedIn'] = false;
	
	die();
	transfer("Đăng xuất thành công", "index.php?com=user&act=login");
}

?>