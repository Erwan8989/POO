<?php

class Animal { 
    public int $nmbdepattes = 0;
}

$Animal1  = new Animal();
$Animal2 = new Animal();

var_dump($Animal1);
var_dump($Animal2);

echo get_class($Animal1);

?>