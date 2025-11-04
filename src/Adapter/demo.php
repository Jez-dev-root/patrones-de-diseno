<?php
require_once __DIR__ . '/Win7ToWin10Adapter.php';

$adapter = new Win7ToWin10Adapter(new LegacyWin7Office());

$files = [
    new OfficeFile('informe', 'doc'),
    new OfficeFile('balances', 'xlsx'),
    new OfficeFile('presentacion', 'ppt'),
];

foreach ($files as $f) {
    try {
        echo $adapter->openModern($f) . "\n";
    } catch (Throwable $e) {
        echo "Error: {$e->getMessage()}\n";
    }
}
