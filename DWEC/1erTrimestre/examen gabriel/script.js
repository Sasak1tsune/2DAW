var window1;
var window2;
var window3;
var window4;
var usuario = {
    nombre: "alumno",
    contrasenha: "bueno",
    confirmarContrasenha: function() {
        let ingresoContrasenha = document.getElementById("contrasenhaIntento").value;
        if (ingresoContrasenha === this.contrasenha) {
            alert("Usuario autentificado!");
        } else {
            alert("Alumno no válido!");
        }
    }
};


// Llamar al método del objeto
usuario.confirmarContrasenha();

function crearVentana1(cerrar) {
    window1 = window.open("", "Ventana1", "width=300,height=300");
    window1.moveTo(0, 0);
    var usuario1 = Object.create(usuario); // Crear una instancia del objeto usuario
    window1.document.write("<input type='text' placeholder='Nombre de usuario' id='nombre'><br><input type='password' placeholder='Contraseña' id='contrasenhaIntento'><br><input type='password' placeholder='Nueva contraseña' id='nuevaContrasenha'><br><button onclick='usuario1.confirmarContrasenha()'>Ingresar</button>");
    window1.document.bgColor = "lightgreen";
    if (cerrar) {
        window1.close();
    }
}

function crearVentana2(cerrar) {
    window2 = window.open("", "Ventana2", "width=300,height=300");
    window2.moveTo(1920, 0);
    window2.document.bgColor = "cyan";

    if (cerrar) {
        window2.close();
    }
    //por tiempo no puedo hacerlo, para ordenarlos usas el sort, haces un for que recorra el array, y un if que los vaya asignando a otros arrays con el metodo push, comprendidos e incomprendidos
}

function crearVentana3(cerrar) {
    window3 = window.open("", "Ventana3", "width=300,height=300");
    window3.document.bgColor = "pink";
    window3.moveTo(1920, 1920);
    
    if (cerrar) {
        window3.close();
    }
}

function crearVentana4(cerrar){/*En la ventana 4 debes mostrar la contraseña vigente del usuario así como la fecha
y hora de la ultima vez que se introdujo.*/
    window4 = window.open("", "Ventana4", "width=300,height=300");
    window4.document.bgColor = "orange";
    window4.moveTo("0","1920");
    if (cerrar){
        window4.close();
    }
}
