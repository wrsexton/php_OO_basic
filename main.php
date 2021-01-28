<?php

include_once(dirname(__FILE__) . "/cat.php");
include_once(dirname(__FILE__) . "/dog.php");

$dog = new Dog();
$cat = new Cat();
$animal_arr = [$dog, $cat, "Test", 1, 2, 3];

foreach ($animal_arr as $animal) {
    if (!$animal instanceof Animal) {
        continue;
    }
    $animal->speak();
    echo "\n";
}


