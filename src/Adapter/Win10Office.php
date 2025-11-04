<?php
require_once __DIR__ . '/OfficeFile.php';

class Win10Office {
    public function openModern(OfficeFile $file): string {
        $ok = in_array($file->extension, ['docx','xlsx','pptx'], true);
        if (!$ok) throw new RuntimeException("Win10 espera formato moderno, recibido .{$file->extension}");
        return "Win10 abrió archivo moderno: {$file->name}.{$file->extension}";
    }
}
