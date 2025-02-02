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
	    $request = new Request();	
		$method = $request -> getMethod();
		$URL = $request -> getURL(); 
		
		if(!isset($this-> routes[$method][$URL])) {
			echo "Route not found";
			exit;
		}

		$this -> routes[$method][$URL]();
	}
}
