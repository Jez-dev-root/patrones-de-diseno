<?php
require_once __DIR__ . '/Character.php';

abstract class WeaponDecorator implements Character {
    public function __construct(protected Character $wrappee) {}
    public function getName(): string { return $this->wrappee->getName(); }
    public function getDamage(): int { return $this->wrappee->getDamage(); }
    public function attack(): string { return $this->wrappee->attack(); }
}
