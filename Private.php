<?php


class Animal {
    private $age;

    function __construct()
    {
        $this->age = 0;
    }

    function viellir() {
        $this->age = $this->age + 1;
    }

    public function getAge() {
        $this->age;
        return $this;
    }

}

$animal = new Animal();
$animal->viellir();

echo ($animal->getAge());
// var_dump($animal->getAge());


?>