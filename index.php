<?php
require_once __DIR__.'/vendor/autoload.php';

use app\core\Application;
use app\core\Request;

$app = new Application();

$app -> get('/raccoon', function(){ 
	$request = new Request();
	
	echo $request -> getUrl() . "<br/>"; 
	echo $request -> getMethod() . "<br/>";
	
	echo "<pre>";
	print_r($request -> getParams());
	echo "</pre>";
});

$app -> run();
