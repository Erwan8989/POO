<?php
//   Contruire une classe Humain
// - Définir un nom et prénom privée à classe humain
// - Créer les accesseurs et mutateurs pour accéder au prénom et nom
// - La méthode setNom et setPrenom doivent permettre de mettre en majuscule le nom et le prénom
// - Créer une méthode getNomEtPrenom qui concatene le nom et le prenom de l'utilisateur avec un espace
// - Instacier une instance de classe humain avec les caractéristiques suivante
// - !!! Attention les paramètres passés aux mutateurs doivent être des chaînes de caractères !!!
// Nom : victor, Prenom : Morel


class Humain {

    private string $nom;
    private string $prenom;

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setNom(string $nom){
        return $this->nom = ucwords($nom);
    }

    public function setPrenom(string $prenom){
        return $this->prenom = ucwords($prenom);
    }

    public function getNomEtPrenom(){
        return $this->getPrenom()." ". $this->getNom();
    }
}

$tom = new Humain;

$tom->setNom('durant');
$tom->setPrenom('tom');

echo $tom->getNom()."<br>";
echo $tom->getPrenom()."<br>";
echo $tom->getNomEtPrenom()."<br>";

