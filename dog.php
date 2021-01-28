<?php

include_once(__DIR__ . "/animal.php");

class Dog extends Animal
{
    public function speak()
    {
        echo "Woof";
    }
}

