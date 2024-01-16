// Tabla de multiplicar del 6 con bucle for
function ejecutar() {
    // Obtener el elemento con el id 'multiplicar' y asignarlo a la variable multiplicarResultFor
    var multiplicarResultFor = document.getElementById('multiplicar');
    
    // Buce for que itera de 1 a 10
    for (var i = 1; i <= 10; i++) {
        // Calcular el resultado de la multiplicación
        var result = 6 * i;
        
        // Agregar un elemento de lista con el resultado al contenido HTML
        multiplicarResultFor.innerHTML += '<li>' + i + ' x 6 = ' + result + '</li>';
    }

    // Tabla de sumar del 9 con bucle while
    var sumarResultWhile = document.getElementById('sumar');
    var j = 1; // Iniciar la variable j en 1
    
    // Bucle while que se ejecuta mientras j sea menor o igual a 10
    while (j <= 10) {
        // Calcular el resultado de la suma
        var result = 9 + j;
        
        // Agregar un elemento de lista con el resultado al contenido HTML
        sumarResultWhile.innerHTML += '<li>' + j + ' + 9 = ' + result + '</li>';
        
        // Incrementar j en 1 en cada iteración
        j++;
    }

    // Tabla de dividir del 7 con bucle do-while
    var dividirResultDoWhile = document.getElementById('dividir');
    var k = 1; // Iniciar la variable k en 1
    
    // Bucle do-while que se ejecuta al menos una vez y luego continúa mientras k sea menor o igual a 10
    do {
        // Calcula el resultado de la división
        var result = 7 / k;
        
        // Agrega un elemento de lista con el resultado al contenido HTML
        dividirResultDoWhile.innerHTML += '<li>' + '7 / ' + k + ' = ' + result + '</li>';
        
        // Incrementar k en 1 en cada iteración
        k++;
    } while (k <= 10);

}
function desplaza() {
    var resultado1 = 125 >> 3; // Desplazamiento de 3 bits a la derecha (equivale a dividir por 8)
    var resultado2 = 40 << 2; // Desplazamiento de 2 bits a la izquierda (equivale a multiplicar por 4)
    var resultado3 = 25 >> 1; // Desplazamiento de 1 bit a la derecha (equivale a dividir por 2)
    var resultado4 = 10 << 4; // Desplazamiento de 4 bits a la izquierda (equivale a multiplicar por 16)

    alert("125 / 8 ="+ resultado1);
    alert("40 x 4 ="+ resultado2);
    alert("25 / 2 ="+ resultado3);
    alert("10 x 16 ="+ resultado4);
}