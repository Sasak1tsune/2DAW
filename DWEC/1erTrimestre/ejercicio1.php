<html>
<h1>Formulario simple</h1>
<h2>Búsqueda de canciones</h2>
<div>
    <form action="ejercicio1-resultados.php" method="post">
        <label>
            <b>Texto a buscar:</b>&nbsp;&nbsp;<input type="text" name="textoBusqueda">
        </label>
        <br>
        <label>
            <b>Buscar en:</b>&nbsp;&nbsp;
            <input type="radio" name="tipoBusqueda" value="cancion">Titulos de cancion
            <input type="radio" name="tipoBusqueda" value="album">Nombres de album
            <input type="radio" name="tipoBusqueda" value="ambos">Ambos campos
        </label>
        <br>
        <label>
            <b>Género musical</b>
            <select name="cars" id="cars" form="carform">
                <option value="Todos">Todos</option>
                <option value="Acústica">Acústica</option>
                <option value="Banda Sonora">Banda Sonora</option>
                <option value="Blues">Blues</option>
                <option value="Electrónica">Electrónica</option>
                <option value="Folk">Folk</option>
                <option value="Jazz">Jazz</option>
                <option value="New Age">New Age</option>
                <option value="Pop">Pop</option>
                <option value="Rock">Rock</option>
            </select>
        </label>
        <br>
        <label>
            <input type="submit" name="buscar" id="buscar">
        </label>
    </form>

</div>
</html>