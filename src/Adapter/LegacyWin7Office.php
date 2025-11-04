<?php
require_once __DIR__ . '/OfficeFile.php';

class LegacyWin7Office {
    public function openLegacy(OfficeFile $file): string {
        $ok = in_array($file->extension, ['doc','xls','ppt'], true);
        if (!$ok) throw new RuntimeException("Win7 no puede abrir .{$file->extension}");
        return "Win7 abrió archivo legado: {$file->name}.{$file->extension}";
    }
}
