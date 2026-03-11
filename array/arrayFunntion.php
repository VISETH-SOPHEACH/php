<?php
$fruit = ['Banana', 'Apple', 'Mango', 'Coconut'];
foreach ($fruit as $i => $f) {
  echo $i + 1 . ' ' . $f . '<br>';
}
echo '<br>';
$functionCount = count($fruit);
echo $functionCount . '<br><br>';

$color = ['Green', 'Blue', 'Yellow'];
$m = array_merge($fruit, $color);
foreach ($m as $M) {
  echo $M . '<br>';
}

# sort 
$integer = [19, 2, 3, 536, 3, 1];
sort($integer);
foreach ($integer as $i) {
  echo $i . '<br>';
}
rsort($integer);
foreach ($integer as $i) {
  echo $i . '<br>';
}

$letter = ['a', 'b', 'c'];
$letter = array_reverse($letter);
foreach ($letter as $l) {
  echo $l . ' ';
}
echo '<br>';