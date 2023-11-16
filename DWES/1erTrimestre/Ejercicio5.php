<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numeroTelefonico = "747 49 62 10";
        $numeroPartes = explode(" ",$numeroTelefonico);

        $test1 = preg_match('([0-9]{3})',$numeroPartes[0]);
        $test2 = preg_match('([0-9]{2})',$numeroPartes[1]);
        $test3 = preg_match('([0-9]{2})',$numeroPartes[2]);
        $test4 = preg_match('([0-9]{2})',$numeroPartes[3]);

        if ($test1 && $test2 && $test3 && $test4){
            echo "Numero correcto";
        }else {
            echo "Numero incorrecto";
        }
        echo "<br><br>";
        if ($numeroTelefonico[0] == 6 || $numeroTelefonico[0] == 7){
            echo "El numero es de movil";
        } else if ($numeroTelefonico[0] == 8 || $numeroTelefonico[0] == 9){
            echo "El numero es de fijo";
        } else{
            echo "El numero no coincide ni con fijo ni con movil";
        }
    ?>
</body>
</html>