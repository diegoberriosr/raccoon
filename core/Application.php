<?php 
namespace app\core;

class Application {
	private Router $router;
		
	public function __construct() {
		$this -> router = new Router();	
	}
	
	public function get($path, $callback){
		$this-> router -> setRoute($path, 'GET', $callback);
	}

	public function post($path, $callback){
		$this-> router -> setRoute($path, 'POST', $callback);
	}

	public function put($path, $callback){
		$this-> router -> setRoute($path, 'PUT', $callback);
	}

	public function delete($path, $callback){
		$this-> router -> setRoute($path, 'DELETE', $callback);
	}

	public function run(){
		$this-> router -> resolveRequest();
	}
}
