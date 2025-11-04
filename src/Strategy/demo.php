<?php
require_once __DIR__ . '/ConsoleOutput.php';
require_once __DIR__ . '/JsonOutput.php';
require_once __DIR__ . '/TxtOutput.php';

$message = ['status' => 'ok', 'message' => 'Hola desde Strategy', 'time' => date('c')];

$strategies = [new ConsoleOutput(), new JsonOutput(), new TxtOutput(__DIR__ . '/log.txt')];

foreach ($strategies as $s) {
    $s->output($message);
}
