<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
  <?php
  // Initialize variables to avoid "Undefined variable" errors on first load
  $code = $name = $qty = $price = "";

  if (isset($_POST['submit'])) {
    $code  = $_POST['code'];
    $name  = $_POST['name'];
    $qty   = $_POST['qty'];
    $price = $_POST['price'];
  }
  ?>

  <div class="container pt-3">
    <form action="" method="POST" class="form-controll">
      <input type="text" name="code" placeholder="Enter code"><br><br>
      <input type="text" name="name" placeholder="Enter name"><br><br>
      <input type="text" name="qty" placeholder="Enter qty"><br><br>
      <input type="text" name="price" placeholder="Enter price"><br><br>
      <button class="bg-primary" type="submit" name="submit">Submit</button><br><br>
    </form>
  </div>

  <div class="container">
    <table border="1" cellpadding="1" class="table">
      <thead>
        <th class="bg-secondary-subtle">Code</th>
        <th class="bg-secondary-subtle">Name</th>
        <th class="bg-secondary-subtle">Quantity</th>
        <th class="bg-secondary-subtle">Price</th>
      </thead>
      <tr>
        <td><?php echo htmlspecialchars($code); ?></td>
        <td><?php echo htmlspecialchars($name); ?></td>
        <td><?php echo htmlspecialchars($qty); ?></td>
        <td>
          <?php
          if (isset($_POST['submit'])) {
            // Format to 2 decimal places and add the symbol
            echo htmlspecialchars(number_format($_POST['price'], 0)) . '$';
          } else {
            echo ""; // Default value before submission
          }
          ?>+
        </td>
      </tr>
    </table>
  </div>
</body>

</html>