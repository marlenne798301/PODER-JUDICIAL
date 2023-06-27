<?php
session_start(); // Inicia la sesión al principio del archivo

include_once('php/conexion.php');

if (isset($_SESSION['user']) && isset($_SESSION['pwd'])) {
  // Si ya hay una sesión iniciada, redirige al panel de control o a la página que corresponda
  header("Location: panel.php");
  exit();
}

// Variable para almacenar el estado del inicio de sesión
$login = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $us = $_POST['usuario'];
  $ps = $_POST['contraseña'];
  
  // Utiliza sentencias preparadas para evitar ataques de inyección SQL
  $sql = "SELECT id FROM login WHERE usuario = ? AND contraseña = ?";
  $stmt = $con->prepare($sql);
  $stmt->bind_param("ss", $us, $ps);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $login = true;
    $_SESSION['user'] = $us;
    $_SESSION['pwd'] = $ps;
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" href="http://pjdgo.gob.mx/wp-content/uploads/2023/05/Logo-PJDGO-2022.png" sizes="192x192">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-material-ui/material-ui.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="fonts/icomoon/style.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">
  <title>Iniciar Sesión</title>
</head>

<body>

  <div class="d-lg-flex half ">
    <div class="contents ">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 bg-white m-3 px-5 py-5 rounded shadow">
            <h3 class="text-center mb-2">Iniciar sesión en <strong>Poder Judicial de Durango</strong></h3>
            <p class="text-justify mt-3">Bienvenido al sistema de administración del Poder Judicial del Estado de Durango, favor de ingresar sus credenciales de acceso </p>
            <a class="mx-2" onclick="mensaje1()" style="cursor: pointer; text-decoration: underline;">¿No eres administrador?</a>
            <form method="post">
              <div class="form-group first" title="Ingresa tu nombre de usuario registrado">
                <label for="usuario">Ingrese su nombre de usuario</label>
                <input type="text" class="form-control" name="usuario" placeholder="nombre de usuario" id="username" required autofocus>
              </div>
              <div class="form-group last mb-3" title="Ingresa tu contraseña">
                <label for="contraseña">Ingrese su contraseña</label>
                <input type="password" class="form-control" name="contraseña" placeholder="contraseña" id="password" required>
              </div>

              <div class="d-flex mb-2 align-items-center">
                <span class="ml-auto"><a href="#" class="forgot-pass" title="Solo personal autorizado">¿Olvidaste tu contraseña?</a></span>
              </div>
              <div class="d-flex mb-5 align-items-center">
                <span class="ml-auto"><a href="#" onclick="mensaje1()" class="forgot-pass" title="Regresar al inicio">Regresar a la página principal</a></span>
              </div>
              <button class="btn btn-block btn-secondary" type="submit">Ingresar</button>
            </form>
            <div class="col text-center">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>
    function mensaje1() {
      Swal.fire({
        title: 'Serás redirigido a la página principal PJDGO!',
        html: 'Necesitas permisos de administrador para acceder a este contenido',
        timer: 2000,
        timerProgressBar: true,
        didOpen: () => {
          Swal.showLoading();
        },
        willClose: () => {
          window.open('../../inicio/index.php','_self');
        }
      });
    }

    <?php if ($login) { ?>
    Swal.fire({
      position: 'center',
      icon: 'success',
      title: 'Bienvenido <?php echo $_SESSION['user']; ?>',
      text: 'Al sistema de gestión PJDGO...',
      showConfirmButton: true
    }).then(function() {
      location.href = 'panel.php';
    });
    <?php } elseif (!$login && $_SERVER["REQUEST_METHOD"] == "POST") { ?>
    Swal.fire({
      position: 'center',
      icon: 'error',
      title: 'Usuario y contraseña incorrectos',
      text: 'Favor de verificar para ingresar al sistema...',
      showConfirmButton: false,
      timer: 3000
    }).then(function() {
      location.href = 'login.php';
    });
    <?php } ?>
  </script>
</body>
</html>