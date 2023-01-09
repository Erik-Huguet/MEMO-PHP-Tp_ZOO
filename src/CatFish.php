<?php

namespace App;

class CatFish extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }
    public function getNoise(): string
    {
        return "miaoubloublou".PHP_EOL;
    }
}