function ejercicio51() {
    var lado = prompt("Introduzca el tamaño del lado de un cuadrado");
    var perimetro = lado * 4;
    alert("El perimetro de un cuadrado con lados de tamaño " + lado + " tiene un perimetro de: " + perimetro);
}

function ejercicio52() {
    var numero1 = prompt("Inserte el primer número");
    numero1 = esNumero(numero1);
    var numero2 = prompt("Inserte el segundo número");
    numero2 = esNumero(numero2);
    alert("La suma de los dos primeros números es: " + (numero1 + numero2));
    var numero3 = prompt("Inserte el tercer número");
    numero3 = esNumero(numero3);
    var numero4 = prompt("Inserte el cuarto número");
    numero4 = esNumero(numero4);

    alert("El producto de " + numero3 + " y " + numero4 + " es: " + (numero3 * numero4));
}

function ejercicio53() {
    var numero1 = prompt("Inserte el primer número");
    numero1 = esNumero(numero1);
    var numero2 = prompt("Inserte el segundo número");
    numero2 = esNumero(numero2);
    var numero3 = prompt("Inserte el tercer número");
    numero3 = esNumero(numero3);
    var numero4 = prompt("Inserte el cuarto número");
    numero4 = esNumero(numero4);
    alert("La suma de todos los numeros es: " + (numero1 + numero2 + numero3 + numero4));

    alert("El producto de todos los numeros es: " + (numero1 * numero2 * numero3 * numero4));
}

function ejercicio54() {
    var precioProducto, cantidadProducto;
    precioProducto = prompt("Inserte la cantidad de productos que desea llevar");
    precioProducto = esNumero(precioProducto);
    cantidadProducto = prompt("Ahora inserte el precio");
    cantidadProducto = esNumero(cantidadProducto);
    alert("El precio a abonar es de " + (precioProducto * cantidadProducto) + "$");
}

function ejercicio61() {
    var nota1, nota2, nota3, resultado, suma;
    nota1 = prompt("Ingrese la nota número 1");
    nota1 = esNumero(nota1);
    nota2 = prompt("Ingrese la nota número 2");
    nota2 = esNumero(nota2);
    nota3 = prompt("Ingrese la nota número 3");
    nota3 = esNumero(nota3);
    suma = nota1 + nota2 + nota3;
    resultado = suma / 3;
    if (resultado >= 7) {
        alert("Promocionado");
    } else {
        alert("LLora pues");
    }
}

function ejercicio62() {
    var contraseña;
    contraseña = prompt("Ingrese su contraseña");
    if (prompt("Vuelva a ingresar su contraseña")==contraseña){
        alert("Validacion correcta");
    }
}

function esNumero(numero) {
    if (!isNaN(numero)) {
        numero = parseFloat(numero);
    } else {
        alert("Se ha ingresado un valor no valido");
    }
    return numero;
}