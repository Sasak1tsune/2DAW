<?php
$titulo = $texto = $categoria = $imagen = "";
$errores = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $titulo = htmlspecialchars(trim($_POST["titulo"]));
  $texto = htmlspecialchars(trim($_POST["texto"]));
  $categoria = test_input($_POST["categoria"]);

  if (empty($_FILES["imagen"]["name"])) {
    $errores[] = "Se requiere una imagen.";
  } else {
    $imagen = $_FILES["imagen"]["name"];
    $ruta_temporal = $_FILES["imagen"]["tmp_name"];
    $carpeta_destino = "img/"; // Cambia esto a la carpeta donde quieras guardar las imágenes

    // Mueve la imagen de la carpeta temporal a la carpeta de destino
    move_uploaded_file($ruta_temporal, $carpeta_destino . $imagen);
  }
}

function test_input($data) {
  return htmlspecialchars(trim($data));
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>

    <style>
        .caja {
            border: 1px solid blue;
            padding: 20px;
            width: 50%;
            text-align: left;
        }

        .campo {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .campo p {
            margin-right: 10px;
        }

        .error {
            color: red;
            font-weight: bold;
        }

        .exito {
            color: green;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1 style="color: blue;">Subida de ficheros</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($errores)) {
        echo '<h2 class="error">Resultados del formulario</h2>';
        echo '<h3 class="error">Resultado de la inserción de nueva noticia</h3>';
        echo '<div class="error">No se ha podido realizar la inserción debido a los siguientes errores:</div>';
        foreach ($errores as $error) {
            echo '<div class="error">- ' . $error . '</div>';
        }
        echo '<a href="ejercicio4.php">Volver al formulario</a>';
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST" && empty($errores)) {
        echo '<h2 class="exito">Resultados del formulario</h2>';
        echo '<h3 class="exito">Resultado de la inserción de nueva noticia</h3>';
        echo '<ol>';
        echo '<li>Título: ' . $titulo . '</li>';
        echo '<li>Texto: ' . $texto . '</li>';
        echo '<li>Categoría: ' . $categoria . '</li>';
        echo '<li>Imagen: <a href="img/' . $imagen . '">' . $imagen . '</a></li>';
        echo '</ol>';
        echo '<a href="ejercicio4.php">Volver al formulario</a>';
    } else {
    ?>

    <h2>Insertar nueva noticia</h2>

    <div class="caja">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
            <div class="campo">
                <label for="titulo">Título: *</label>
                <input type="text" id="titulo" name="titulo" required>
            </div>
            <br>
            <div class="campo">
                <label for="texto">Texto: *:</label>
                <textarea id="texto" cols="50" rows="4" name="texto" required></textarea><br>
            </div>
            <br>
            <div class="campo">
                <label for="categoria">Categoría:</label>
                <select id="categoria" name="categoria">
                    <option value="promociones">promociones</option>
                    <option value="ofertas">ofertas</option>
                    <option value="demanda">demanda</option>
                </select>
            </div>
            <br>
            <div class="campo">
                <label for="imagen">Imagen:</label>
                <input type="file" name="imagen">
            </div><br>
            <input type="submit" value="Insertar noticia">
        </form>
    </div>

    <?php
    }
    ?>

</body>

</html>