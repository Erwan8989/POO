<?php


// $tab = array('Pierre', 'Paul', 'Jack');
// $tab2 = array ('prenom' => $tab[1], 'metier' => 'dev');

// echo $tab2['prenom']. " a le métier ". $tab2['metier'];


$tab = array('Pierre', 'Paul', 'Jack');

$tab2 = array (
    array ('prenom' => $tab[0], 'metier' => 'Consultant'),
    array ('prenom' => $tab[1], 'metier' => 'marketing'),
    array ('prenom' => $tab[2], 'metier' => 'developpeur'),
);

    
    foreach($tab2 as $value) {
    echo '<li>';
    echo  $value['prenom']." => ".$value['metier'].'</a>';
    echo '</li>';
    }


var_dump($tab2);


?>