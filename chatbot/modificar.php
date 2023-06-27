<?php
// conección a la base de datos
$conn = mysqli_connect("localhost", "root", "", "chatbot") or die("Database Error");
// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);}
// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $id1 = $_POST["id"];
    $queries = $_POST["queries"];
    $replies = $_POST["replies"];
    // Consulta para actualizar el registro en la base de datos
    $sql = "UPDATE chatbot SET queries='$queries', replies='$replies' WHERE id='$id1'";
    if ($conn->query($sql) === TRUE) {
        echo "Registro actualizado correctamente.";
    } else {
        echo "Error al actualizar el registro: " . $conn->error;}}
// Obtener el registro existente para mostrar en el formulario
$id1 = isset($_GET["id"]) ? $_GET["id"] : "";
$sql = "SELECT queries, replies FROM chatbot WHERE id='$id1'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
// Cerrar la conexión
$conn->close();?>
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
    <h2>Modificar Registro</h2>
    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <input type="hidden" name="id" value="<?php echo $id1; ?>">
    Pregunta <input type="text" name="queries" value="<?php echo $row["queries"]; ?>"><br><br>
    Respuesta <input type="text" name="replies" value="<?php echo $row["replies"]; ?>"><br><br>
  <button >Actualizar</button>
    </form>
</body>
</html>
