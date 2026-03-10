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
  </head>

  <body>
    <div class="container">
      <?php foreach ($img as $i) { ?>
        <img width="100" src="<?= $i ?>" alt="">
      <?php } ?>
    </div>
  </body>

  </html>