<?php
  echo "Hello world" . "<br>";
  echo "<p style='color: red;'>Hey, man</p>"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table border="1">
    <thead>
      <tr style="color: blue;">
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Profile</th>
      </tr>
    </thead>
    <thead>
      <tr>
        <th><?php echo "0001" ?></th>
        <th><?php echo "Viseth" ?></th>
        <th><?php echo "PP" ?></th>
        <th><?php echo '<img width="100px" src="https://eelis.com/wp-content/uploads/2024/02/Polycarponate-Cards.png" alt="">' ?></th>
      </tr>
    </thead>
  </table>
</body>
<script>
  let c = 0 ;
  for (c = 0; c < 10; c++){
    console.log("Hello wolrd"+(c+1));
  }
</script>
</html>