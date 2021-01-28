<?php

include_once(__DIR__ . "/machine.php");

class Blender implements Machine
{
    public function makeNoise()
    {
        echo "Bzzzzzzzz\n";
    }
}