<?php

class Animal {
    
    function __construct(string $nom = '') {
        echo "Un animal vient d'être crée" . PHP_EOL;

        $this->nommer($nom);
    }

    function nommer(string $nom) {
        if( (int) $nom) {
            throw new Error("Je ne peux pas m'appeller comme ça");
        }
        $this->nom = $nom;
    }
}

$firstAnimal = new Animal('5');
var_dump($firstAnimal->nom);
try {
    $firstAnimal->nommer('4');
} catch ( Execption $e) {
    var_dump($e);
}

var_dump($firstAnimal->nom);