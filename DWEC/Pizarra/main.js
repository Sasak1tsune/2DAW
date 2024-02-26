// Función para crear el tablero de dibujo
function crearTablero() {
    // Obtener el contenedor donde se agregará el tablero
    var contenedor = document.getElementById("zonadibujo");
    
    // Crear el tablero como un elemento div
    var tablero = document.createElement("div");
    tablero.classList.add("tablero"); // Agregar una clase para estilizar el tablero si es necesario

    // Iterar para crear las filas del tablero
    for (let i = 0; i < 30; i++) {
        // Crear una fila como un elemento div
        var fila = document.createElement("div");
        fila.classList.add("fila"); // Agregar una clase para estilizar la fila si es necesario

        // Iterar para crear las celdas de la fila
        for (let j = 0; j < 30; j++) {
            // Crear una celda como un elemento div
            var celda = document.createElement("div");
            celda.classList.add("celda"); // Agregar una clase para estilizar la celda si es necesario
            celda.style.width = "10px";
            celda.style.height = "10px";
            celda.style.border = "1px solid black";
            celda.style.display = "inline-block";

            // Agregar el evento 'mousedown' para pintar la celda al hacer clic
            celda.addEventListener('mousedown', function(event) {
                pintarCelda(celda);
            });

            // Agregar la celda a la fila
            fila.appendChild(celda);
        }

        // Agregar la fila al tablero
        tablero.appendChild(fila);
    }

    // Agregar el tablero al contenedor
    contenedor.appendChild(tablero);
}

// Función para pintar una celda
function pintarCelda(celda) {
    // Si hay un color seleccionado
    let colorSeleccionado = document.querySelector('.seleccionado');
    if (colorSeleccionado) {
        // Obtenemos el color seleccionado
        let color = window.getComputedStyle(colorSeleccionado).backgroundColor;
        // Pintamos la celda con el color seleccionado
        celda.style.backgroundColor = color;
    }
}

// Función para asignar la clase seleccionada al color clickeado
function asignarClaseSeleccionada(event) {
    // Removemos la clase seleccionado de todos los colores
    document.querySelectorAll('.color').forEach(color => color.classList.remove('seleccionado'));
    // Agregamos la clase seleccionado al color clickeado
    event.target.classList.add('seleccionado');
}

// Crear el tablero una vez que el DOM esté completamente cargado
document.addEventListener("DOMContentLoaded", function() {
    crearTablero();

    // Seleccionamos todos los colores
    let colores = document.querySelectorAll('.color');
    
    // Agregamos el evento 'click' a cada color para asignar la clase seleccionada
    colores.forEach(color => color.addEventListener('click', asignarClaseSeleccionada));
});
