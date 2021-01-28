<?php

abstract class Animal
{
    protected $name;

    function __construct($name)
    {
        echo "Constructing Animal, " . $name . "\n";
        $this->name = $name;
    }

    abstract public function speak();

    public function getName()
    {
        return $this->name;
    }

}

