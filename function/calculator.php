<?php
function calculate($n1, $n2, $operator)
{
  switch ($operator) {
    case '+':
      return $n1 + $n2;

    case '-':
      return $n1 - $n2;

    case '*':
      return $n1 * $n2;

    case '/':
      if ($n2 == 0) {
        return "Cannot divide by zero";
      }
      return $n1 / $n2;

    case '%':
      if ($n2 == 0) {
        return "Cannot modulo by zero";
      }
      return $n1 % $n2;

    default:
      return "Invalid operator";
  }
}

$result = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['operator'])) {
  $n1 = floatval($_POST['n1'] ?? 0);
  $n2 = floatval($_POST['n2'] ?? 0);
  $op = $_POST['operator'];

  $result = calculate($n1, $n2, $op);
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="pt-10">

  <div class="container mt-5 d-flex justify-content-center">
    <div class="card shadow p-4" style="width:350px;">
      <h4 class="text-center mb-4">Calculator made in Cambodia</h4>
      <form method="POST">
        <div class="mb-3">
          <label class="form-label">Enter First Number</label>
          <input type="number" class="form-control" name="n1" required>
        </div>
        <div class="mb-3">
          <label class="form-label">Enter Second Number</label>
          <input type="number" class="form-control" name="n2" required>
        </div>
        <div class="d-flex justify-content-between mb-3">
          <button class="btn btn-primary" type="submit" name="operator" value="+">+</button>
          <button class="btn btn-danger" type="submit" name="operator" value="-">-</button>
          <button class="btn btn-success" type="submit" name="operator" value="*">*</button>
          <button class="btn btn-warning" type="submit" name="operator" value="/">/</button>
          <button class="btn btn-dark" type="submit" name="operator" value="%">%</button>
        </div>
      </form>
      <div class="alert alert-info text-center">
        Result: <?php echo $result ?? ""; ?>
      </div>
    </div>
  </div>

</body>

</html>