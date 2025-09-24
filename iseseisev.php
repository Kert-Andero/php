<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iseseisev Töö</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>Iseseisev töö</h1>
    <h4>Teksti ja tingimused</h4>
    <?php
    echo 'Juhan Liiv, "Ääremärkused"';
    ?>

    <h4>Valemid</h4>
    <?php
      echo'<form action="#" method="get">
       <p>Sisestage mõõdud</p>
        Tollid: <input type="number" name="tollid" required><br>
        <input type="submit" value="Teisenda">
        </form>';
    if(isset($_GET["tollid"])){
    $tollid = $_GET["tollid"];
    $cm = $tollid*2.54;
    echo $tollid." on ".$cm." cm."."<br>";
    }
    ?>

    <h4>Tsüklid</h4>
    <?php
    for ($i=1; $i <=1000 ; $i++) {
        echo "* ";
        if ($i%10==0) {
          echo "<br>";
        }
      }

    ?>

    <h4>Massiivid</h4>
    <form action="#" method="get">
    Isikuikood <input type="number" name="isikukood" required><br>
    <input type="submit" value="Leia sugu" class="btn btn-info">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $isikukood = $_GET['isikukood'];
    echo ik($isikukood);
}
    function ik($ik) {
    $pikkus = strlen($ik); 
    if ($pikkus == 11) {
        return (intval($ik[0]) % 2 == 0) ? "Naine" : "Mees";
    } else {
        return "Pikkus ei sobi";
    }
}
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>