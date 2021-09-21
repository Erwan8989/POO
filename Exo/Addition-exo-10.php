<?php

class Addition {
    private $_valeur1 , $_valeur2;
    private $valeur, $i, $moyenne;

    public function __construct($valeur1, $valeur2){
        $this->_valeur1 = $valeur1;
        $this->_valeur2 = $valeur2;
    }

    public function addition(){
        return $this->_valeur1 + $this->_valeur2;
    }

    public function Moyenne(...$i){
        foreach ($i as $Valeur) {
            $this-> somme += $Valeur;
            $i++;
        }
    }

    // public function soustraction(){
    //     return $this->_valeur1 - $this->_valeur2;
    // }

    // public function multiplication (){
    //     return $this->_valeur1 * $this->_valeur2;
    // }

    // public function division () {
    //     return $this->_valeur1 / $this->_valeur2;
    // }
}

$calcule = new Addition(3,4);
echo "<p>3 + 4 = ".$calcule->addition(). "</p>";

$calcule = new Addition(10, 15);
echo "<p>10 + 15 = ".$calcule->Moyenne(). "</p>";

// $calcule = new Addition (15,12);
// echo "<p>15 - 12 = ".$calcule->soustraction(). "</p>";

// $calcule = new Addition (20,2);
// echo "<p> 20 * 2 = ".$calcule->multiplication(). "</p>";

// $calcule = new Addition (20,2);
// echo "<p> 20 /2 = ".$calc ->division(). "</p>";


?>