<?php
// $solde = 0;

// $solde = $_GET['nom'];


// if($solde > 0){
//     echo "Votre solde est positif !";
// } else if ($solde < 0){
//     echo "Votre solde est négatif !";
// } else{
//     echo "Votre solde est nul";
// }

$tab = array('Pierre', 'Paul', 'Jack');

$tab2 = array('prenom' => $tab[1], 'metier' => 'dev');

echo $tab2['prenom']. " a le métier ". $tab2['metier'];


