 <?php

    // function show($array, $string){
    //     foreach($array as $value){
    //         echo "<span style='color:blue'>$value</span><br>";
    //     }
    //     echo "<br>";
    // }
    
    // $prenoms = array('Bernard', 'Victor', 'jean');

    // echo 'Tableau de prenom <br>';

    // foreach($prenoms as $prenom){
    //     echo "$prenom <br>";
    // }

    // $fruits = array('Pomme', 'Banane', 'Fraise');

    // echo '<br>Tableau de fruit <br>';

    // foreach($fruits as $fruit){
    //     echo "$fruit <br>";
    // }

    // $legumes = array('Pomme de terre', 'Tomate', 'Haricot');

    // echo '<br>Tableau de legume <br>';

    // foreach($legumes as $legume){
    //     echo "$legume <br>";
    // }

    // // En POO

    // echo '<br>Tableau de prenom <br>';
    // show($prenoms, 'prenoms');

    // echo 'Tableau de fruit <br>';
    // show($fruits, 'fruits');

    // echo 'Tableau de legume <br>';
    // show($legumes, 'legumes');

    // Exercices

    class Animal {
      function __construct(string $nom = '', int $age = 0){
          echo "Un animal vient de naître ! <br> <br>";
          $this->age = $age;
          $this->nommer($nom);
      }

      function vieillir(){
        $this->age = $this->age + 1;
        return $this; //permet de chainer des méthodes
      }

      function nommer($nom){
        $this->nom = $nom;
      }
  }
    
    $animal1 = new Animal('Milou', 2);

    // echo get_class($animal1);
    // var_dump($animal1->age);

    // echo get_class($animal2);
    // var_dump($animal2);

    // echo "L'age de l'animal 1 est de ".$animal1->age." ans<br> <br>";

    // $animal1->vieillir()->vieillir(); //Enchainement de méthodes
    
    // $animal1->nommer('Milou');

    echo "L'animal 1 est agé de ".$animal1->age." ans, et s'appelle ".$animal1->nom."<br> <br>";
    

?>