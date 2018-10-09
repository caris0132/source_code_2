<?php 
include 'ajax_config.php';

if ($_POST['id'] && $_POST['table'] && $_POST['key']) {
	$db->where('id', (int)$_POST['id']);
	$db->update($_POST['table'], [$_POST['key'] => $_POST['value']]);

}
 ?>