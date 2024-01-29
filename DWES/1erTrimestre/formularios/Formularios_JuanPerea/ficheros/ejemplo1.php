<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRAVELMAS - Formulario de Destinos</title>
</head>
<body>
    <h1>TRAVELMAS - Formulario de Destinos</h1>

    <!-- Formulario para añadir nuevos destinos -->
    <form action="procesar_formulario.php" method="post">
        <label for="nombre_destino">Nombre del Destino:</label>
        <input type="text" name="nombre_destino" required>
        
        <label for="pais">País:</label>
        <input type="text" name="pais" required>
        
        <label for="duracion">Duración:</label>
        <input type="text" name="duracion" required>
        
        <label for="dias_disponibles">Días Disponibles:</label>
        <input type="text" name="dias_disponibles" required>
        
        <button type="submit">Agregar Destino</button>
    </form>

    <!-- Mostrar destinos existentes en una tabla -->
    <h2>Destinos existentes:</h2>
    <?php
        $destinos = file("viajes.txt", FILE_IGNORE_NEW_LINES);
        if (!empty($destinos)) {
            echo "<table border='1'>
                    <tr>
                        <th>Nombre del Destino</th>
                        <th>País</th>
                        <th>Duración</th>
                        <th>Días Disponibles</th>
                    </tr>";

            foreach ($destinos as $destino) {
                $info = explode(":", $destino);
                echo "<tr>
                        <td>{$info[0]}</td>
                        <td>{$info[1]}</td>
                        <td>{$info[2]}</td>
                        <td>{$info[3]}</td>
                    </tr>";
            }

            echo "</table>";
        } else {
            echo "<p>No hay destinos disponibles.</p>";
        }
    ?>
</body>
</html>