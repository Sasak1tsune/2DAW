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
    const numero = parseFloat(prompt('Ingrese un número:'));
    const resultado = Math.pow(numero, 3);

    alert(`El número ${numero} elevado a la tercera potencia es: ${resultado}`);
  }

  function ejercicioRaizCuadrada() {
    const valor = parseFloat(prompt('Ingrese un valor para calcular la raíz cuadrada:'));
    const raizCuadrada = Math.sqrt(valor);

    alert(`La raíz cuadrada de ${valor} es: ${raizCuadrada}`);
  }