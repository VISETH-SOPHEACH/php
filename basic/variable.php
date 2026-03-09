<?php
$users = [
  ['id' => 1, 'name' => 'Viseth', 'address' => 'PP'],
  ['id' => 2, 'name' => 'John', 'address' => 'PP'],
  ['id' => 3, 'name' => 'Alex', 'address' => 'PP'],
  ['id' => 4, 'name' => 'Tom', 'address' => 'PP'],
  ['id' => 5, 'name' => 'Ronaldo', 'address' => 'PP'],
  ['id' => 6, 'name' => 'Sokkong', 'address' => 'pp']
];

class Car
{
  public $color;
  public $model;
  public function __construct($color, $model)
  {
    $this->color = $color;
    $this->model = $model;
  }
}

$cars = [
  new Car("Green", "Lambo"),
  new Car("Red", "Ferrari"),
  new Car("Yellow", "BMW")
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Tables</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="text-center">

  <div class="container pt-1">
    <h2 class="bg-primary p-2">User Management</h2>
    <table class="table align-middle">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Address</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $u) : ?>
          <tr>
            <td><?= $u['id'] ?></td>
            <td><strong><?= $u['name'] ?></strong></td>
            <td><?= $u['address'] ?></td>
            <td>
              <button class="btn btn-success">Edit</button>
              <button class="btn btn-danger">Delete</button>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>

    <h2 class="bg-success p-2">Car Inventory</h2>
    <table class="table">
      <thead>
        <tr>
          <th>No.</th>
          <th>Model</th>
          <th>Color</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($cars as $index => $car) : ?>
          <tr class="align-middle">
            <td><?= $index + 1 ?></td>
            <td><?= $car->model ?></td>
            <td>
              <span style="display:inline-block; width:12px; height:12px; border-radius:50%; background:<?= strtolower($car->color) ?>; margin-right:8px; border:1px solid #ccc;"></span>
              <?= $car->color ?>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</body>

</html>