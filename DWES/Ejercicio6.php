<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cadena="Bienvenido a nuestro cine. Ha usted la decisión correcta";
        $nombrecliente= " Pablo González.";
        $fraseSeparada = explode(". ", $cadena);
        echo $fraseSeparada[0].",".$nombrecliente." ".$fraseSeparada[1];
    ?>
</body>
</html>