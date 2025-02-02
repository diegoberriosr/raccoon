<?php
require_once __DIR__.'/../vendor/autoload.php';

use app\core\Application;
use app\core\Views;

$app = new Application();

$app -> get('/raccoon', function(){ 
	Views::RenderView('test.php');
});

$app -> run();
