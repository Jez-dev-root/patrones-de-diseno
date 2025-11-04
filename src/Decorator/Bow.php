<?php
require_once __DIR__ . '/WeaponDecorator.php';

class LongBow extends WeaponDecorator {
    public function getDamage(): int { return $this->wrappee->getDamage() + 8; }
    public function attack(): string { return $this->wrappee->attack() . ' + Flecha de largo alcance (+8).'; }
}
