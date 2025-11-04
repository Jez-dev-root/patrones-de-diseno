<?php
require_once __DIR__ . '/BaseCharacter.php';
require_once __DIR__ . '/Sword.php';
require_once __DIR__ . '/Bow.php';

$chars = [
    new GreatSword(new Warrior()),
    new LongBow(new Archer()),
    new GreatSword(new LongBow(new Warrior())),
];

foreach ($chars as $c) {
    echo "{$c->getName()} ataca: {$c->attack()} | Daño total: {$c->getDamage()}\n";
}
