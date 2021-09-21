<?php
class Animal {
    private $age;

    public function __construct()
    {
        $this->age = 0;
    }
    public function viellir() {
        $this->age = $this->age + 1;
    }

    public function getAge() {
        return $this->age;
    }
}

$animal = new Animal();
$animal->viellir();
var_dump($animal->getAge());
