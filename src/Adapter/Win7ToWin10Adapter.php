<?php
require_once __DIR__ . '/LegacyWin7Office.php';
require_once __DIR__ . '/Win10Office.php';

class Win7ToWin10Adapter extends Win10Office {
    public function __construct(private LegacyWin7Office $legacy) {}

    public function openModern(OfficeFile $file): string {
        $isModern = in_array($file->extension, ['docx','xlsx','pptx'], true);
        if ($isModern) return parent::openModern($file);

        $map = ['doc'=>'docx','xls'=>'xlsx','ppt'=>'pptx'];
        if (!isset($map[$file->extension])) throw new RuntimeException("Extensión no soportada: .{$file->extension}");

        $this->legacy->openLegacy($file);
        $converted = new OfficeFile($file->name, $map[$file->extension]);
        return "Adapter convirtió {$file->name}.{$file->extension} -> {$converted->name}.{$converted->extension}\n"
             . parent::openModern($converted);
    }
}
