<?php 
namespace app\core;

class Router {
	private array $routes;
	
	public function __constructor(){
		$this -> routes = [];
	}

	public function setRoute($path, $method, $callback) {
		$this->routes[$method][$path] = $callback;
	}

	public function resolveRequest() {
		$method = $_SERVER['REQUEST_METHOD'];
		$URI = $_SERVER['REQUEST_URI'];
		
		if(isset($this-> routes[$method][$URI])) {
			$this-> routes[$method][$URI]();
		} else {
			echo '404: Route not found';
		}
	}
}
