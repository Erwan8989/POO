<?php
class Animal {
    protected $espece;
    public function __construct() {

    }
}
class Reptile extends Animal {
    public function __construct(){
        parent::__construct();
        $this->espece = 'reptile';
    }
    public function getEspece() {
        return $this->espece;
    }
}

$reptile = new Reptile();
var_dump('Espece');
var_dump($reptile->getEspece());


