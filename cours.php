<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Hello, world!</title>
  </head>
  <body>
    <?php

    // function show($array, $string){
    //     foreach($array as $value){
    //         echo "<span style='color:blue'>$value</span><br>";
    //     }
    //     echo "<br>";
    // }
    
    // $prenoms = array('Bernard', 'Victor', 'jean');

    // echo 'Tableau de prenom <br>';

    // foreach($prenoms as $prenom){
    //     echo "$prenom <br>";
    // }

    // $fruits = array('Pomme', 'Banane', 'Fraise');

    // echo '<br>Tableau de fruit <br>';

    // foreach($fruits as $fruit){
    //     echo "$fruit <br>";
    // }

    // $legumes = array('Pomme de terre', 'Tomate', 'Haricot');

    // echo '<br>Tableau de legume <br>';

    // foreach($legumes as $legume){
    //     echo "$legume <br>";
    // }

    // // En POO

    // echo '<br>Tableau de prenom <br>';
    // show($prenoms, 'prenoms');

    // echo 'Tableau de fruit <br>';
    // show($fruits, 'fruits');

    // echo 'Tableau de legume <br>';
    // show($legumes, 'legumes');

    // Exercice 1

    class Animal{

    }
    
    $animal1 = new Animal();

    $animal2 = new Animal();

    echo get_class($animal1);

    var_dump($animal1);

    echo get_class($animal2);

    var_dump($animal2);

    ?>
  </body>
</html>