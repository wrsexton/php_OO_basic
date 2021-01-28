<?php

include_once(dirname(__FILE__) . "/cat.php");
include_once(dirname(__FILE__) . "/dog.php");

$dog = new Dog;
$cat = new Cat;
$animal_arr = [$dog, $cat];

foreach ($animal_arr as $animal) {
    if ($animal . isAnimal()) {
        $animal . speak();
    }
}

