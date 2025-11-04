<?php
require_once __DIR__ . '/OutputStrategy.php';

class ConsoleOutput implements OutputStrategy {
    public function output(array $data): void {
        echo "[CONSOLE] " . json_encode($data, JSON_UNESCAPED_UNICODE) . PHP_EOL;
    }
}
