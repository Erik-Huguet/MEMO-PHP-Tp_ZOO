<?php

namespace App\Animals;

class Perroquet extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function getNoises(): string
    {
        return "coco".PHP_EOL;
    }
}