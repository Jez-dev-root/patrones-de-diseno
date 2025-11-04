<?php
require_once __DIR__ . '/Character.php';

class Warrior implements Character {
    public function getName(): string { return 'Guerrero'; }
    public function getDamage(): int { return 10; }
    public function attack(): string { return 'Golpe básico de espada corta.'; }
}

class Archer implements Character {
    public function getName(): string { return 'Arquero'; }
    public function getDamage(): int { return 7; }
    public function attack(): string { return 'Disparo básico de flecha.'; }
}
