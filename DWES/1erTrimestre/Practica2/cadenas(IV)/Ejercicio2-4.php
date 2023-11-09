<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>codigo en php que te diga cuantas vocales hay en un string
    <?php
        $cadena = "Esto es una cadena";
        $segunCadena = " un poco mas larga";

        echo $cadena.$segunCadena;
        $$cadena = $cadena.$segunCadena;
        echo "<br>";

        echo "la primera coincidencia de la letra c es en la posición ". strpos($$cadena, "c");
        echo "<br>";

        echo "la ultima coincidencia de la letra c es en la posición ". strrpos($$cadena, "c");
        echo "<br>";

        echo "la ultima coincidencia de la substr poco es en la posición ". strpos($$cadena, "poco");
        echo "<br>";
        
        echo "caracter en la primera posición : ".$$cadena[0];
        echo "<br>";
        echo "caracter en la tercera posición : ".$$cadena[2];
        echo "<br>";
        echo "caracter en la tercera posición : ".$$cadena[strlen($$cadena)-1];
        ?>
    
</body>
</html>