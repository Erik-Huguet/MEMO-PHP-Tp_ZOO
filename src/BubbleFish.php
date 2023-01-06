<?php

namespace Animals\BubbleFish;

use App\Animal;

class BubbleFish extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function getNoise(): string
    {
        return 'Bloubloublou,Bloubloublou'.PHP_EOL;
    }
}