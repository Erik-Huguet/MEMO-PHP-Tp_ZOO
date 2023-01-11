<?php

namespace App\Animals;

class Elephant extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function getNoises(): string
    {
        return "tttrrrouuu".PHP_EOL;
    }
}