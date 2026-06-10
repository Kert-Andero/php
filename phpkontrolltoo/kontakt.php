<?php $pageTitle = 'Kontakt - Tööriista rent'; $currentPage = 'contact'; ?>
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
        <h2>Kontakt</h2>
            <div class="col-md-6">
                <form method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nimi</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Sõnum</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Saada</button>
                </form>
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    echo '<p class="mt-3 text-success">Sõnum saadetud!</p>'; // Lihtne, saad lisada email saatmise
                }
                ?>
            </div>
        </div>
    </div>