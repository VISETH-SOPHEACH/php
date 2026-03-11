<?php
$arr = [
  ['Toyota', 'Cammary'],
  ['BMW', 'SportCar'],
  ['Buggati', 'HyperCar']
];
// echo $arr[0][0];
foreach ($arr as [$row, $col]) {
  echo $row . " is a " . $col . "<br>";
}

$arr2 = array(
  array('1 is ', 'Car'),
  array('2 is ', ' Motor'),
  array('3 is ', 'Bike')
);

foreach ($arr2 as [$row, $col]) {
  echo $row . $col . '<br>';
}

$img = [
  'https://stickaeg.com/cdn/shop/files/SS-F2-_8.webp?v=1744550955&width=2500',
  'https://i.etsystatic.com/24044411/r/il/81adf9/4487116306/il_fullxfull.4487116306_cn66.jpg',
  'https://ih1.redbubble.net/image.3059883351.5269/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.u1.jpg'
];
?>
<!DOCcol html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>

  <body class="container pt-5">
    <div class="container d-flex">
      <?php foreach ($img as $index => $i) { ?>
        <p><?= $index+1 ?></p><img style="border-radius: 12px;" width="100" src="<?= $i ?>" alt="">
      <?php } ?>

    </div>
  </body>

  </html>