 <?php

// class A {
//      public function __construct() {
//          echo 'Instance de A' . PHP_EOL;
//      }
//  }

//  class B extends A {
//      public function __construct() {
//          parent::__construct();
//          echo 'Instance de B' . PHP_EOL;
//      }
//  }

//  class C extends B{
//      public function __construct() {
//          parent::__construct();
//          echo 'Instance de C' . PHP_EOL;
//      }
//  }
//  new C(); 
 
 
// class A {
//     public function __construct() {
//         echo 'Instance de A' . PHP_EOL;
//     }
// }
// class B extends A {
//     public function __construct() {
//         echo 'Instance de B' . PHP_EOL;
//     }
// }

// class C extends B{
//     public function __construct() {
//         parent::__construct();
//         echo 'Instance de C' . PHP_EOL;
//     }
// }
// new C();

// ?>

<?php
class Animal {
    protected $espece;
    public function __construct() {

    }
}

class Reptile extends Animal {
    public function __construct(){
        parent::__construct();
        $this->espece = 'reptile';
    }

    public function getEspece() {
        return $this->espece;
    }
}

$reptile = new Reptile();
var_dump('Espece');
var_dump($reptile->getEspece());