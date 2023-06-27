<?php
// conectando a la base de datos
$conn = mysqli_connect("localhost", "root", "", "chatbot") or die("Database Error");
// Verificar si hay algún error en la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
// Verificar si se ha enviado un ID de registro para eliminar
if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Consulta SQL para eliminar el registro
    $sql = "DELETE FROM login WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "Registro eliminado exitosamente.";
    } else {
        echo "Error al eliminar el registro: " . $conn->error;
    }
    header("Location: registros.php");
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
