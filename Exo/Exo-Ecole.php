<?php 


/* Fraichement diplômé, vous venez de finir vos études informatiques . Fier de votre parcours vous décidez d'apprendre aux nouveaux élèves l'informatique et leur transmettre votre passion.
Toutefois vous vous rendez rapidement compte qu'il n'y a pas d'outil administratif à l'école ...
La rentrée étant dans une semaine il faut au plus vite remédier à ce problème :

Les élèves sont répartis par promos il y a une seule promo pour chaque année, sachant qu'une formation dans cette école dure 5 ans.
Chaque élève possède un nom, un prénom, un numéro de téléphone ainsi qu'une date de naissance : attention le numéro de téléphone et la date de naissance sont des informations sensibles tout le monde ne doit pas y avoir accès ...
Chaque promo est composée d'élèves qui peuvent arriver et partir en cours d'année.
Les élèves doivent valider des matières qui sont propres à chaque promo
Année 1 : Html, Css, Php (Nombre élèves 6)
Année 2:  Python, C#, C++ (Nombre élèves 5)
Année 3 : Méthode Agile, Docker, Réseau (Nombre élèves 4)
Année 4 : Erp, Gestion de projet, Test Unitaire (Nombre élèves 3)
Année 5 : Big Data, Intelligence Artificielle,  Développement continue (Nombre élèves 3)

A la fin de chaque année il est possible de voir par promo la liste des élèves et les matières qu'ils ont validés,
il faudrait aussi prévoir un affichage pour n'afficher qu'un seul élève d'une promo spécifique.
On veut aussi connaître le nombre total d'élèves à l'epsi */



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

                                                        
// RegEx = Vérification d'une forme


?>