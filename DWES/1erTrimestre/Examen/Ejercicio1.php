<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
    <?php
        $archivo_contador = 'contador.txt';
        $archivo = fopen($archivo_contador, 'r+');
        if (!$archivo) {
            $archivo = fopen($archivo_contador, 'w');
        }
        $contador = intval(fread($archivo, filesize($archivo_contador)));
        $contador++;
        fseek($archivo, 0);
        fwrite($archivo, $contador);
        fclose($archivo);
        if ($contador<2){
            echo "<h1>Pagina visitada en $contador ocasion</h1>";
        }else{
            echo "<h1>Pagina visitada en $contador ocasiones</h1>";
        }
        
        ?>
    </div>
    <br>
    <div>
        <form action="procesa_formulario.php" method="post">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" >
            <br>
            <label for="apellidos">Apellidos</label>
            <input type="text" id="apellidos" name="apellidos" >
            <br>
            <label for="dni">DNI</label>
            <input type="text" id="dni" name="dni" >

            <br>
            <label>Género</label>
            <input type="radio" id="hombre" name="genero" value="Hombre" checked>
            <label for="hombre">Hombre</label>
            <input type="radio" id="mujer" name="genero" value="Mujer">
            <label for="gmujer">Mujer</label>
            <br>
            <label><b>Meritos:</b></label>
            <br>
            <label for="merito1">Carnet de conducir B</label>
            <input type="radio" id="merito1" name="carnet" value="carnetB">
            <br>
            <label for="merito2">Pensionista</label>
            <input type="radio" id="merito2" name="pension" value="pensionista">
            <br>
            <label for="merito3">20 Años o más de experiencia</label>
            <input type="radio" id="merito3" name="exp" value="20años_exp">
            <br>
            <label for="merito4">Discapacidad superior al 33%</label>
            <input type="radio" id="merito4" name="discap" value="discapacidad33">
            <br>
            <select name="pais" id="pais">
                <option value="espanha">España</option>
                <option value="espanha">Portugal</option>
                <option value="espanha">Francia</option>
            </select>
            <br>
            <textarea name="mensaje" id="mensaje" cols="30" rows="8">
            </textarea>
            <br>
            <label for="imagen">Insertar Imagen</label>
            <input type="file" name="imagen" id="imagen">
            <br>
            <input type="submit">
        </form>
    </div>
</body>

</html>