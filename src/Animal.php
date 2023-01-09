<?php

namespace App;

Abstract class Animal
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function getNoise() :string;

    public function noise()
    {
        return self::getNoise();
    }

}