<?php

include_once(dirname(__FILE__) . "/cat.php");
include_once(dirname(__FILE__) . "/dog.php");

$dog = new Dog;
$cat = new Cat;
$animal_arr = [$dog, $cat];

foreach ($animal_arr as $animal) {
    if (!is_subclass_of($animal, "Animal")) {
        continue;
    }
    if ($animal->isAnimal()) {
        $animal->speak();
        echo "\n";
    }
}


