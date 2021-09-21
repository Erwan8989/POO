<?php
 
 class Admin {
    protected static $ban;
    public const ABONNEMENT = 5;
        
    public function __construct($name, $prenom, $region){
        $this->user_name = strtoupper($name);
        $this->user_pass = $prenom;
        $this->user_region = $region;
    }

    public function setBan(...$b){
        foreach($b as $banned){
            self::$ban[] = $banned;
        }
    }

    public function getBan(){
        echo 'Utilisateurs bannis : ' ;
        foreach(self::$ban as $valeur){
            echo $valeur .', ';
        }
    }

    public function setPrixAbo(){
        return $this->prix_abo = self::ABONNEMENT;
    }
}

$admin = new Admin('victor','morel','fr');
$admin->setBan('babar');
var_dump($admin);


?>