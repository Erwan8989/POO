<?php 


class Matiere {
    public function __construct($table_des_matières){
        $this->matières = ($table_des_matières);
    }

    public function matières($table_des_matières) {
        foreach ($table_des_matières as $key => $value) {
            switch ($key) {
                case 'Html + Css + Php':
                    $this->Année1 = (string) $value;
                break;
                case 'Pthon + C# + C++':
                    $this->Année2 = (string) $value;
                   break; 
                case 'Méthode Agile + Docker + Réseau':
                    $this->Année3 = (string) $value;
                    break; 

                case 'Erp + Gestion de projet + Test unitaire':
                    $this->Année4 = (string) $value;
                    break; 

                case 'Big data + IA + Dev continue':
                    $this->Année5 = (string) $value;
                    break;
            }
        }
    }
 
    public function A1() {
        return (string) $this->Année1;
    }
 
    public function A2() {
        return (string) $this->Année2;
    }
 
    public function A3() {
        return (string) $this->Année3;
    }

    public function A4() {
        return (string) $this->Année4;
    }

    public function A5() {
        return (string) $this->Année5;
    }

}

$matière1 = new Matiere ('Html + Css + Php');
$matière2 = new Matiere ('Pthon + C# + C++');
$matière3 = new Matiere ('Méthode Agile + Docker + réseau');
$matière4 = new Matiere ('Erp + Gestion de projet + Test unitaire');
$matière5 = new Matiere ('Big data + IA + Dev continue');


var_dump($matière1);
var_dump($matière2);
var_dump($matière3);
var_dump($matière4);
var_dump($matière5);


?>