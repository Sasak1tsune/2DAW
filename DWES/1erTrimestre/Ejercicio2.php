<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $varNumerica = 15;
    $varHexa = 5;
    //El ejercicio no especifica el formato inicial de la var numerica, por ende, usaré el decimal como base inicial
    switch ($varHexa) {
        case 1:
            # Decimal
            echo "El valor pasado es {$varNumerica} en decimal";
            break;
        case 2:
            # hexadecimal minus
            echo "El valor pasado es ".strtolower(dechex($varNumerica))." en hexadecimal";
            break;
        case 3:
            # hexadecimal minus
            echo "El valor pasado es ".strtoupper(dechex($varNumerica))." en Hexadecimal";
            break;
        case 4:
            # octal
            echo "El valor pasado es ".decoct($varNumerica)." en octal";
            break;
        case 5:
            # exponencial
            echo "El valor pasado es ".exp($varNumerica)." en notacion exponencial";
            break;
        case 6:
            # Binario
            echo "El valor pasado es ".decbin($varNumerica)." en binario";
            break;
        default:
            # error
            echo "Formato Incorrecto";
            break;
    }
    ?>
</body>

</html>