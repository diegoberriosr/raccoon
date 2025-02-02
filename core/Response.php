<?php
namespace app\core;

class Response {
    private $data;
    private $status;

    public function __construct($data) {
        $this -> data = $data;
        $this -> status = 200;
    }

    public function setStatusCode($statusCode): void {
        $this->status = $statusCode; 
        http_response_code($statusCode);
    }

    public function sendAsJson(): void {
        header('Content-Type: application/json');
        echo json_encode($this->data);
    }

    public function getData(): array|string {
        return $this -> data;
    }

    public function getStatus(): int {
        return $this -> status;
    }

}
