<?php

class Animal {
    function __construct(string $nom = '') {
        echo "Un animal vient d'être crée" . PHP_EOL;
        $this->nommer($nom);
    }

    function nommer(string $nom) {
        $this->nom = $nom;
    }

    function getNom() {
        return $this->nom;
    }
}

$firstAnimal = new Animal();
var_dump($firstAnimal->nom);

$firstAnimal->nommer('Milou');
var_dump($firstAnimal->nom);

