<?php 
namespace app\core;

enum HTTP_VERBS: string {
	case GET = 'GET';
	case POST = 'POST';
	case PUT = 'PUT';
	case DELETE = 'DELETE';
}
