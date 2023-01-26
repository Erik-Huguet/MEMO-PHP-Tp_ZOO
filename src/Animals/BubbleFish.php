<?php

namespace App\Animals;


class BubbleFish extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function getNoises(): string
    {
        return "$this :Bloubloublou,Bloubloublou".PHP_EOL;
    }
}