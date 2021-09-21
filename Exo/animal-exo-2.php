<?php

class Animal {
    function __construct() {
        echo "Un animal vient d'être crée" . PHP_EOL;
        $this->age = 0;
    }
}

$firstAnimal = new Animal();

$secondAnimal = new Animal();

echo "Age animal 1 : $firstAnimal->age" . PHP_EOL;

echo "Age animal 2 : $secondAnimal->age" . PHP_EOL;

$secondAnimal->age = 10;

echo "Age animal 1 : $firstAnimal->age" . PHP_EOL;

echo "Age animal 2 : $secondAnimal->age" . PHP_EOL;