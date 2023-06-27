<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Poder Judicial</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet"> 
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<?php
// conectando a la base de datos
$conn = mysqli_connect("localhost", "root", "", "chatbot") or die("Database Error");
// Verificar si hay algún error en la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    // Consulta SQL para insertar el registro
    $sql = "INSERT INTO login (usuario, contraseña) VALUES ('$usuario', '$contraseña')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registro agregado exitosamente.";
    } else {
        echo "Error al agregar el registro: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
    <h2>Agregar Usuario</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required><br><br>
        
        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contraseña" id="contraseña" required><br><br>

        <!-- Agrega más campos del formulario si es necesario -->
    <br><br>
    
    </form>
    <center><button class="btn btn-primary px-4"><a href="registros.php">Agregar Usuario</a></button></center>
</body>
</html>
