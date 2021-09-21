 <!-- Contruire une classe Humain
- Définir un nom et prénom privée à classe humain
- Créer les accesseurs et mutateurs pour accéder au prénom et nom
- La méthode setNom et setPrenom doivent permettre de mettre en majuscule le nom et le prénom
- Créer une méthode getNomEtPrenom qui concatene le nom et le prenom de l'utilisateur avec un espace
- Instacier une instance de classe humain avec les caractéristiques suivante
- !!! Attention les paramètres passés aux mutateurs doivent être des chaînes de caractères !!!

Nom : victor, Prenom : Morel  -->


<?php

class Humain {

    private $nom;
    private $prenom;

    public function __construct() {
        $this->nom = '';
        $this->prenom = '';
    }

    public function setNom(string $nom) {
        if((int) $nom) {                        
            throw new Error('Invalid Nom');
        }
        $this->nom = strtoupper($nom);
    }

    public function setPrenom(string $prenom) {
        if((int) $prenom) {
            throw new Error('Invalid Prenom');
        }
        $this->prenom = strtoupper($prenom);
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getNomEtPrenom() {
        return $this->getPrenom() . ' ' . $this->getNom();
    }
}

$humain = new Humain();
$humain->setPrenom('victor');
$humain->setNom('morel');
var_dump($humain->getNom());
var_dump($humain->getPrenom());
var_dump($humain->getNomEtPrenom());

?>