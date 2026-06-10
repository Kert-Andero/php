<?php
session_start();

if (isset($_GET['lisa']) && isset($_GET['hind'])) {
    if (!isset($_SESSION['ostukorv'])) {
        $_SESSION['ostukorv'] = [];
    }

    $_SESSION['ostukorv'][] = [
        'nimi' => $_GET['lisa'],
        'hind' => $_GET['hind']
    ];

    header('Location: ostukorv.php');
    exit;
}
?>
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
    <h2>Ostukorv</h2>

    <?php
    if (!isset($_SESSION['ostukorv']) || empty($_SESSION['ostukorv'])) {
        echo '<p>Ostukorv on tühi.</p>';
    } else {
        $total = 0;

        echo '<ul class="list-group">';

        foreach ($_SESSION['ostukorv'] as $toode) {
            $nimi = $toode['nimi'];
            $hind = floatval(str_replace(',', '.', $toode['hind']));

            echo '<li class="list-group-item">' .
                htmlspecialchars($nimi) . ' - ' .
                number_format($hind, 2, ',', ' ') . ' EUR</li>';

            $total += $hind;
        }

        echo '</ul>';

        echo '<p class="mt-3"><strong>Kokku: ' .
            number_format($total, 2, ',', ' ') .
            ' EUR</strong></p>';

        echo '<a href="tooted.php" class="btn btn-secondary">Jätka ostlemist</a>';
    }
    ?>
</div>