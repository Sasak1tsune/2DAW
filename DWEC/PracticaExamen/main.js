var fecha = new Date();
var usuario={
    usuario: "alumno",
    contrasenha: "bueno"
};
var ventana1, ventana2, ventana3, ventana4;
function abrirVentana(num) {
    switch (num) {
        case 1:
            ventana1 = window.open("", "Ventana1", "width=300, height=300");
            ventana1.verificar = function() {
                var usuarioVentana1 = ventana1.document.getElementById("usuario").value;
                var contrasenhaVentana1 = ventana1.document.getElementById("contrasenha").value;
                var nContrasenhaVentana1 = ventana1.document.getElementById("nContrasenha").value;
                if (usuarioVentana1==usuario.usuario && contrasenhaVentana1==usuario.contrasenha){
                    alert("Datos correctos, ¿Deseas cambiar la contraseña?");
                    usuario.contrasenha = nContrasenhaVentana1;
                    fecha = new Date();
                }else{
                    alert("Datos incorrectos ¿Quieres intentarlo de nuevo?");
                }
            
            }
            ventana1.document.write('<form id="formulario"><label for="usuario">Usuario</label><input type="text" name="usuario" id="usuario"><br><label for="contrasenha">Contraseña</label><input type="text" name="contrasenha" id="contrasenha"><br><label for="nContrasenha">Nueva Contraseña</label><input type="text" name="nContrasenha" id="nContrasenha"></form><br><button onclick="verificar()">Verificar</button>')
            ventana1.document.body.style.backgroundColor = "lightgreen";
            break;
        case 2:
            ventana2 = window.open("", "Ventana2", "width=300, height=300 , left=1920");
            var longitudLista = document.getElementById("longitudList").value;
            var numValoresAleatorios = document.getElementById("numValoresAleatorio").value;
            var numerosAleatorios= generarAleatorios(numValoresAleatorios);
            var listaGenerada = generarLista(longitudLista);
            ventana2.document.write("Numeros aleatorios:"+numerosAleatorios+"<br>"+"Lista a representar:"+listaGenerada);
            ventana2.document.body.style.backgroundColor = "lightblue";
            break;
        case 3:
            ventana3 = window.open("", "Ventana3", "width=300, height=300 , top=1080");
            ventana3.document.write(impares(numerosAleatorios));
            ventana3.document.body.style.backgroundColor = "pink";
            break;
        case 4:
            ventana4 = window.open("", "Ventana4", "width=300, height=300 , left=1920, top=1080");
            var contrasenhaActual = usuario.contrasenha;
            ventana4.document.write('contraseña:'+contrasenhaActual+'<br>'+fecha);
            ventana4.document.body.style.backgroundColor = "orange";
            break;
    }
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
        case 4:
            ventana4.window.close();
            break;
    }
}
function generarAleatorios(n){
    let numerosGenerados= [];
    for(i=0; i<n; i++){
        var numeroAleatorio = Math.floor(Math.random() * 101);//numero random entre 0 y 100
        numerosGenerados[i]= numeroAleatorio
    }
    return numerosGenerados;
   
}
function generarLista(n){
    let numerosGenerados = [];
    for (i=1; i!=n; i++){
        numerosGenerados[i]=i;
    }
    return numerosGenerados;
}
function impares(array){
    let arrayImpares=[];
    for(i=0;i<array.length; i++){
        if ((array[i]%2)!=0){
            arrayImpares[i]=i
        }
    }
    return impares
}
//objeto.document.getElementById("contrasenha").value; conseguir algo de un id
//ventana1.document.write('');escribir en la pagina
//ventana2 = window.open("", "Ventana2", "width=300, height=300 , left=1920");Crear ventana
//ventana2.document.body.style.backgroundColor = "lightblue";Modificar estilos de pagina
