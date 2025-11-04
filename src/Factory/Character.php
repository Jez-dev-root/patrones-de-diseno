<?php
interface Character {
    public function getName(): string;
    public function attack(): string;
    public function getSpeed(): int;
}
