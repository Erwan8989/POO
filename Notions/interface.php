<?php

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
 } }


$aaa = new FooBar;
echo "<b>Appel fonction a</b><br/>";
$aaa->a();
echo "<b>Appel fonction b</b><br/>";
$aaa->b();