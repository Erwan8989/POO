<?php
class Animal {
    public $age;
    public function __construct() {
        $this->age = 0;
    }
    public function viellir() {
        $this->age = $this->age + 1;
    }
    public function nommer(int $nom) {
        $this->nom = $nom;
    }
}

class Reptile extends Animal {
    public function __construct(){
        parent::__construct();
    }
}

$reptile = new Reptile();

var_dump('Class de reptile');
var_dump(get_class($reptile));
var_dump('Age de reptile');
var_dump($reptile->age);

var_dump('On renomme reptile');
$reptile->nommer('kaa');
var_dump($reptile->nom);
