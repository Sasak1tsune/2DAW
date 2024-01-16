function comprobarNota(){
    var nota;
    var contador=0;
    while (contador<4){
    prompt("Inserte su nota", nota)
    if (nota<10 || nota>0 && nota.isDigit()){
        alert("Nota correcta");
    } else {
        alert("Nota no valida");
    }
    contador++;
}
}
function mostrarNota(nota){
    if (nota>=5){
        alert("Aprobado");
    }else{
        alert("Reprobado");
    }
}
