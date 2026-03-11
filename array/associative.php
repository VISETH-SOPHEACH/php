<?php
$arr = [
  'key1' => 'value1',
  'key2' => 'value2'
];
echo 'key1 is : ' . $arr['key1'] . '<br><br>';
print_r($arr);
echo '<br><br>';
foreach ($arr as $key => $ar) {
  echo 'key is : ' . $key . '  Value is : ' . $ar . '<br>';
}
