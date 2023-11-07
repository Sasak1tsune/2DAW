<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $palabra1 = "Agua";
    $palabra2 = "Aguo";

    $palabra3 = "ARBUSTO";
    $palabra4 = "arbusto";

    $palabra5 = "Holiwis10";
    $palabra6 = "Holiwis15";

    $palabra7 = "Holiwiris";
    $palabra8 = "Holiworis";

    $modo = 4;
    
    switch ($modo) {
        case '1':
            # comparacion cadenas
            echo "<br><br>Modo de comparación 1<br><br>";

            if ($palabra1 == $palabra2) {
                echo "son iguales";
            } else if ($palabra1 > $palabra2) {
                echo "{$palabra1} es mayor que {$palabra2}";
            } else {
                echo "{$palabra2} es mayor que {$palabra1}";
            }
            break;
        case '2':
            # insensible
            echo "<br><br>Modo de comparación 2<br><br>";
            //Hay un metodo para hacerlo directamente pero me gusta currar
            if (strtolower($palabra3) == strtolower($palabra4)) {
                echo "{$palabra3} y {$palabra4} son iguales";
            } else if (strtolower($palabra3) > strtolower($palabra4)) {
                echo "{$palabra3} es mayor que {$palabra4}";
            } else {
                echo "{$palabra3} es mayor que {$palabra4}";
            }
            break;
        case '3':
            # comparacion natural
            echo "<br><br>Modo de comparación 3<br><br>";
            switch (strnatcasecmp($palabra5, $palabra6)) {
                case '-1':
                    echo "{$palabra5} es menor a {$palabra6}";
                    break;
                case '1':
                    echo "{$palabra5} es mayor a {$palabra6}";
                    break;
                case '0':
                    echo "{$palabra5} es igual {$palabra6}";
                    break;
                default:
                    echo "algo ha salido mal";
                    break;
            }
            break;
        case '4':
            # Comparacion n-numeros
            $ncaracteres = 4;
            echo "<br><br>Modo de comparación 4<br><br>";
            switch (strncmp($palabra7, $palabra8, $ncaracteres)) {
                case '-1':
                    echo "{$palabra7} es menor a {$palabra8}";
                    break;
                case '1':
                    echo "{$palabra7} es mayor a {$palabra8}";
                    break;
                case '0':
                    echo "{$palabra7} es igual {$palabra8}";
                    break;
                default:
                    echo "algo ha salido mal";
                    break;
            }
            break;
        default:
            echo "Algo ha salido mal";
            break;
    }
    ?>
</body>

</html>