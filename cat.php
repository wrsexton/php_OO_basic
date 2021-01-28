<?php

include_once(__DIR__ . "/animal.php");

class Cat extends Animal
{
    public function speak()
    {
        echo "Meow";
    }
}
