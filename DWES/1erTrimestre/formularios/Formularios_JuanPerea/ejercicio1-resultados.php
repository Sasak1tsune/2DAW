<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultados de Búsqueda</title>
</head>
<body>

  <h2>Resultados de Búsqueda</h2>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $textoBuscar = htmlspecialchars($_POST["textoBuscar"]);
    $buscarEn = isset($_POST["buscarEn"]) ? htmlspecialchars($_POST["buscarEn"]) : "";
    $generoMusical = isset($_POST["generoMusical"]) ? htmlspecialchars($_POST["generoMusical"]) : "";

    echo "<p>Texto a buscar: $textoBuscar</p>";
    echo "<p>Buscar en: $buscarEn</p>";
    echo "<p>Género musical: $generoMusical</p>";
  }
  ?>

  <br>

  <a href="ejercicio1.php">[ Nueva búsqueda ]</a>

</body>
</html>