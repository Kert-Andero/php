<?php
$fail = fopen('MOCK_DATA.csv', 'r');
$pealkiri = fgetcsv($fail);
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

<div class="container py-4">
  <h1 class="mb-4">Tooted</h1>
  <div class="row g-4">
    <?php while (($rida = fgetcsv($fail)) !== false): ?>
      <?php [$id, $nimi, $hind, $kirjeldus, $pilt] = $rida;
      [$id, $nimi, $hind, $kirjeldus, $pilt] = $rida;
       $hind = trim($hind);
       $hind = str_replace('€', '', $hind);
       ?>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <img src="pildid/<?= htmlspecialchars($pilt) ?>" class="card-img-top" style="height:210px;object-fit:cover;" alt="<?= htmlspecialchars($nimi) ?>">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><?= htmlspecialchars($nimi) ?></h5>
            <p class="card-text"><?= htmlspecialchars($kirjeldus) ?></p>
            <p class="fw-bold mt-auto">
            <?= number_format((float)str_replace(',', '.', $hind), 2, ',', ' ') ?> € / päev
            </p>
            <a class="btn btn-primary" href="ostukorv.php?lisa=<?= urlencode($nimi) ?>&hind=<?= urlencode($hind) ?>">Lisa ostukorvi</a>
          </div>
        </div>
      </div>
    <?php endwhile; fclose($fail); ?>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>