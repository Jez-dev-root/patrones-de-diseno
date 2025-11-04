<?php
require_once __DIR__ . '/OutputStrategy.php';

class JsonOutput implements OutputStrategy {
    public function output(array $data): void {
        echo json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . PHP_EOL;
    }
}
