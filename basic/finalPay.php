<?php
// 1. Initialize variables
$price = 0;
$qty = 0;
$total = 0;
$discount_percent = 0;
$final_price = 0;

// 2. Logic Check
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $price = floatval($_POST['price'] ?? 0);
  $qty = intval($_POST['qty'] ?? 0);
  $total = $price * $qty;

  // Your original logic preserved (though very steep!)
  if ($total < 10) {
    $discount_percent = 10;
  } elseif ($total < 31) {
    $discount_percent = 20;
  } elseif ($total < 41) {
    $discount_percent = 40;
  } elseif ($total < 51) {
    $discount_percent = 50;
  } elseif ($total < 61) {
    $discount_percent = 60;
  } else {
    $discount_percent = 70;
  }

  $final_price = $total * (1 - $discount_percent / 100);
}

$d = date("d");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Discount Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .calculator-card {
      max-width: 500px;
      margin: 50px auto;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="card calculator-card shadow-sm">
      <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Discount Calculator</h4>
      </div>
      <div class="card-body">
        <form method="post">
          <div class="mb-3">
            <label class="form-label">Quantity</label>
            <input type="number" name="qty" class="form-control" value="<?= $qty ?>" min="1" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Price ($)</label>
            <div class="input-group">
              <span class="input-group-text">$</span>
              <input type="number" step="0.01" name="price" class="form-control" value="<?= $price ?>" required>
            </div>
          </div>

          <button type="submit" class="btn btn-primary w-100">Calculate Total</button>
        </form>

        <?php if ($total > 0): ?>
          <hr class="my-4">
          <div class="p-3 bg-light rounded">
            <div class="d-flex justify-content-between mb-2">
              <span>Subtotal:</span>
              <span>$<?php echo number_format($total, 2); ?></span>
            </div>
            <div class="d-flex justify-content-between mb-2 text-danger">
              <span>Discount (<?php echo $discount_percent; ?>%):</span>
              <span>- $<?php echo number_format($total - $final_price, 2); ?></span>
            </div>
            <div class="d-flex justify-content-between fw-bold fs-5 border-top pt-2">
              <span>Final Price:</span>
              <span class="text-success">$<?php echo number_format($final_price, 2); ?></span>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

</body>

</html>