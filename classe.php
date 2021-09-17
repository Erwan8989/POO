<?php



class Animal {     
<<<<<<< Updated upstream
    function __construct() {
    
        echo "Un animal vient de naitre ! <br>" . PHP_EOL;
        $this-> age = 0; // Permet de modifier l'instance sur lequel on travail

=======
    function __construct(string $nom = '', int $age = 0) { 
        $this-> age = $age; // Permet de modifier l'instance sur lequel on travail
        $this->nommer($nom); 
>>>>>>> Stashed changes
    }

    function vieillir() {
        $this->age = $this->age +1;
<<<<<<< Updated upstream
    }
}

$Animal1  = new Animal(); // Instanciation de la classe dans une variable, pour la récupérer plus tard
$Animal2 = new Animal();
=======
        return $this;
    }

    function nommer(string $nom) {
        if ( (int) $nom) {
            throw new Error("Je ne peux pas faire ça !");
        }
        $this->nom = $nom;
    }
}

// $Animal1  = new Animal(20); // Instanciation de la classe dans une variable, pour la récupérer plus tard
$Animal2 = new Animal('Milou', 4);
// $Animal1->nommer('Jean');
>>>>>>> Stashed changes

// var_dump($Animal1);
// var_dump($Animal2);

<<<<<<< Updated upstream
$Animal1->age = 2;
$Animal2->vieillir();

var_dump($Animal1->age);
var_dump($Animal2);
=======
// $Animal1->age;
// $Animal2 ->vieillir()->vieillir()->vieillir();

echo "L'animal 1 est agé de ".$animal1->age." ans, et s'appelle ".$animal1->nom."<br> <br>"; PHP_EOL;
// echo "L'age de l'animal 2 est de : $Animal2->age ans.". PHP_EOL;


var_dump($Animal1);
>>>>>>> Stashed changes

// echo get_class($Animal1); // N'affiche que des chaines de caractères

?>