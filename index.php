<?php
require_once __DIR__.'/vendor/autoload.php';

use app\core\Application;

$app = new Application();

$app -> get('/hi', function(){ echo 'Hi';});
$app -> get('/test', function(){ echo 'Test';});
$app -> get('/raccon', function(){ echo 'Hello from Raccoon';});

$app -> run();
