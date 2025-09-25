<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 07</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>Harjutus 07</h1>
    <?php

      function tervita() {
        echo ("Tere päiksekesekene!");
      }

      function uudiskiri() {
        echo '<div class="row">
          <div class="col-sm-2">
            <form action="">
              <input type="text" placeholder="Liitu uudiskirjaga!">
              <input type="submit" value="Liitu!" class="btn btn-info">
              </form>
            </div>
          </div>';
      }


      function createUser($u) {
        $lu =strtolower($u); 
        echo $lu."@hkhk.edu.ee";
          echo "<br>";
        $p = substr(password_hash($lu, PASSWORD_BCRYPT),7,7);
        echo $p;
      }

      function vahemikus($a1, $a2, $s) {
        for ($i=$a1; $i <= $a2; $i=$i+$s) {
          echo $i;
        }
      }

      function rectangles($a1, $a2) {
        return $a1 * $a2;
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
        $alused = array("Jüri", "Mari", "Uku");
        $oeldised = array("armastab", "viskab", "tõmbab");
        $sihitised = array("mind", "sind", "teda");

          echo $alused[array_rand($alused)]." ".$oeldised[array_rand($oeldised)]." ".$sihitised[array_rand($sihitised)];
      }
      headmotted();

      echo "<br>";

      tervita();
      uudiskiri();
      createUser("Kert");
      echo "<br>";
      vahemikus(2,20,3);
      echo "<br>";
    ?>
    <h4>Ristküliku Pindala</h4>
    <form>
      Külg1 <input type="number" name="kylg1" require><br>
      Külg2 <input type="number" name="kylg2" require><br>
      <input type="submit" value="Arvuta Pindala" class="btn btn-info">
    </form>

    <?php
      if (isset($_GET['Kylg1']) && isset($_GET['Kylg2'])) {
          $pindala = rectangleS($_GET['Kylg1'], $_GET['Kylg2']); 
          echo "Ristküliku pindala: " . $pindala . "<br>";
      } else {
          echo "Sisesta Küljed<br>";
      }
    ?>

    <h4>Isikukood</h4>
    <?php
    echo ik("50802220283");
    echo "<br>";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>