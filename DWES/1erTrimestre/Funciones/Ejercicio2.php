<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function mensajePais($pais="España", $capital = "Madrid", $habitantes = "muchos"){
            return "La capital de {$pais} es {$capital} y tiene {$habitantes} habitantes";
        }
        echo mensajePais("Colombia", "Bogotá");
    ?>
</body>
</html>