//JuanPabloPereaSantos
var ventana1, ventana2, ventana3;
var lista1, lista2;
var listaNumeros;
var numerosAleatoriosGenerados;
var usuario = {
    nombre: "",
    contrasenha: ""
};
//consigo los datos del formulario


function abrirVentana1() {
    ventana1 = window.open("", "Ventana1", "width=300, height=300");
    ventana1.document.write('<form id="formulario"><label for="usuario">Usuario</label><input type="text" name="usuario" id="usuario"><br><label for="contrasenha">Contraseña</label><input type="text" name="contrasenha" id="contrasenha"><br><label for="confirmacion">Nueva Contraseña</label><input type="text" name="confirmacion" id="confirmacion"></form><br><button onclick="verificar()">Verificar</button>')

    ventana1.verificar = function () {
        var usuarioVentana1 = ventana1.document.getElementById("usuario").value;
        var contrasenhaVentana1 = ventana1.document.getElementById("contrasenha").value;
        var confirmacionVentana1 = ventana1.document.getElementById("confirmacion").value;
        if (confirmacionVentana1 == contrasenhaVentana1) {
            usuario.nombre = usuarioVentana1;
            usuario.contrasenha = contrasenhaVentana1;
            ventana1.document.write("<br>Usuario y contraseña creados correctamente");

        } else {
            ventana1.document.write("<br>contraseña incorrecta. Las dos contraseñas deben de ser iguales.");
        }
    }
    ventana1.document.body.style.backgroundColor = "lightgreen";
}

function abrirVentana2() {
    ventana2 = window.open("", "Ventana2", "width=300, height=300 , left=1920");
    ventana2.eliminarContrasenha = function () {
        usuario.contrasenha = "";
        ventana2.document.write("<br>Contraseña borrada correctamente. Debes de introducirla de nuevo.");
        setTimeout(function(){//Cierro la ventana
            ventana2.window.close();
        }, 5000);
    }
    ventana2.document.write('Nombre de usuario: ' + usuario.nombre + '<br>contraseña actual:' + usuario.contrasenha + '<br><button onclick="eliminarContrasenha()">Eliminar contraseña actual</button>');
    ventana2.document.body.style.backgroundColor = "lightblue";
    
}

function abrirVentana3() {
    ventana3 = window.open("", "Ventana3", "width=300, height=300 , left=720, top=1080");
    var pares = numerosAleatoriosGenerados.filter(numero => numero % 2 == 0);
    ventana3.document.write(pares);
    ventana3.document.body.style.backgroundColor = "pink";
}

function cerrarVentana(num) {
    switch (num) {
        case 1:
            ventana1.window.close();
            break;
        case 2:
            ventana2.window.close();
            break;
        case 3:
            ventana3.window.close();
            break;
    }
}

function generarAleatorios(n, lista2) { //n indica cuantos numeros se piden Lista 2 indica el maximo de numero random
    //Se genera un array con lo pedido
    let numerosGenerados = [];
    for (i = 0; i < n; i++) {
        var numeroAleatorio = Math.floor(Math.random() * lista2); //numero random entre 0 y 100
        numerosGenerados[i] = numeroAleatorio
    }
    return numerosGenerados;

}

function mostrarAleatorios() {
    lista1 = document.getElementById("lista1").value;
    lista2 = document.getElementById("lista2").value;
    listaNumeros = generarAleatorios(lista1, lista2);
    numerosAleatoriosGenerados = listaNumeros;//Saco información para la ventana 3
    var div = document.createElement("div");
    div.innerHTML = "lista Numeros generados" + listaNumeros;
    document.body.appendChild(div);
}

function pares(array) {
    let arrayPares = [];
    for (i = 0; i < array.length ; i++) {
        if ((array[i] % 2) == 0) {
            arrayPares[i] = i;
        }
    }
    return arrayPares;
}