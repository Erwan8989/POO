<?php

function show($array, $string) {
    echo "Tableau de $string <br>";
    foreach($array as $value) {
        echo "<span style='color:blue'>$value</span> <br>";
    }

    echo "<br>";
}

$prenoms = array('bernard','victor','jean');
show($prenoms, 'prénoms');

$fruits = array('pomme','banane','fraise');
show($fruits, 'fruits');


$legumes = array('patate','tomate','haricot');
show($legumes, 'légumes');