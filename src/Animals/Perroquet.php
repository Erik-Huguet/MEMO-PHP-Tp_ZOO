<?php

namespace App\Animals;

use App\Interface\CanFly;

class Perroquet extends Animal implements CanFly
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function getNoises(): string
    {
        return "$this :coco".$this->ICanFly().PHP_EOL;
    }
    public function ICanFly(): string
    {
        return "I beleeve I can fly";
    }


}