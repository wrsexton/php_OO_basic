<?php

include_once(__DIR__ . "/animal.php");

class Cat extends Animal
{
    function __construct($name)
    {
        echo "Constructing Cat\n";
        parent::__construct($name);
    }

    public function speak()
    {
        echo "Meow\n";
    }
}
