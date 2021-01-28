<?php

include_once(__DIR__ . "/machine.php");

class Microwave implements Machine
{
    public function makeNoise()
    {
        echo "Hummmmmmm\n";
    }
}