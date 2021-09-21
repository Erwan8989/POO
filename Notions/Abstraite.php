<?php

abstract class AbstractClass
{
 abstract public function test();
}


class ImplementedClass extends AbstractClass
{
 public function test()
 {
 echo "Appel de la classe
ImplementedClass.<br/>";
 }
}
$o = new AbstractClass;
$o->test();

?>