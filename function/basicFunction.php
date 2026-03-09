<?php
// build in finction, and user define function
// define function has function with parametter and none parameter 
function Sum()
{
  $i = 100;
  $j = 200;
  $k = $i + $j;
  echo $k;
}
// Sum();
echo " : Value is : " . Sum() + 2 . '<br>';

function mul($x, $y)
{
  $Mul = $x * $y;
  echo $Mul . '<br>';
}
mul(12, 82);

// return function 
function Calculatot()
{
  $a = 100;
  $b = 28;
  return $a + $b;
}
echo Calculatot()*10 . '<br>';

function cal ($a, $b) {
  return $a*$b;
}
echo cal(10.28,82)*Calculatot();
