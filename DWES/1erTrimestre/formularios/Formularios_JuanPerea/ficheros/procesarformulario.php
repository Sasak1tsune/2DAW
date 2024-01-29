<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_destino = $_POST["nombre_destino"];
    $pais = $_POST["pais"];
    $duracion = $_POST["duracion"];
    $dias_disponibles = $_POST["dias_disponibles"];

    $nuevo_destino = "$nombre_destino:$pais:$duracion:$dias_disponibles";

    // Añadir el nuevo destino al fichero
    file_put_contents("viajes.txt", $nuevo_destino . PHP_EOL, FILE_APPEND);

    // Redireccionar de nuevo al formulario
    header("Location: formulario_viajes.html");
    exit();
}
?>