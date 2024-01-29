<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
     if (!empty($_POST['cadena']) && !empty($_POST['sexo']) && !empty($_POST['extras'])) {
          echo "Cadena a buscar: " . $_POST['cadena'] . "<br>";
          echo "Sexo: " . $_POST['sexo'] . "<br>";
          echo "Extras: " . implode(", ", $_POST['extras']) . "<br>";
     }
     if (!empty($_POST['color'])) {
          echo "Color: " . $_POST['color'] . "<br>";
     }
     if (!empty($_POST['idiomas'])) {
          echo "Idiomas: " . implode(", ", $_POST['idiomas']) . "<br>";
     }
     if (!empty($_POST['comentario'])) {
          echo "Comentario: " . $_POST['comentario'] . "<br>";
     }
?>
<a href="ejercicio2.php">Volver</a>
</body>
</html>