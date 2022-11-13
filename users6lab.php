<?php


function __autoload($class)
{
  include $class.'.class.php';

}
$myClass = new MyClass();



?>