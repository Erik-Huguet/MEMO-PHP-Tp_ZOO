<?php
namespace App\Animals;

    class CatFish extends Animal
    {
        public function __construct($name)
        {
            parent::__construct($name);
        }

        public function getNoises(): string
        {
            return "$this :Bloubloublou,Glouglouglou".PHP_EOL;
        }
    }