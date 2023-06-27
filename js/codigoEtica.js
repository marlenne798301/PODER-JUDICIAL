  // Inicializa el plugin turn.js
  $('#codigo').turn({gradients: true, acceleration: true});

  // Configuración de la velocidad del carrusel
  var velocidadCarrusel = 30000; // 30 segundos

  // Obtiene el número total de páginas
  var numeroPaginas = $('#codigo > div').length;

  // Inicializa el índice de página actual
  var paginaActual = 0;

  // Función para pasar a la siguiente página del carrusel
  function pasarSiguiente() {
      if (paginaActual < numeroPaginas - 1) {
          $('#codigo').turn('next');
          paginaActual++;
      } else {
          $('#codigo').turn('page', 1);
          paginaActual = 0;
      }
  }

  // Función para pasar a la página anterior del carrusel
  function pasarAnterior() {
      if (paginaActual > 0) {
          $('#codigo').turn('previous');
          paginaActual--;
      } else {
          $('#codigo').turn('page', numeroPaginas);
          paginaActual = numeroPaginas - 1;
      }
  }

  // Inicia el carrusel automáticamente
  var intervaloCarrusel = setInterval(pasarSiguiente, velocidadCarrusel);

  // Detiene el carrusel al hacer hover sobre él
  $('#codigo').hover(function() {
      clearInterval(intervaloCarrusel);
  }, function() {
      intervaloCarrusel = setInterval(pasarSiguiente, velocidadCarrusel);
  });

  