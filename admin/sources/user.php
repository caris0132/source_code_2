<?php 
switch ($act) {
	case "login":
	if(!empty($_POST));
	$template = "user/login";
	break;

	case "logout":
	var_dump('a');
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
	var_dump('a');
	transfer("Đăng xuất thành công", "index.php?com=user&act=login");
}

?>