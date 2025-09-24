<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 7</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<?php
function vahemikus($a1, $a2, $s) {
    for($i = $a1; $i <= $a2; $i += $s) {
        echo $i . " ";
    }
}

function createuser($u) {
    $lu = strtolower($u);
    echo $lu . "@hkhk.edu.ee<br>";
    $p = substr(password_hash($lu, PASSWORD_BCRYPT), 7, 7);
    echo $p . "<br>";
}

function uudiskiri() {
  echo '<div class="row">
          <div class="col-sm-2">
            <form action="">
              <input type="text" placeholder="Liitu uudiskirjaga!">
              <input type="submit" value="Liitu!" class="btn btn-success">
              </form>
            </div>
          </div>';
  }

function tervita() {
    echo ("Tere päiksekene!");
}

function rectangleS($kylg1, $kylg2) {
    return $kylg1 * $kylg2; 
}

function ik($ik) {
    $pikkus = strlen($ik); 
    if ($pikkus == 11) {
        return (intval($ik[0]) % 2 == 0) ? "Naine" : "Mees";
    } else {
        return "Vale pikkusega";
    }
}

function headmotted() {
    $alused = array("Ole positiivne", "Usalda oma instinkte", "Ära karda ebaõnnestuda");
    $oodis = array("jookseb", "hüppab", "lendab", "mängib", "magab");
    $sihitis = array("aeda", "metsas", "taevas", "maja ees", "tänaval");

   
    $randomAlus = $alused[array_rand($alused)];
    $randomOodis = $oodis[array_rand($oodis)];
    $randomSihitis = $sihitis[array_rand($sihitis)];

    return "$randomAlus $randomOodis $randomSihitis.";
}
?>

<h1>Harjutus 7</h1>
<h4>tervitamine</h4>
<?php

tervita();
uudiskiri();
createuser("Kert");
echo "<br>";
vahemikus(2, 20, 3);
?>

<h4>ristküliku pindala</h4>
<form>
    kylg1 <input type="number" name="kylg1" require><br>
    kylg2 <input type="number" name="kylg2" require><br>
    <input type="submit" value="Arvuta pindala" class="btn btn-info">
</form>

<?php
if (isset($_GET['Kylg1']) && isset($_GET['Kylg2'])) {
    $pindala = rectangleS($_GET['Kylg1'], $_GET['Kylg2']); 
    echo "Ristküliku pindala: " . $pindala . "<br>";
} else {
    echo "Sisesta Küljed<br>";
}
?>

<h4>isikukood</h4>
<?php
echo ik("50802220283");
echo "<br>";
?>

<h4>Head mõtted</h4>
<p><?php echo headmotted(); ?></p>