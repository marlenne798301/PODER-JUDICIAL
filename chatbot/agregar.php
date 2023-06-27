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
    $queries = $_POST["queries"];
    $replies = $_POST["replies"];
    
    // Consulta SQL para insertar el registro
    $sql = "INSERT INTO chatbot (queries, replies) VALUES ('$queries', '$replies')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registro agregado exitosamente.";
    } else {
        echo "Error al agregar el registro: " . $conn->error;
    }
}
header("Location: preguntas.php");
// Cerrar la conexión a la base de datos
$conn->close();
?>
    <h2>Agregar Registro</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="queries">Pregunta:</label>
        <input type="text" name="queries" id="queries" required><br><br>
        <label for="replies">Respuesta:</label>
        <input type="text" name="replies" id="replies" required><br><br>
        <!-- Agrega más campos del formulario si es necesario -->
    <br><br>
    </form>
    <center><a href=".php"><button class="btn btn-primary px-4">Agregar Registro</button></a></center>
</body>
</html>
