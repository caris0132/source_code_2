<?php
session_start();

use Phroute\Phroute\RouteCollector;
use Phroute\Phroute\Dispatcher;

$router = new RouteCollector();

$router->get('/a/b/x/{id}', function($id){
    return 'Home Page ' . $id;
});

//router admin
$router->group(['prefix' => 'admin'], function($router){

	$router->get('news', function(){
		$source = 'admin';
		return 'page management';
	});

	$router->get('products', function(){
		return 'product management';
	});

	$router->get('orders', function(){
		return 'order management';
	});
});

$dispatcher =  new Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], processInput($_SERVER['REQUEST_URI']));

echo $response;
dump($_SERVER);

?>