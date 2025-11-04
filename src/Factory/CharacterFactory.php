<?php
require_once __DIR__ . '/Skeleton.php';
require_once __DIR__ . '/Zombie.php';

final class CharacterFactory {
    public static function create(string $level): Character {
        $level = strtolower(trim($level));
        return match ($level) {
            'facil', 'fácil', 'easy'    => new Skeleton(),
            'dificil', 'difícil', 'hard' => new Zombie(),
            default => throw new InvalidArgumentException("Nivel no soportado: $level"),
        };
    }
}
