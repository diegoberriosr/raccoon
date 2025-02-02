<?php
namespace app\core;

class Views {
	public static function renderView($name) {
		$filepath = dirname(__DIR__) . '/views/' . $name;

		if(!file_exists($filepath)) {
			echo 'View not found';
			return;
		}
		
		$view = require_once($filepath);
		echo $view;
	}
}

