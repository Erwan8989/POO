<?php
/*

Créer une classe voiture
- Elle possède une marque, ainsi que des passagers
- chaque passager à un nom et prenom
- Instancier 2 voitures avec chacunes une marque et des passagers différents

*/


/*
class Voiture {
    
    public $marque;
    private $nom;
    private $prenom;

    public function __construct() {
    }

    // public function Passager ($nom, $prenom) {
    //     $this -> nom = $nom;
    //     $this -> prenom = $prenom;
    // }

    public function setMarque ($marque) {
        $this -> marque = $marque;
    }

    public function getMarque () {
        return $this -> marque;
    }


    public function setPassager ($nom, $prenom) {
        $this -> nom = $nom;
        $this -> prenom = $prenom;
    }

    public function getPassager () {
        return $this -> nom . ' ' . $this -> prenom;
        
    }
}

$Voitures1 = new Voiture();
$voitures2 = new Voiture();

$Voitures1->setMarque('Benthley');
$Voitures1->setPassager('John', 'Doe');

$Voitures2->setMarque('Ferrari');
$Voitures2->setPassager('Michel', 'Cantona');

var_dump($Voitures1 . $Voiture2); */

// ********************************************** Correction ********************************************


class Voiture {
    public $marque;
    public $passagers;

    public function __construct(Marque $marque)
    {
        $this->marque = $marque;
        $this->passagers = array();
    }

    public function addPassager(Passager $passager) {
        $this->passagers[] = $passager;
    }
}

class Marque {
    public $nom;

    public function __construct(string $nom)
    {
        $this->nom = $nom;
    }
}

class Passager {

    public $nom;
    public $prenom;

    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
}

$voiture1 = new Voiture(new Marque('ferrari'));
$voiture1->addPassager(new Passager('victor','morel'));
$voiture1->addPassager(new Passager('John','Doe'));

$voiture2 = new Voiture(new Marque('toyota'));
$voiture2->addPassager(new Passager('Michel','Yuong'));
$voiture2->addPassager(new Passager('Corine','Melusine'));

var_dump($voiture1);
var_dump($voiture2);

?>