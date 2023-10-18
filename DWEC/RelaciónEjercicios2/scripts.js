function ejercicio51() {
    var lado=prompt("Introduzca el tamaño del lado de un cuadrado");
    var perimetro = lado*4;
    alert ("El perimetro de un cuadrado con lados de tamaño "+lado+" tiene un perimetro de: "+perimetro);
};
function ejercicio52(){
    var numero1=prompt("Inserte el primer número");
    var numero2=prompt("Inserte el segundo número");
    numero1=esNumero(numero1);
    numero2=esNumero(numero2);
    alert("La suma de los dos primeros números es: "+(numero1+numero2));
    var numero3=prompt("Inserte el tercer número");
    var numero4=prompt("Inserte el cuarto número");
    
    alert("El producto de "+numero3+" y "+numero4+" es: "+(numero3*numero4));
}
function ejercicio53(){
    
}
function esNumero(numero) {
    if(!isNaN(numero)){
        numero = parseInt(numero);
    } else {
        alert("Se ha ingresado un valor no valido");
    }
    return numero;
  }