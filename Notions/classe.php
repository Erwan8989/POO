<?php



class Animal {     
    function __construct(string $nom = '', int $age = 0) { 
        $this-> age = $age; // Permet de modifier l'instance sur lequel on travail
        $this->nommer($nom); 
    }

    function vieillir() {
        $this->age = $this->age +1;
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
$Animal1 = new Animal('Milou', 4);
// $Animal1->nommer('Jean');

// var_dump($Animal1);
// var_dump($Animal2);

// $Animal1->age;
// $Animal2 ->vieillir()->vieillir()->vieillir();

echo "L'animal 1 est agé de ".$Animal1->age." ans, et s'appelle ".$Animal1->nom."<br> <br>"; PHP_EOL;
// echo "L'age de l'animal 2 est de : $Animal2->age ans.". PHP_EOL;


var_dump($Animal1);

// echo get_class($Animal1); // N'affiche que des chaines de caractères

?>