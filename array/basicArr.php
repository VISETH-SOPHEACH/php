<?php
$cars = array('Toyota', 'BMW', 'Lambo');
echo $cars[0] . '<br>';

foreach ($cars as $key => $car) { # key is index
  echo $key + 1 . " car : " . $car . '<br>';
}
echo '<br>';

for ($i = 0; $i < count($cars); $i++) {
  echo $i + 1 . " Car is : " . $cars[$i] . '<br>';
}

# foreach ($collection as $key => value)

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

</body>

</html>