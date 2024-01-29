<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Búsqueda</title>
</head>
<body>

<style>
    #contenedorFormulario {
      border-style: solid;
      border-color: blue;
      padding: 10px;
    }
  </style>

  <h2>Formulario de Búsqueda</h2>
<div id="contenedorFormulario">
  <form action="ejercicio1-resultados.php" method="post">
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
</div>
</body>
</html>