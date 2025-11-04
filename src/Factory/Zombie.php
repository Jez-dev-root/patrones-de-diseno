<?php
require_once __DIR__ . '/Character.php';

class Zombie implements Character {
    public function getName(): string { return 'Zombi'; }
    public function attack(): string { return 'Mordisco corrosivo a corta distancia.'; }
    public function getSpeed(): int { return 3; }
}
