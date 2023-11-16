<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $correoCompleto = "gokulegana@outlook.es";
        $correoPartes = explode("@", $correoCompleto);
        $usuario = $correoPartes[0];
        $dominio = $correoPartes[1];
        echo "<p>Teniendo en cuenta que el correo completo es {$correoCompleto},<br>El usuario extraido es: <b>{$usuario}</b><br>El dominio extraido es: <b>{$dominio}</b><br></p>"
    ?>
</body>
</html>