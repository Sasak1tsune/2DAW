<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
<style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }
    </style>
    <h1>Elementos de entrada</h1>
    <h3>Elementos de tipo input</h3>
    <form action="ejercicio2-resultados.php" method="post" enctype="multipart/form-data">
        <label for="cadena">Introduzca la cadena a buscar:</label>
        <INPUT TYPE="text" NAME="cadena" VALUE="valor por defecto" SIZE="20"><br>

        <label>Sexo:</label>
        <INPUT TYPE="radio" NAME="sexo" VALUE="M" CHECKED>Mujer
        <INPUT TYPE="radio" NAME="sexo" VALUE="H">Hombre
        <br>


        <label>Extras:</label>
        <input type="checkbox" id="garaje" name="extras[]" value="garaje">
        <label for="garaje">Garaje</label>
        <input type="checkbox" id="piscina" name="extras[]" value="piscina">
        <label for="piscina">Piscina</label>
        <input type="checkbox" id="jardin" name="extras[]" value="jardin">
        <label for="jardin">Jardín</label><br>

        <label for="fichero">Fichero:</label>
        <input type="file" id="fichero" name="fichero"><br>
        <p>Lo veremos en el ejercicio 4</p>

        <input type="hidden" id="hidden" name="hidden"><br>

        <label for="contraseña">Contraseña:</label>
        Contraseña: <INPUT TYPE="password" NAME="clave">
        <br>

        <label for="color">Color:</label>
        <select id="color" name="color">
            <option value="rojo">Rojo</option>
            <option value="verde">Verde</option>
            <option value="azul">Azul</option>
        </select><br>

        <label for="idiomas">Idiomas:</label>
        <select id="idiomas" name="idiomas[]" multiple>
            <option value="ingles">Inglés</option>
            <option value="frances">Francés</option>
            <option value="aleman">Alemán</option>
        </select><br>

        <label for="comentario">Comentario:</label>
        <textarea id="comentario" name="comentario">Este libro me parece....</textarea><br>

        <input type="submit" value="Enviar datos">
        <input type="reset" value="Borrar datos">
    </form>
</body>

</html>