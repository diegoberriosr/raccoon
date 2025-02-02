<?php
require_once __DIR__.'/../vendor/autoload.php';

use app\core\Application;
use app\core\Views;
use app\core\Response;

$app = new Application();

$app -> get('/raccoon', function(){ 
    $response = new Response(["message" => "hi"]);
    
    $response -> sendAsJson();
});

$app -> run();
