<?php



class Animal {     
    function __construct() {
    
        echo "Un animal vient de naitre ! <br>" . PHP_EOL;
        $this-> age = 0; // Permet de modifier l'instance sur lequel on travail

    }

    function vieillir() {
        $this->age = $this->age +1;
    }
}

$Animal1  = new Animal(); // Instanciation de la classe dans une variable, pour la récupérer plus tard
$Animal2 = new Animal();

// var_dump($Animal1);
// var_dump($Animal2);

$Animal1->age = 2;
$Animal2->vieillir();

var_dump($Animal1->age);
var_dump($Animal2);

// echo get_class($Animal1); // N'affiche que des chaines de caractères

?>