<?php

function show($array) {

    foreach($array as $value) {
        echo "<span style='color=blue'> $value </span> <br>";
}

echo "<br>";
}


$prenoms = array('bernard','victor','jean');
show($prenoms);



// ***********************  Définition de tableaux sans fonctions ***************************** //


$prenoms = array('bernard','victor','jean');

echo 'Tableau de prénoms <br>';
foreach($prenoms as $prenom) {
    echo "$prenom <br>";

}

echo "<br>";

$fruits = array('pomme','banane','fraise');

echo 'Tableau de fruits <br>';
foreach($fruits as $fruit) {
    echo "$fruit <br>";
    
}


echo "<br>";


$legumes = array('patates','haricots','salades');

echo 'Tableau de légumes <br>';
foreach($legumes as $légume) {
    echo "$légume <br>";
    
}


echo "<br>";