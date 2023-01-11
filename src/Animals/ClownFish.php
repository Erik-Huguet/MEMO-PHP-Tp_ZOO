<?php

namespace App;

class ClownFish extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function getNoises(): string
    {
        return "bloubloubloublou".PHP_EOL;
    }
}