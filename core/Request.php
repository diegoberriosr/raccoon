<?php
namespace app\core;

class Request {
	private string $url;
	private array $params;
	private string $method;

	public function __construct(){
		$this -> url = $this -> parseRequestPath();
		$this -> method = $this -> parseRequestMethod();
		$this -> params = $this -> parseRequestParams();
	}

	private function parseRequestPath(){
		$requestPath = $_SERVER['REQUEST_URI'] ?? null;
		$stringSize = strlen($requestPath); 

		if(!$requestPath || $stringSize === 0) return null;
		
		$boundaryIndex = strpos($requestPath, '?');		
		
		if($boundaryIndex && $boundaryIndex + 1 < strlen($requestPath)) $requestPath = substr($requestPath, 0, $boundaryIndex);

		return $requestPath;
	}
	
	private function parseRequestMethod(){
		return $_SERVER['REQUEST_METHOD'];
	}

	private function parseRequestParams(){
		$requestParamsString = $this -> getRequestParamsString();
		if(!$requestParamsString) return [];

		$paramsDictionary = [];

		foreach(explode('&', $requestParamsString) as $param){
			$keyValuePair = explode('=', $param);
			
			if(count($keyValuePair) === 2) {
				$paramsDictionary[$keyValuePair[0]] = $keyValuePair[$keyValuePair[1]];		
			}
		}
		
		return $paramsDictionary;
	}

	private function getRequestParamsString(){
		$requestPath = $_SERVER['REQUEST_URI'] ?? null;

		if(!$requestPath) return null;

		$boundaryIndex = strpos($requestPath, '?');
		
		if(!$boundaryIndex || $boundaryIndex + 1 >= strlen($requestPath)) return null;

		$paramsString = substr($requestPath, $boundaryIndex + 1);

		return $paramsString;
	}
	
	public function getUrl(){
		return $this -> url;
	}

	public function getMethod(){
		return $this -> method;	
	}

	public function getParams(){
		return $this -> params;	
	}
}
