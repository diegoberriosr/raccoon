<?php 
namespace app\core;

class Application {
	public Logger $logger;
	private Router $router;
		
	public function __construct() {
		$logger -> new Logger();
		$router -> new Router();	
	};

	public function getRouter(){
		return $this -> router;
	};

	public function run(){
		echo "TO DO";	
	};
}
