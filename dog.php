<?php

include_once(__DIR__."/animal.php");

class Dog extends Animal
{
    protected function speak()
    {
        echo "Woof";
    }
}

