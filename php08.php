<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 08</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>Harjutus 08</h1>
    <?php
    date_default_timezone_set('Europe/Tallinn');
    echo "Käesolev kuupäev ja kellaaeg: " . date('d.m.Y G:i') . "<br>";

    $synniaasta = 2008;
    $vanus = date('Y') - $synniaasta;
    echo "Kasutaja on $vanus aastat vana.<br>";

    $kooleaasta_lopp = mktime(0, 0, 0, 6, 30, date('Y')); 
    $paevade_arv = ($kooleaasta_lopp - time()) / (60 * 60 * 24); 
    echo "Kooliaasta lõpuni on jäänud " . ceil($paevade_arv) . " päeva!<br>";

    $kuu = date('n');
    if ($kuu >= 3 && $kuu <= 5) {
        echo '<img src="pildid/kevad.jpg" alt="kevad"><br>';
    } elseif ($kuu >= 6 && $kuu <= 8) {
        echo '<img src="pildid/suvi.jpg" alt="suvi"><br>';
    } elseif ($kuu >= 9 && $kuu <= 11) {
        echo '<img src="pildid/sügis.jpg" alt="sügis"><br>';
    } else {
        echo '<img src="pildid/talv.jpg" alt="talv"><br>';
    }

    $kuupäev = '10-06-2008'; 
    list($kuu, $paev, $aasta) = explode('-', $kuupäev);

    if (checkdate($kuu, $paev, $aasta)) {
        echo 'Kuupäev on korras';
    } else {
        echo 'Kuupäev on valesti';
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>