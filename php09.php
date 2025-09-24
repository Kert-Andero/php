<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harjutus 09</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1>Harjutus 09</h1>
 <form method="post">
        <label for="nimi">Sisesta oma nimi:</label>
        <input type="text" id="nimi" name="nimi" required>
        <br>
        <label for="sisend">Sisesta sõna:</label>
        <input type="text" id="sisend" name="sisend" required>
        <br>
        <label for="lauses">Sisesta lause:</label>
        <input type="text" id="lauses" name="lauses" required>
        <br>
        <label for="eesnimi">Sisesta eesnimi:</label>
        <input type="text" id="eesnimi" name="eesnimi" required>
        <br>
        <label for="perenimi">Sisesta perenimi:</label>
        <input type="text" id="perenimi" name="perenimi" required>
        <br>
        <input type="submit" value="Saada">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function tervita($nimi) {
        return "Tere, " . ucfirst(strtolower($nimi)) . "!";
    }

    function eraldaTähtedega($sisend) {
        return implode('.', str_split(strtoupper($sisend)));
    }

    function ropudsõnad($sisend, $ropud_sõnad) {
        return str_replace($ropud_sõnad, '***', $sisend);
    }

    function looMail($eesnimi, $perenimi) {
        $eesnimi = str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'y', 'o'), strtolower($eesnimi));
        $perenimi = str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'y', 'o'), strtolower($perenimi));
        
        return $eesnimi . $perenimi . "@hkhk.edu.ee";
    }

    $nimi = $_POST['nimi'];
    $sisend = $_POST['sisend'];
    $lauses = $_POST['lauses'];
    $eesnimi = $_POST['eesnimi'];
    $perenimi = $_POST['perenimi'];

    echo tervita($nimi) . "<br>";
    echo eraldaTähtedega($sisend) . "<br>"; 
    echo ropudsõnad($lauses, array("noob")) . "<br>"; 
    echo looMail($eesnimi, $perenimi); 
}
?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>