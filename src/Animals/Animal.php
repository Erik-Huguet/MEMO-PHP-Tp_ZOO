<?php

namespace App\Animals;

Abstract class Animal
{
    private $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract protected function getNoises():string;

    public function noise()
    {
        return $this->getNoises();
    }




}