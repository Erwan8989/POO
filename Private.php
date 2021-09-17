<?php

class Animal {

    public $age;
    function __construct(int $age = 0, string $nom = '')
    {
        $this->age = 0;
    }

    function viellir() {
        $this->age = $this->age + 1;
    }

    // public function getAge() {
    //     $this->age;
    //     return $this;
    // }

    public function nommer($nom) {
        $this->nom = $nom;
    }

}

class Reptile extends Animal {
    public function __construct(){
        parent::__construct();
    }
}

$reptile = new Reptile();

var_dump('class de reptile');
var_dump(get_class($reptile));
var_dump($reptile->age);


var_dump('On renomme reptile');
$reptile->nommer('kaa');
var_dump($reptile->nom);

// $animal = new Animal();
// $animal->viellir();

// // echo ($animal->getAge());
// var_dump($animal->getAge());


?>