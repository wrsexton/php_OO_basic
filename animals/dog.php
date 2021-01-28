<?php

include_once(__DIR__ . "/animal.php");

class Dog extends Mammal
{
    function __construct($name)
    {
        echo "Constructing Dog\n";
        $this->is_aquatic = False;
        parent::__construct($name);
    }

    public function speak()
    {
        echo "Woof\n";
    }
}

