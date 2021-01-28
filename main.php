<?php

include_once(dirname(__FILE__) . "/cat.php");
include_once(dirname(__FILE__) . "/dog.php");

$dog = new Dog("Max the Dog");
$cat = new Cat("Snarf the Cat");
$animal_arr = [$dog, $cat, "Test", 1, 2, 3];

echo "\n--- For Each Loop ---\n\n";

foreach ($animal_arr as $animal) {
    if (!$animal instanceof Animal) {
        continue;
    }
    echo $animal->getName() . ": ";
    $animal->speak();
}


