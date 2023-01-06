<?php

namespace Animals\Fish;

use App\Animal;

class Fish extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }
    public function getNoise(): string
    {
       return "bloubloublou".PHP_EOL;
    }

}