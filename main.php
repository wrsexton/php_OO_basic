<?php

include_once(__DIR__ . "/animals/cat.php");
include_once(__DIR__ . "/animals/dog.php");
include_once(__DIR__ . "/machines/blender.php");
include_once(__DIR__ . "/machines/microwave.php");

$dog = new Dog("Max the Dog");
$cat = new Cat("Snarf the Cat");
$blender = new Blender();
$microwave = new Microwave();
$arr = [$dog, $cat, $blender, $microwave];

echo "\n--- For Each Loop ---\n\n";

foreach ($arr as $object) {
    if ($object instanceof Animal) {
        echo $object->getName() . ": ";
        $object->speak();
        continue;
    }

    if ($object instanceof Machine) {
        $object->makeNoise();
        continue;
    }

}


