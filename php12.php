<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 12</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>Harjutus 12</h1>
    <form action=""> 
            start: <input type="time" name="start" id=""><br>
            start: <input type="time" name="finish" id=""><br>
            <input type="submit" value="Leia aeg">
    </form>
    <?php
        $s = strtotime($_GET["start"]);
        $f = strtotime($_GET["finish"]);

        $diff = abs($s - $f)/3600*60;
        echo intdiv($diff,60).":".$diff % 60;
      
    ?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>