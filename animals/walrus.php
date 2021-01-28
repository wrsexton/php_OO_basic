<?php

include_once(__DIR__ . "/animal.php");

class Walrus extends Mammal
{
    public function __construct($name)
    {
        echo "Constructing Walrus\n";
        $this->is_aquatic = True;
        parent::__construct($name);
    }

    public function speak()
    {
        echo "Walrus sounds!\n";
    }
}