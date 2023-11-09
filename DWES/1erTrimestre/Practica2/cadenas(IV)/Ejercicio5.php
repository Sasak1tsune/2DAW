<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cadena = "Observa a cada una";
        $$cadena = substr_replace($cadena , "o", 17);
        echo $$cadena;
    ?>
</body>
</html>