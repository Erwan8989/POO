<?php

class Animal {
    private $nom;
    private $age;
    
    protected $espece;

    public function __construct(string $nom = "Michel", int $age = 0)
    {
        echo "Un nouvelle animal a été crée <br>". PHP_EOL;      
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
        echo "Nommé depuis la classe Animal <br>" . PHP_EOL; 
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
    public function __construct()

    {
        parent::__construct();
        $this->espece = "Reptile";
        echo "Un nouveau reptile a été créé <br>" . PHP_EOL; 
    }

    public function getEspece(){
        return $this->espece;
    }

    public function setNom(string $nom){
        echo "Nommé depuis la classe Reptile <br>" . PHP_EOL; 
        $this->nom = $nom;
    }

    public $nom;
}

$animal1 = new Reptile;
// $animal2 = new Animal;

echo "<br> L'animal est agé de ".$animal1->getAge(). " ans et s'appelle ".$animal1->getNom()."<br>" . PHP_EOL; 
// $animal2->setNom('yang');

$animal1->setAge(5);
// $animal1->setNom('Babar');

echo "L'animal est agé de ".$animal1->getAge(). " ans et s'appelle ".$animal2->getNom()."<br>" . PHP_EOL; 

$animal1->vieillir();
echo "L'animal est agé de ".$animal1->getAge(). " ans et s'appelle ".$animal2->getNom()."<br>" . PHP_EOL; 

$animal1->vieillir()->vieillir();
echo "L'animal est agé de ".$animal1->getAge(). " ans et s'appelle ".$animal2->getNom()."<br>" . PHP_EOL; 
    
echo $animal1->getEspece();

var_dump($animal1->nom);