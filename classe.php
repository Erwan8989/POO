<?php



class Animal {     
    function __construct() {
    
        echo "Un animal vient de naitre ! <br>" . PHP_EOL;
        $this-> age = 0; // Permet de modifier l'instance sur lequel on travail

    }
}

$Animal1  = new Animal(); // Instanciation de la classe dans une variable, pour la récupérer plus tard

// var_dump($Animal1);
// var_dump($Animal2);

var_dump($Animal1->age);

// echo get_class($Animal1); // N'affiche que des chaines de caractères

?>