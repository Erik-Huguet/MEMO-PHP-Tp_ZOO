<?php

namespace App\Animals;

class ClownFish extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function getNoises(): string
    {
        return "$this :bloubloubloublou".PHP_EOL;
    }
}