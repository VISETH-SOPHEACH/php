<?php

namespace myArea;
function myValue(){
  return __NAMESPACE__;
}
echo myValue() . '<br> <br>';

$name = "John";
define("Greetinng", "Hello ah King " . $name . "<br>");
echo Greetinng;

function test()
{
  define("TOM", "Hello ToMMii");
}
test();
echo TOM . "<br>";

const tGreeting = "Anh jea God";
echo tGreeting . '<br>';

const car = ['Lambo', 'BMW', 'Applpe'];
echo '<br>' . car[1] . '<br>';

echo "This is Line" . __LINE__ . '<br>';
echo "This is file" . __FILE__ . '<br>';
echo "This directory is: " . __DIR__ . '<br>';

// echo __DIR__;

// include __DIR__ . '/includes/config.php';
// ↑ means: include "/var/www/html/includes/config.php"

class Fruits
{
  public function myValue()
  {
    return __METHOD__;
  }
}
$kiwi = new Fruits();
echo $kiwi->myValue();
