function toggleTabla(tablaId) {
  var tabla = document.getElementById(tablaId);
  var contenido = tabla.querySelector('.tabla-contenido');
  contenido.style.display = (contenido.style.display === 'none') ? 'block' : 'none';
}