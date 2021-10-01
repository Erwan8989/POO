<?php

class Voiture{

    public function __construct()
    {
        
    }

    public function nommer(Passager $prenom, $nom){
        $this->prenom = $prenom;
        $this->nom = $nom;
    }

}

class Passager{
    public $nom;
    public $prenom;

    public function __construct(string $fin)
    {
        parent::__construct();
    }


}

$voiture1 = new Voiture;

$voiture1->nommer("John", "Doe");