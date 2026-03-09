<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-light">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Product Price Calculator</h4>
          </div>
          <div class="card-body">
            <form action="" method="GET">
              <div class="mb-3">
                <label for="proName" class="form-label">Product Name</label>
                <input type="text" name="proName" id="proName" class="form-control" placeholder="Enter product name" required>
              </div>

              <div class="mb-3">
                <label for="proPrice" class="form-label">Product Price ($)</label>
                <input type="number" name="proPrice" id="proPrice" step="0.01" class="form-control" placeholder="Enter price" required>
              </div>

              <div class="mb-3">
                <label for="proQty" class="form-label">Product Quantity</label>
                <input type="number" name="proQty" id="proQty" step="1" class="form-control" placeholder="Enter quantity" required>
              </div>

              <button type="submit" name="save" class="btn btn-primary w-100">Calculate Total</button>
            </form>
          </div>
        </div>

        <?php
        // Only run this if the 'save' button has been clicked
        if (isset($_GET['save'])) {
          // Correctly grabbing the inputs
          $name  = $_GET['proName'];
          $price = $_GET['proPrice'];
          $qty   = $_GET['proQty'];
          $total = $price * $qty;
        ?>
          <div class="card shadow-sm mt-4">
            <div class="card-header bg-success text-white">
              <h5 class="mb-0">Calculation Result</h5>
            </div>
            <div class="card-body">
              <h6 class="text-muted">Product: <?php echo htmlspecialchars($name); ?></h6>
              <hr>
              <div class="row">
                <div class="col-6">
                  <p class="mb-1"><strong>Price:</strong></p>
                  <p class="mb-1"><strong>Quantity:</strong></p>
                </div>
                <div class="col-6 text-end">
                  <p class="mb-1">$<?php echo number_format($price, 2); ?></p>
                  <p class="mb-1"><?php echo number_format($qty); ?></p>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-6">
                  <h5><strong>Total Price:</strong></h5>
                </div>
                <div class="col-6 text-end">
                  <h5 class="text-success"><strong>$<?php echo number_format($total, 2); ?></strong></h5>
                </div>
              </div>
            </div>
          </div>
        <?php
        } else {
        ?>
          <div class="alert alert-info mt-4" role="alert">
            <i class="bi bi-info-circle"></i> Please enter product details above to calculate the total price.
          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-/rMvZzEWp85B8uHuJ/RoC2l5y9F/2P1A2kT/0jPAkJPFpP3hVpQ8/TxZKjV3CKrO" crossorigin="anonymous"></script>
</body>

</html>