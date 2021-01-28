<?php

include_once(__DIR__ . "/animal.php");

class Dog extends Animal
{
    function __construct($name)
    {
        echo "Constructing Dog\n";
        parent::__construct($name);
    }

    public function speak()
    {
        echo "Woof\n";
    }
}

