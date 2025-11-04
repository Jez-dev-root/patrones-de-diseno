<?php
require_once __DIR__ . '/OutputStrategy.php';

class TxtOutput implements OutputStrategy {
    public function __construct(private string $filename = 'salida.txt') {}
    public function output(array $data): void {
        $line = implode(' | ', array_map(fn($k,$v)=>"$k: $v", array_keys($data), $data)) . PHP_EOL;
        file_put_contents($this->filename, $line, FILE_APPEND);
        echo "[TXT] Guardado en {$this->filename}\n";
    }
}
