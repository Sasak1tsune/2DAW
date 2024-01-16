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

function ejercicio71(){
    var numero1 = prompt("Inserte el primer número");
    numero1 = esNumero(numero1);
    var numero2 = prompt("Inserte el segundo número");
    numero2 = esNumero(numero2);

    if(numero1>numero2){
        alert("La suma de los dos numeros es: "+(numero1+numero2)+" y la diferencia entre ellos es "+(numero1-numero2));
    } else if (numero1<numero2){
        alert("El producto de los dos numeros es"+(numero1*numero2)+" y la division del primero respecto al segundo es: "+(numero1/numero2));
    } else {
        alert("Los numeros son iguales");
    }
}

function ejercicio72() {
    var nota1, nota2, nota3, resultado, suma;
    nota1 = prompt("Ingrese la nota número 1");
    nota1 = esNumero(nota1);
    nota2 = prompt("Ingrese la nota número 2");
    nota2 = esNumero(nota2);
    nota3 = prompt("Ingrese la nota número 3");
    nota3 = esNumero(nota3);
    suma = nota1 + nota2 + nota3;
    resultado = suma / 3;
    if (resultado >= 4) {
        alert("regular");
    } else {
        alert("reprobado");
    }
}

function determinarDigitos(numero) {
    // Convierte el número a una cadena de caracteres
    const numeroTexto = numero.toString();
  
    if (numeroTexto.length === 1) {
      return "El número tiene un dígito.";
    } else if (numeroTexto.length === 2) {
      return "El número tiene dos dígitos.";
    } else {
      return "El número no es válido. Debe ser un número positivo de uno o dos dígitos.";
    }
  }
  function ejercicio73(){
    // Solicitar al usuario que ingrese un número
  var numeroIngresado = prompt("Ingrese un número positivo de 1 a 99:");
  
  // Convertir el número ingresado a entero
  var numeroEntero = parseInt(numeroIngresado);
  
  // Verificar si el número tiene uno o dos dígitos
  var resultado = determinarDigitos(numeroEntero);
  
  // Mostrar el resultado
  alert(resultado);
  }

function esNumero(numero) {
    if (!isNaN(numero)) {
        numero = parseFloat(numero);
    } else {
        alert("Se ha ingresado un valor no valido");
    }
    return numero;
}