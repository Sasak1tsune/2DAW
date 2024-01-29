<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar que los campos obligatorios no estén en blanco
    $nombre = $_POST["nombre"];
    $dni = $_POST["dni"];
    $imagen = $_FILES["imagen"];

    if (empty($nombre) || empty($dni) || empty($apellidos)) {
        echo "No se ha completado algún campo requerido(Nombre/Apellidos/).";
    } else {
        echo "<b>Nombre:</b> $nombre <br>";
        echo "<b>DNI:</b> $dni <br>";
        echo "<b>Género:</b> {$_POST['genero']} <br>";
        echo "<b>Méritos:</b> ";
        if (isset($_POST['carnet'])) echo "Carnet de conducir B ";
        if (isset($_POST['pension'])) echo "Pensionista ";
        if (isset($_POST['exp'])) echo "20 Años o más de experiencia ";
        if (isset($_POST['discap'])) echo "Discapacidad superior al 33% ";
        echo "<br>";
        echo "<b>País:</b> {$_POST['pais']} <br>";
        echo "<b>Mensaje:</b> {$_POST['mensaje']} <br>";
    }
}
?>