<?php

class Matiere{
    public function __construct(){
    }

    public $matiere1;
    public $matiere2;
    public $matiere3;

    public function set_mat($mat1, $mat2, $mat3){
        $this->matiere1 = $mat1;
        $this->matiere2 = $mat2;
        $this->matiere3 = $mat3;az
    }

}

class Promo extends Matiere{
    public $annee;

    public function __construct(){
        parent::__construct();
    }

    public function new_annee($annee){
        $this->annee = $annee;
        if ($annee == 1) {
            $this->set_mat("Html", "Css", "Php");
        }
        else if ($annee == 2) {
            $this->set_mat("Python", "C#", "C++");
        }
        else if ($annee == 3) {
            $this->set_mat(" Méthode Agile", "Docker", "Réseau");
        }
        else if ($annee == 4) {
            $this->set_mat("Erp", "Gestion de projet", "Test Unitaire");
        }
        else{
            $this->set_mat("Big Data", "Intelligence Artificielle", "Développement continue");
        }
    }
    
}

class Eleve extends Promo{
    public $nom;
    public $prenom;
    private $tel;
    private $naiss;
    public static $nb_eleve;

    public function __construct()
    {
        parent::__construct();
        self::$nb_eleve++;
    }

    public function new_eleve($prenom, $nom, $tel, $naiss){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->tel = $tel;
        $this->naiss = $naiss;
    }

    public function get_tel(){
        return $this->tel;
    }

    public function get_naiss(){
        return $this->naiss;
    }

    public function get_nb_eleve(){
        return self::$nb_eleve;
    }

    public function depart(){
        self::$nb_eleve--;
    }
    
}

// ***** Nouvel élève *****

$eleve1 = new Eleve();


// ***** Définir les carctéristiques d'un nouvel éleve *****

$eleve1->new_eleve("John", "Doe", "06.25.25.15.52", "20/08/2301");

echo ("L'élève s'apelle " . $eleve1->prenom ." ". $eleve1->nom. ". Il est né le ". $eleve1->get_naiss() .". Son numéro de téléphone est " .$eleve1->get_tel(). "<br>");


// ***** Enregistrer nouvelle année et afficher ses matières*****

$eleve1->new_annee("2");

echo("L'élève est en année ". $eleve1->annee.", et a les matières suivante : " .$eleve1->matiere1.", ".$eleve1->matiere2." et ".$eleve1->matiere3. "<br>");


// ***** Afficher le nom d'élève à l'EPSI

echo ("Le nombre total d'élève est de ". $eleve1->get_nb_eleve()."<br>");


// ***** Eleve qui quitte sa promo *****

$eleve1->depart();
unset($eleve1);





// ***** Nouvel élève *****

$eleve2 = new Eleve();


// ***** Définir les carctéristiques d'un nouvel éleve *****

$eleve2->new_eleve("Jack", "Wang", "06.75.25.84.25", "10/02/2315");

echo ("L'élève s'apelle " . $eleve2->prenom ." ". $eleve2->nom. ". Il est né le ". $eleve2->get_naiss() .". Son numéro de téléphone est " .$eleve2->get_tel(). "<br>");


// ***** Enregistrer nouvelle année et afficher ses matières*****

$eleve2->new_annee("5");

echo("L'élève est en année ". $eleve2->annee.", et a les matières suivante : " .$eleve2->matiere1.", ".$eleve2->matiere2." et ".$eleve2->matiere3. "<br>");


// ***** Afficher le nom d'élève à l'EPSI

echo ("Le nombre total d'élève est de ". $eleve2->get_nb_eleve()."<br>");

