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
  <div class="p-4 p-md-5 mb-4 bg-white rounded-4 shadow-sm">
    <h1 class="display-5 fw-bold">Tööriista rent</h1>
    <p class="lead mb-0">Rendi endale sobiv tööriist kiiresti.</p>
  </div>

  <?php if (!empty($pildid)): ?>
  <div id="banner" class="carousel slide mb-5" data-bs-ride="carousel">
    <div class="carousel-inner rounded-4 shadow-sm">
      <?php foreach ($pildid as $i => $pilt): ?>
      <div class="carousel-item <?= $i === 0 ? 'active' : '' ?>">
        <img src="<?= htmlspecialchars($pilt) ?>" class="d-block w-100" style="height:360px;object-fit:cover;" alt="Bänner">
        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded-3">
          <h5>Hea valik tööriistu</h5>
          <p>Vaata teenuseid ja arvuta rendihind.</p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#banner" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
    <button class="carousel-control-next" type="button" data-bs-target="#banner" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
  </div>
  <?php endif; ?>

  <div class="row g-4">
    <div class="col-md-4"><div class="card h-100 shadow-sm"><div class="card-body"><h5>Kiire rent</h5><p>Vali tööriist ja lisa ostukorvi ning asu ostma.</p></div></div></div>
    <div class="col-md-4"><div class="card h-100 shadow-sm"><div class="card-body"><h5>Selge hind</h5><p>Hind arvutatakse päevade ja koguse järgi.</p></div></div></div>
    <div class="col-md-4"><div class="card h-100 shadow-sm"><div class="card-body"><h5>Kontakt</h5><p>Küsimuste korral võtke meiega ühendust.</p></div></div></div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>