<?php

include_once(__DIR__."/animal.php");

class Cat extends Animal
{
    protected function speak()
    {
        echo "Meow";
    }
}
