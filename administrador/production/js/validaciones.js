document.getElementById("demo-form2").addEventListener("submit", function(event) {
    var password = document.getElementById("password").value;
    var passwordError = document.getElementById("passwordError");
    
    // Expresión regular para verificar la contraseña
    var passwordRegex = /^(?=.*[A-Z])(?=.*\d).{8,16}$/;
    
    if (!passwordRegex.test(password)) {
      passwordError.textContent = "La contraseña debe tener entre 8 y 16 caracteres y contener al menos una mayúscula y un número";
      event.preventDefault(); // Evitar enviar el formulario
    } else {
      passwordError.textContent = ""; // Limpiar el mensaje de error
    }
  });
  