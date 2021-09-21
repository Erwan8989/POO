
<?php
class Addition {
    public function __construct(){
        
    }

    public function calcul($a, $b){
        $this->result = $a + $b;
    } 
}

class Moyenne extends Addition {

    public function __construct(){
        parent::__construct();
    }

    public int $moy;

    public function moyenne($a, $b){
        parent::calcul($a, $b);
        $this->moy = $this->result /= 2;
        
    }

    public function getMoyenne() {
        echo "<br>La moyenne vaut ".$this->moy;
    }
}

$obj1 = new Addition();
$obj1->calcul(10, 20);

echo $obj1->result;


$obj2 = new Moyenne();
$obj2->moyenne(10, 20);

$obj2->getMoyenne();