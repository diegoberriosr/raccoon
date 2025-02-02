<?php
require_once __DIR__.'/vendor/autoload.php';

use app\core\Application;

$app = new Application();

$app -> get('/raccoon', function(){ 
	echo "Hello raccoon!";
});

$app -> run();
