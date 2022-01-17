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
    $int = 10;
    $dou = 10.45;
    $str = "Hola!"; 
    $bool = false;

    echo "<p>Una variable tipus " . gettype($int) . " $int.</p>";
    echo "<p>Una variable tipus " . gettype($dou) . " $dou.</p>";
    echo "<p>Una variable tipus " . gettype($str) . " $str.</p>";
    echo "<p>Una variable tipus " . gettype($bool) . " $bool.</p>";
    ?>
</body>
</html>