<?php
class Animal {

    public $age;

    public function __construct() {
        $this->age = 0;
        $this->nom = '';
        echo 'instanciation de la classe Animal' . PHP_EOL;
    }
    public function viellir() {
        $this->age = $this->age + 1;
    }
    public function nommer($nom) {
        $this->nom = $nom;
    }
}

class Reptile extends Animal {
    public function __construct(){
        parent::__construct();
        $this->nombre_ecailles = 1000;
        echo 'instanciation de la classe Reptile' . PHP_EOL;
    }
    public function nommer($nom) {
        echo 'On nomme depuis la classe Reptile' . PHP_EOL;
        parent::nommer($nom);
    }

    public function getNombreEcaille() {
        return $this->nombre_ecailles;
    }
}

$reptile = new Reptile();

var_dump('Class de reptile');
var_dump(get_class($reptile));
var_dump('Age de reptile');
var_dump($reptile->age);
var_dump('On renomme reptile');
$reptile->nommer('kaa');
var_dump($reptile->getNombreEcaille());

$animal = new Animal();
var_dump($reptile->getNombreEcaille());