<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bàsic</title>
</head>
<body>

    <?php
    /* EXERCICI 1 */

    echo "<h5>EXERCICI 1</h5>";

    $int = 10;
    $dou = 10.45;
    $str = "Hola!"; 
    $bool = false;

    echo "<p>Una variable tipus " . gettype($int) . " $int.</p>";
    echo "<p>Una variable tipus " . gettype($dou) . " $dou.</p>";
    echo "<p>Una variable tipus " . gettype($str) . " $str.</p>";
    echo "<p>Una variable tipus " . gettype($bool) . " $bool.</p>";
    echo "<br>";


    /* EXERCICI 2 */

    echo "<h5>EXERCICI 2</h5>";

    $hola = "Hello, World!";
    $curs = "Aquest és el curs de PHP";

    echo "<p>Majúscules: " . strtoupper($hola) . "</p>";
    echo "<p>Longitud: " . strlen($hola) . "</p>";
    echo "<p>Revert: " . strrev($hola) . "</p>";
    echo "<p>Concatenar: $hola $curs</p>";
    echo "<br>";

     /* EXERCICI 3 */

     echo "<h5>EXERCICI 3</h5>";

     define("NOM", "Carla");
     echo "<h1><b>" . NOM . " </b></h1>";
     echo "<br>";
    ?>
</body>
</html>