<?php
// conección a la base de datos
$conn = mysqli_connect("localhost", "root", "", "chatbot") or die("Database Error");
// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $id = $_POST["id"];
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];
    // Consulta para actualizar el registro en la base de datos
    $sql = "UPDATE login SET usuario='$usuario', contraseña='$contraseña' WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente.";
    } else {
        echo "Error al actualizar el registro: " . $conn->error;}
}
// Obtener el registro existente para mostrar en el formulario
$id = isset($_GET["id"]) ? $_GET["id"] : "";
$sql = "SELECT usuario, contraseña FROM login WHERE id='$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
// Cerrar la conexión
$conn->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Poder Judicial</title>
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
    <h2>Actualizar Usuario</h2>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Usuario: <input type="text" name="usuario" value="<?php echo $row["usuario"]; ?>"><br><br>
        Contraseña: <input type="text" name="contraseña" value="<?php echo $row["contraseña"]; ?>"><br><br>
        <center><button class="btn btn-primary px-4"><a href="registros.php">Actualizar</a></button></center>
    </form>
</body>
</html>
