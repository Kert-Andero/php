<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>Harjutus 03</h1>
  <form action="#" method="get">
        arv1 <input type="number" name="arv1" required><br>
        arv2 <input type="number" name="arv2" required><br>
        <input type="submit" value="jaga">
    </form>
    <?php
    if(isset($_GET["arv1"]) && isset($_GET["arv2"])){
        $arv1 = $_GET["arv1"];
            $arv2 = $_GET["arv2"];

            if($arv2==0){
                echo "Nulliga ei saa jagada";
            } else {
                echo $arv1 / $arv2;
            }
        }
    ?>
    <h4>Trapets</h4>
    <?php
        $a = $_GET["a"];
        $b = $_GET["b"];
        $h = $_GET["h"];
        $trapets = ($a + $b)/2*$h;
        echo "trapetasi pindala: ".$trapets."<br>";
    ?> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>