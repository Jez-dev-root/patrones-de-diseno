<?php
require_once __DIR__ . '/CharacterFactory.php';

foreach (['fácil','difícil'] as $nivel) {
    $c = CharacterFactory::create($nivel);
    echo "Nivel: $nivel\n";
    echo "Personaje: {$c->getName()}\n";
    echo "Ataque: {$c->attack()}\n";
    echo "Velocidad: {$c->getSpeed()}\n";
    echo "-------------------------\n";
}
