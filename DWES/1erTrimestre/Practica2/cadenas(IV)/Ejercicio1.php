<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nom = "Juan Pablo";
    $apell1 = "Perea";
    $apell2 = "Santos";
    $edad = 20;
    echo "Me llamo {$nom} {$apell1} {$apell2} y tengo {$edad} años";
    echo "<br><br>";

    echo "Me llamo ".$nom." ".$apell1." ".$apell2." y tengo "." ".$edad." años";
    echo "<br><br>";

    echo "Me llamo ".$nom."<br>".$apell1."<br>".$apell2."<br> y tengo <br>".$edad." años";
    echo "<br><br>";
    echo "Me llamo {$nom}<br>{$apell1}<br>{$apell2}<br> y tengo {$edad} años";
    echo "<br><br>";
    ?>
</body>
</html>