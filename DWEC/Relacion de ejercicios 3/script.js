function ejercicioCuatrimestre() {
    const mesActual = new Date().getMonth() + 1;

    let mensaje;

    if (mesActual >= 1 && mesActual <= 3) {
        mensaje = 'Nos encontramos en el primer cuatrimestre del año.';
    } else if (mesActual >= 4 && mesActual <= 6) {
        mensaje = 'Nos encontramos en el segundo cuatrimestre del año.';
    } else if (mesActual >= 7 && mesActual <= 9) {
        mensaje = 'Nos encontramos en el tercer cuatrimestre del año.';
    } else {
        mensaje = 'Nos encontramos en el cuarto cuatrimestre del año.';
    }

    alert(mensaje);
  }

  function ejercicioPotencia() {
    let numero = parseFloat(prompt('Ingrese un número:'));
    let resultado = Math.pow(numero, 3);

    alert(`El número ${numero} elevado a la tercera potencia es: ${resultado}`);
  }

  function ejercicioRaizCuadrada() {
    let valor = parseFloat(prompt('Ingrese un valor para calcular la raíz cuadrada:'));
    let raizCuadrada = Math.sqrt(valor);

    alert(`La raíz cuadrada de ${valor} es: ${raizCuadrada}`);
  }
  function capturarNombres(insensitivo) {
    let nombres = [];
    let nombre;
    do {
      nombre = prompt("Inserte un nombre, inserte 'Fin' para finalizar");
      if (insensitivo==true && nombre=="fin" || insensitivo==true && nombre=="FIN" ){//En caso de ejecutarse de manera insensitiva acepta la instruccion fin como salida
        nombre="Fin";
      }
      if (nombre!="Fin"){
        nombres.push(nombre);
      }else{
        alert("Programa finalizado");
        alert(nombres);
      }
    } while(nombre!="Fin");
  }