<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 02</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>Harjutus 02</h1>
    <?php
    // Arvutega >Tehted
        $a1 = 7;
        $a2 = 5;
        $a3 = 8

    printf("%d + %d = %d" "<br>", $a1, $a2, $a1 + $a2);
    printf("%d - %d = %d" "<br>", $a1, $a2, $a1 - $a2);
    printf("%d * %d = %d" "<br>", $a1, $a2, $a1 * $a2);
    printf("%d / %d = %0.2f" "<br>", $a1, $a2, $a1 / $a2);
    printf("%d jääk %d = %d" "<br>", $a1, $a2, $a1 % $a2);

    //Täisnurkne Kolmnurk
        $p =  $a1+$a2+$a3;
        $s = $a1 * $a2 / 2;
        echo "Ümbermõõt: ".$p."<br>";
        echo "Pindala: ".$s."<br>";

    ?>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>