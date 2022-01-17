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
    echo "<br>";


    /* EXERCICI 3 */

     echo "<h5>EXERCICI 3</h5>";

     define("NOM", "Carla");
     echo "<h1><b>" . NOM . " </b></h1>";
     echo "<br>";
     echo "<br>";


    /* EXERCICI 4 */

    echo "<h5>EXERCICI 4</h5>";

    $x = 11;
    $y = 3;
    $n = 3.56;
    $m = 1.17;

    echo "<p>Variable X: $x</p>";
    echo "<p>Variable Y: $y</p>";
    echo "<p>Variable N: $n</p>";
    echo "<p>Variable M: $m</p>";
    echo "<br>";

    echo "<p><b>Variables X i Y</b></p>";
    $suma = $x + $y;
    $resta = $x - $y;
    $mult = $x * $y;
    $residu = $x % $y;
    echo "<p>Suma: $x + $y = $suma</p>";
    echo "<p>Resta: $x - $y = $resta</p>";
    echo "<p>Multiplicació: $x x $y = $mult</p>";
    echo "<p>Módul: $x % $y = $residu</p>";

    echo "<br>";

    echo "<p><b>Variables N i M</b></p>";
    $suma = $n + $m;
    $resta = $n - $m;
    $mult = $n * $m;
    $residu = $n % $m;
    echo "<p>Suma: $n + $m = $suma</p>";
    echo "<p>Resta: $n - $m = $resta</p>";
    echo "<p>Multiplicació: $n x $m = $mult</p>";
    echo "<p>Módul: $n % $m = $residu</p>";

    echo "<br>";

    echo "<p><b>Totes les variables</b></p>";
    function doble($num) {
        return $num * 2;
    }
    $sum_tot = $x + $y + $n + $m;
    $mult_tot = $x * $y * $n * $m;


    echo "<p>Doble de X: " . doble($x) . "</p>";
    echo "<p>Doble de Y: " . doble($y) . "</p>";
    echo "<p>Doble de N: " . doble($n) . "</p>";
    echo "<p>Doble de M: " . doble($m) . "</p>";
    echo "<p>Suma de totes les variables: $x + $y + $n + $m = $sum_tot</p>";
    echo "<p>Multiplicació de totes les variables: $x x $y x $n x $m = $mult_tot</p>";

    echo "<br>";
    echo "<br>";


    /* EXERCICI 5 */

    echo "<h5>EXERCICI 5</h5>";

    $arr1 = array(1, 2, 3, 4, 5);
    $arr2 = array(1, 2, 3);
    echo "<p><b>Afegim un valor a l'array</b></p>";
    echo "<p>";
    print_r($arr2);
    echo "</p>";
    array_push($arr2, 4);
    echo "<p>";
    print_r($arr2);
    echo "</p>";

    echo "<br>";

    echo "<p><b>Ajuntem les dues matrius</b></p>";
    $arr_merge = array_merge($arr1, $arr2);
    echo "<p>";
    print_r($arr_merge);
    echo "</p>";
    echo "<p>Longitud de la matriu: ". count($arr_merge). "</p>";
    echo "<br>";

    echo "<p><b>Imprimim valor a valor</b></p>";
    foreach ($arr_merge as $item) {
        static $i = 0;
        echo "<p>Valor $i: $item</p>";
        $i++;
    }



    echo "<br>";

   

    ?>
</body>
</html>