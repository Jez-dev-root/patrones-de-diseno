<?php
interface Character {
    public function getName(): string;
    public function getDamage(): int;
    public function attack(): string;
}
