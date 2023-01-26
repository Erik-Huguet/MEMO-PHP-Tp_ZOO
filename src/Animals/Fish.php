<?php
namespace App\Animals;

    class Fish extends Animal
    {
        public function __construct($name)
        {
            parent::__construct($name);
        }

        public function getNoises(): string
        {
            return  "$this :bloubloublou \n\r";

        }

    }