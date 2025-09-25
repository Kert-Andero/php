<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 12.1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>Harjutus 12 töötajad</h1>
    <?php
    $allikas = 'tootajad.csv';
    $minu_csv = fopen($allikas, 'r') or die('Ei leia faili!');
    $mkokku = 0; $nkokku = 0;
    $mpalk = 0; $npalk = 0;
    while(!feof($minu_csv)){
	    $rida = fgetcsv($minu_csv, filesize($allikas),';');
        if ($rida[1] == "m") {
             $mkokku+=1;
             $nkokku+= $rida[2];
        } else {
             $nkokku+=1;
             $npalk += $rida[2];
       }
    }
    if($mpalk/$mkokku>$npalk/$nkokku){
        echo "naisi ahistatakse";
    } else if($mpalk/$mkokku<$npalk/$nkokku){
        echo "mehi ahistatakse";
    } else {
        echo "kõik võrdsed";
    }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>

</html>
