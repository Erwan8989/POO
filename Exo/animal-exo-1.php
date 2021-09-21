<?php

class Animal {

}

$firstAnimal = new Animal();

$secondAnimal = new Animal();

$type1 = get_class($firstAnimal);
var_dump($type1);

var_dump(get_class($secondAnimal));