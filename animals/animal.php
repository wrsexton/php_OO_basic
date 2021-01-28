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

abstract class Reptile extends Animal
{
    public $has_legs;
}

abstract class Mammal extends Animal
{
    public $is_aquatic;
}

trait Pet
{
    public function bellyrub()
    {
        echo "This one loves belly rubs!\n";
    }
}