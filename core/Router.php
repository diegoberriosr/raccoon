<?php 
namespace app\core;

class Router {
	private array $routes;
	
	public function __constructor(){
		$this->routes = [];	
	}

	private function setRoute($path, $method, $callback) {
		$this->routes[$method][$path] = $callback;
	};

	public function get($path, $callback){
		setRoute($path, HTTP_VERBS::GET, $callback);
	};

	public function post($path, $callback){
		setRoute($path, HTTP_VERBS::POST, $callback);
	}

	public function put($path, $callback){
		setRoute($path, HTTP_VERBS::PUT, $callback);
	}

	public function delete($path, $callback){
		setRoute($path, HTTP_VERBS::DELETE, $callback);
	}
}
