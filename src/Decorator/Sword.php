<?php
require_once __DIR__ . '/WeaponDecorator.php';

class GreatSword extends WeaponDecorator {
    public function getDamage(): int { return $this->wrappee->getDamage() + 12; }
    public function attack(): string { return $this->wrappee->attack() . ' + Tajada poderosa (+12).'; }
}
