<?php
session_start();
error_reporting(0);
@define ( '_template' , '../templates/');
@define ( '_source' , '../sources/');
@define ( '_lib' , '../lib/');

require '../../vendor/autoload.php';
include_once _lib."config.php";
include_once _lib."constant.php";
include_once _lib."functions.php";

include_once _lib."database.class.php";
$db = new PDODb($config['database']);

?>
