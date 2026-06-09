<?php $pageTitle = 'Kalkulaator - Tööriista rent'; $currentPage = 'calculator'; ?>
<!doctype html>
<html lang="et">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tööriista rent</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">Tööriista rent</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php">Avaleht</a></li>
        <li class="nav-item"><a class="nav-link" href="tooted.php">Tooted</a></li>
        <li class="nav-item"><a class="nav-link" href="kalkulaator.php">Kalkulaator</a></li>
        <li class="nav-item"><a class="nav-link" href="kontakt.php">Kontakt</a></li>
        <li class="nav-item"><a class="nav-link" href="ostukorv.php">Ostukorv</a></li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container my-5">
        <h2>Kalkulaator</h2>
        <form method="post">
            <div class="mb-3">
                <label for="price" class="form-label">Hind (EUR)</label>
                <input type="number" step="0.01" class="form-control" id="price" name="price" required>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Kogus</label>
                <input type="number" step="0.01" class="form-control" id="quantity" name="quantity" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="warranty" name="warranty">
                <label class="form-check-label" for="warranty">Pikendatud garantii (+10%)</label>
            </div>
            <button type="submit" class="btn btn-primary">Arvuta</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $price = floatval($_POST['price']);
            $quantity = floatval($_POST['quantity']);
            $total = $price * $quantity;
            if (isset($_POST['warranty'])) {
                $total *= 1.1;
            }
            echo '<p class="mt-3">Kokkuhind: ' . number_format($total, 2) . ' EUR</p>';
            file_put_contents('orders.txt', date('Y-m-d H:i:s') . " - Hind: $price, Kogus: $quantity, Garantii: " . (isset($_POST['warranty']) ? 'Jah' : 'Ei') . ", Kokku: $total\n", FILE_APPEND);
        }
        ?>
    </div>
