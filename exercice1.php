<?php

class Eleve {
    public $nom;
    public $prenom;

    private $telephone;
    private $date;

    public function __construct($nom = '', $prenom = '') {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->telephone = '';
        $this->date = '';
    }

    public function getTelephone() {
        return $this->telephone;
    }

    public function getDate() {
        return $this->date;
    }

    public function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    public function setDate($date) {
        $this->date = $date;
    }

}

class Matiere {

    public $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }
}

class Promo {

    public static $nb_eleves;

    public $eleves;

    public $matieres;

    public $matieres_validate;

    public function __construct() {
        $this->eleves = array();
        $this->matieres = array();
    }

    public function addMatiere(Matiere $matiere) {
        $this->matieres[] = $matiere;
    }

    public function addMatieres(array $matieres) {
        $this->matieres = $matieres;
    }
    public function addEleve(Eleve $eleve) {
        $this->eleves[] = $eleve;

        $matieres_validate = [];
        foreach($this->matieres as $matiere) {
            $matieres_validate[$matiere->nom] = false;
        }

        $this->matieres_validate[$eleve->nom] = $matieres_validate;

        static::$nb_eleves++;
    }

    public function removeEleve(Eleve $eleve) {
        //$this->eleves[] = $eleve;
    }

    public function validateMatiere($eleveName, $matiereName) {
        $this->matieres_validate[$eleveName][$matiereName] = true;
    }

    public function eleveMatiereValidate($eleveName) {
        return $this->matieres_validate[$eleveName];
    }

    public function getNumberEleveOfAllPromo() {
        return static::$nb_eleves;
    }
}

$promo1 = new Promo();
$promo1->addMatiere(new Matiere('Html'));
$promo1->addMatiere(new Matiere('Css'));
$promo1->addMatiere(new Matiere('Php'));

$promo2 = new Promo();
$promo2->addEleve(new Eleve('Victor','Morel'));
//$promo1->addMatieres(array(new Matiere('Html'),new Matiere('Html'),new Matiere('Html')));

$promo1->addEleve(new Eleve('Victor','Morel'));
$promo1->addEleve(new Eleve('Victor1','Morel'));
$promo1->addEleve(new Eleve('Victor2','Morel'));
$promo1->addEleve(new Eleve('Victor3','Morel'));
$promo1->addEleve(new Eleve('Victor4','Morel'));
$promo1->addEleve(new Eleve('Victor5','Morel'));
var_dump($promo1->matieres);
$promo1->validateMatiere('Victor','Html');
var_dump($promo1->matieres_validate);
var_dump($promo1->eleveMatiereValidate('Victor'));
