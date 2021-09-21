<?php

class Humain {

    private string $nom;
    private string $prenom;

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function setNom($nom){
        return $this->nom = ucwords($nom);
    }

    public function setPrenom($prenom){
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

