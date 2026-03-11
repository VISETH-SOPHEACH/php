<?php
// Range
$c = range(1, 5);       // [1, 2, 3, 4, 5]
$d = range('a', 'e');   // ['a','b','c','d','e']
$e = range(0, 10, 2);   // [0, 2, 4, 6, 8, 10]
echo implode(" ", $c) . '<br>';
echo implode(" ", $d) . '<br>';
echo implode(" ", $e) . '<br>';

// array_fill
$f = array_fill(0, 5, "x"); // ["x","x","x","x","x"]
echo implode(" ", $f) . '<br>';

$keys = ["id", "name", "email"];
$g = array_fill_keys($keys, null); // ["id"=>null, "name"=>null, "email"=>null]
echo implode(" ", $keys) . '<br>';

$f = [1, 2, 3];
$f[] = 4;
array_push($f, 5);
print_r($f);
echo '<br>';

array_unshift($f, -1);
print_r($f);
echo '<br>';

# remove from the end
array_pop($f);
print_r($f);
echo '<br>';

// Remove from BEGINNING
array_shift($f); // removes 0
print_r($f);
echo '<br>';

# remove by index or key 
unset($f[2]);
print_r($f);
echo '<br>';

// Remove and re-index
$f = array_values($f);  // resets numeric keys
print_r($f);
echo '<br>';
