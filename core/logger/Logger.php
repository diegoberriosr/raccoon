<?php
namespace app\core

class Logger {
	private static $defaultTimeFormatting = "Y-m-d H:i:s";

	private function info($message) {
		log(Colors::BLUE, 'INFO', $message);
	}

	private function warn($message) {
		log(Colors::YELLOW, 'WARNING', $message);		
	}

	private function error($message){
		log(Colors::RED, 'WARNING', $message);
	}
			
	private function success($message){
		log(COLORS::GREEN, 'OK', $message);	
	}

	private function event($message){
		log(COLORS::PURPLE, 'EVENT', $message);	
	};

	private function log($color, $prefix, $message){
		$currentTimestamp = date($this->defaultTimeFormatting, time());
		
		echo $color . "[" . $prefix ."]" . " " . $currentTimestamp . ": " Colors::WHITE . $message . "\n";
	}
}
