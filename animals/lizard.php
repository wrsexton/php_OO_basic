<?php

class Lizard extends Reptile
{
    public function __construct($name)
    {
        echo "Constructing Lizard\n";
        $this->has_legs = True;
        parent::__construct($name);
    }

    public function speak()
    {
        echo "Lizard sounds!\n";
    }
}