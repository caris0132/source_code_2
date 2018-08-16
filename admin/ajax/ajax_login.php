<?php 

include 'ajax_config.php';


if ($_POST['username'] && $_POST['password']) {
	global $db;
	$username = $_POST['username'];
	$password = $_POST['password'];

	$db->where('username', $username);
	$db->where('password', md5($password));

	$user = $db->getOne('user');



	if ($user) {
		$_SESSION['isLoggedIn'] = true;
		$_SESSION['login']['username'] = $username;
		$_SESSION['login']['name'] = $user['ten'];
		$_SESSION['ck'] = $config_url;

		echo json_encode(['page' => 'index.php']);
	}
	else {
		echo json_encode(['error' => 'Sai thông tin tài khoản hoặc mật khẩu']);
	}

}
?>