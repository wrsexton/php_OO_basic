<?php

include_once(__DIR__ . "/animal.php");

class Cat extends Mammal
{
    use Pet;

    function __construct($name)
    {
        echo "Constructing Cat\n";
        $this->is_aquatic = False;
        parent::__construct($name);
    }

    public function speak()
    {
        echo "Meow\n";
    }
}
