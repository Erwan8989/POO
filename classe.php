<?php



class Animal {     
}

$Animal1  = new Animal();  // Instanciation de la classe dans une variable, pour la récupérer plus tard
$Animal2 = new Animal();

// var_dump($Animal1);
// var_dump($Animal2);

var_dump(get_class($Animal1));


// echo get_class($Animal1); // N'affiche que des chaines de caractères

?>