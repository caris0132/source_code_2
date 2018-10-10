<?php
session_start();

//error_reporting(0);
@define ( '_template' , './templates/');
@define ( '_source' , './sources/');
@define ( '_lib' , './admin/lib/');
require __DIR__ . '/vendor/autoload.php';

include_once _lib."config.php";
include_once _lib."constant.php";
include_once _lib."functions.php";
include_once _lib."database.class.php";
include_once _lib."config_type.php";
//include_once _lib."router.php";
if($source!="") include _source.$source.".php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<base href="<?= $config_url ?>">
</head>
<body>

</body>
</html>