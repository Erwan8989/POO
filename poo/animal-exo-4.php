<?php

class Animal {
    function __construct(int $age = 0) {
        echo "Un animal vient d'être crée" . PHP_EOL;
        $this->age = $age;
    }

    function viellir() {
        $this->age = $this->age + 1;
        return $this;
        // $this->age++;
        // $this->age += 1;
    }
}

$firstAnimal = new Animal(20);

$secondAnimal = new Animal();

echo "Age animal 1 : $firstAnimal->age" . PHP_EOL;

echo "Age animal 2 : $secondAnimal->age" . PHP_EOL;

$secondAnimal->viellir()->viellir()->viellir();

echo "Age animal 1 : $firstAnimal->age" . PHP_EOL;

echo "Age animal 2 : $secondAnimal->age" . PHP_EOL;