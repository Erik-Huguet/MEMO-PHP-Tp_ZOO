<?php
namespace App;

    class Fish extends Animal
    {
        public function __construct($name)
        {
            parent::__construct($name);
        }

        public function getNoises(): string
        {
            return  "bloubloublou \n\r";

        }

    }