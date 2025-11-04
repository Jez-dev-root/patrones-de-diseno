<?php
require_once __DIR__ . '/Character.php';

class Skeleton implements Character {
    public function getName(): string { return 'Esqueleto'; }
    public function attack(): string { return 'Lanza flechas óseas a distancia.'; }
    public function getSpeed(): int { return 8; }
}
