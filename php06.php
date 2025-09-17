<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 06</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>Harjutus 06</h1>
    <h4>Numbrid 1-100</h4>
    <?php
        for ($i=1; $i <= 100; $i++) {
            echo $i.". ";
            if ($i%10==0) {
                echo "<br>";
            }
        }
      ?>

    <h4>Tärnid</h4>
    <?php
      for ($i=1; $i <= 10; $i++) {
          echo "*";
      }
      echo "<br>"
    ?>

    <h4>5x5 Tärnid</h4>
    <?php
      for ($i=1; $i <=25 ; $i++) {
        echo "* ";
        if ($i%5==0) {
          echo "<br>";
        }
      }
    ?>
    
    <h4>Kahanev</h4>
    <?php



    ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>