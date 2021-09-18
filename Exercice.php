<?php

class Animal {
    private $nom;
    private $age;

    public function __construct(string $nom = "", int $age = 0)
    {
        echo "Un nouvelle animal a été crée <br>";   
        $this->setNom($nom);
        $this->setAge($age);
    }

    public function getAge(){
        return $this->age;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom(string $nom){
        $this->nom = $nom;
    }

    public function setAge(int $age){
        $this->age = $age;
    }

    public function vieillir(){
        $this->age = $this->age + 1;
        return $this;
    }
}

class Reptile extends Animal{
    private $espece;

    public function __construct()
    {
        parent::__construct();
        $this->espece = "Reptile";
        echo "Un nouveau reptile a été créé <br>";
    }

    public function getEspece(){
        return $this->espece;
    }
}

$animal1 = new Reptile;

echo "L'animal est agé de ".$animal1->getAge(). " ans et s'appelle ".$animal1->getNom()."<br>";

$animal1->setAge(5);
$animal1->setNom('Babar');
echo "L'animal est agé de ".$animal1->getAge(). " ans et s'appelle ".$animal1->getNom()."<br>";

$animal1->vieillir();
echo "L'animal est agé de ".$animal1->getAge(). " ans et s'appelle ".$animal1->getNom()."<br>";

$animal1->vieillir()->vieillir();
echo "L'animal est agé de ".$animal1->getAge(). " ans et s'appelle ".$animal1->getNom()."<br>";
    
echo $animal1->getEspece();