<?php

include_once(__DIR__ . "/animals/cat.php");
include_once(__DIR__ . "/animals/dog.php");
include_once(__DIR__ . "/animals/walrus.php");
include_once(__DIR__ . "/animals/lizard.php");
include_once(__DIR__ . "/animals/snake.php");
include_once(__DIR__ . "/machines/blender.php");
include_once(__DIR__ . "/machines/microwave.php");

$dog = new Dog("Max the Dog");
$cat = new Cat("Snarf the Cat");
$snake = new Snake("Jake the Snake");
$lizard = new Lizard("Larry the Lizard");
$walrus = new Walrus("Wally the Walrus");
$blender = new Blender();
$microwave = new Microwave();
$arr = [$dog, $cat, $blender, $microwave, $snake, $lizard, $walrus];

foreach ($arr as $object) {
    echo "---\n";
    if ($object instanceof Animal) {
        echo $object->getName() . ": ";
        $object->speak();

        if ($object instanceof Reptile) {
            echo "This Reptile " . (($object->has_legs) ? "has legs!\n" : "doesn't have legs!\n");
            continue;
        }

        if ($object instanceof Mammal) {
            echo "This Mammal " . (($object->is_aquatic) ? "is aquatic!\n" : "is not aquatic!\n");
            continue;
        }

    }

    if ($object instanceof Machine) {
        $object->makeNoise();
        continue;
    }

}


