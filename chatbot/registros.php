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
// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}
// Consulta a la base de datos
$sql = "SELECT*FROM login";
$result = $conn->query($sql);
// Comprobar si hay resultados
if ($result->num_rows > 0) {
    // Mostrar los datos en una tabla
    echo "<center>";
    echo "<br>";
    echo "<table border=2>";
    echo "<tr>
    <th>Id</th>
    <th>Usuario</th>
    <th>Contraseña</th>
    <th>Acciones </th>
    </tr>";
    while ($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $usuario = $row["usuario"];
        $contraseña = $row["contraseña"];
        echo "<tr>";
        echo "<td>$id</td>";
        echo "<td>$usuario</td>";
        echo "<td>$contraseña</td>";
        echo "<td><a href='modificarR.php?id=$id'>Editar</a> | <a href='eliminarR.php?id=$id'>Eliminar</a></td>";
        echo "</tr>";}
        echo "</tr>";
    echo "</table>"; }
 else {
    echo "No se encontraron resultados.";
}
// Cerrar la conexión
$conn->close();
?>
<br><br>
 <center><a href="agregarR.php"><button class="btn btn-primary px-4">Agregar Usuario</button></a></center>