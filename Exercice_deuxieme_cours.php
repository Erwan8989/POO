<?php
  
  /*
class Admin {
    protected static $ban;
    public const ABONNEMENT = 5;
        
    public function __construct($name, $prenom, $region){
        $this->user_name = strtoupper($name);
        $this->user_pass = $prenom;
        $this->user_region = $region;
    }

    public static function setBan(...$b){
        foreach($b as $banned){
            self::$ban[] .= $banned;
        }
    }

    public static function getBan(){
    echo 'Utilisateurs bannis : ' ;
    foreach(self::$ban as $valeur){
        echo $valeur .', ';
    }
    }

    public function setPrixAbo(){
        return $this->prix_abo = self::ABONNEMENT;
    }

}

$test = new Admin('Durant', 'Toto', 'IDF');

$test->setBan('test');


$test->getBan();
*/
/*
interface Foo 
{
    function a();
}
interface Bar 
{
    function b();
}

class FooBar implements Foo, Bar 
{
    function a() 
    {
        print "aaaaaaaa<br/>";
    }
    function b() 
    {
       print "bbbbbbb<br/>";
    }
}

$aa = new FooBar;
echo "<b>Appel fonction a</b><br/>";
$aa->a();
echo "<b>Appel fonction b</b><br/>";
$aa->b();

*/