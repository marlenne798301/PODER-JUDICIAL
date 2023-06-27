<?php
session_start();

// Destruir todas las variables de sesión
$_SESSION = array();

// Si se desea destruir la sesión completamente, también se puede utilizar session_destroy()
session_destroy();

// Redirigir al usuario a la página de inicio de sesión
header("Location: login.php");
exit;
?>