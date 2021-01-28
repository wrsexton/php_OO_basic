<?php

include_once(__DIR__ . "/animal.php");

class Snake extends Reptile
{
    public function __construct($name)
    {
        echo "Constructing Snake\n";
        $this->has_legs = False;
        parent::__construct($name);
    }

    public function speak()
    {
        echo "Ssssssss\n";
    }
}