<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $valor = 5;
    $valorCorregido = $valor - 1;
    //Se corrige el valor para coincidir con lo que pida el usuario
    $fraseCompleta = "Me gusta saborear manzanas y bananas";
    $frasePartes = explode(" ", $fraseCompleta);
    echo $frasePartes[$valorCorregido];
    ?>
</body>

</html>