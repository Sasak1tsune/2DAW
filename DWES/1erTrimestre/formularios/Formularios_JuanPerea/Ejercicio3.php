<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Búsqueda</title>
</head>
<body>
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $textoBuscar = htmlspecialchars($_POST["textoBuscar"]);
    $buscarEn = isset($_POST["buscarEn"]) ? htmlspecialchars($_POST["buscarEn"]) : "";
    $generoMusical = isset($_POST["generoMusical"]) ? htmlspecialchars($_POST["generoMusical"]) : "";
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
<style>
    #contenedorFormulario {
      border-style: solid;
      border-color: blue;
      padding: 10px;
    }
  </style>

  <h2>Formulario de Búsqueda</h2>
<div id="contenedorFormulario">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="textoBuscar">Texto a buscar:</label>
    <input type="text" id="textoBuscar" name="textoBuscar" required>

    <br>

    <label>Buscar en:</label>
    <input type="radio" id="busquedaCancion" name="buscarEn" value="cancion" checked>
    <label for="busquedaCancion">Títulos de canción</label>

    <input type="radio" id="busquedaAlbum" name="buscarEn" value="album">
    <label for="busquedaAlbum">Nombres de álbum</label>

    <input type="radio" id="ambos campos" name="buscarEn" value="ambos campos">
    <label for="ambosCampos">Ambos campos</label>

    <br>

    <label for="generoMusical">Género musical:</label>
    <select id="generoMusical" name="generoMusical">
      <option value="todos">Todos</option>
      <option value="acustica">Acústica</option>
      <option value="banda sonora">Banda Sonora</option>
      <option value="blues">Blues</option>
      <option value="electronica">Electrónica</option>
      <option value="folk">Folk</option>
      <option value="Jazz">Jazz</option>
      <option value="NewAge">New Age</option>
      <option value="pop">Pop</option>
      <option value="rock">Rock</option>
    </select>
    <br>
    <input type="submit" value="Buscar">
  </form>
  <?php
    echo "<p>Texto a buscar: $textoBuscar</p>";
    echo "<p>Buscar en: $buscarEn</p>";
    echo "<p>Género musical: $generoMusical</p>";
    ?>
</div>
</body>
</html>