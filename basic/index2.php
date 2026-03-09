<?php
  $name = "John";
  $f = ["Apple", "Banana", "Orange"];
  $d = ["Coffee", "Ice latte", "Watter"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Hello, <?php echo $name; ?></h1>
  <ul>
    <?php foreach ($f as $F): ?>
      <li><?= $F ?></li>
    <?php endforeach ?>
    <?php foreach ($d as $d): ?>
      <li style="color:blue" ><?= $d ?></li>
    <?php endforeach ?>
  </ul>
</body>
</html>