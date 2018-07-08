<?php
session_start();
@define ( '_template' , './templates/');
@define ( '_source' , './sources/');
@define ( '_lib' , './lib/');

include_once _lib."config.php";
include_once _lib."constant.php";
include_once _lib."database.class.php";	
?>