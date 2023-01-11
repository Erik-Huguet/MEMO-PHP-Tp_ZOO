<?php
namespace App;

    class CatFish extends Animal
    {
        public function __construct($name)
        {
            parent::__construct($name);
        }

        public function getNoises(): string
        {
            return "Bloubloublou,Glouglouglou".PHP_EOL;
        }
    }