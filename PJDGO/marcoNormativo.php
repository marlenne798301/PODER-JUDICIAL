<?php
include_once "pjdgo_header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marco Normativo</title>
</head>
<br>
<body>
    <div  class="container">
        <h4 class="ley-federal">Leyes Federales</h4>
        <h4 class="ley-estatal">Leyes Estatales</h4>
    </div>

    <table class="container">

    <tbody class="ley-federal" >

    <tr>
      <th>CÓDIGOS</th>
      <th>DOCUMENTOS</th>
    </tr>

    <tr>
      <td>Código Civil Federal</td>
      <td>
      <a href="../pdf/marcoNormativo/Codigo Civil Federal.pdf" class="dropdown-item"><img width="24" height="24" src="https://img.icons8.com/material-outlined/24/downloading-updates.png" alt="downloading-updates"/></a>
      </td>
    </tr>

    <tr>
      <td>Código Federal de Procedimientos Civiles</td>
      <td>
      <a href="../pdf/marcoNormativo/Codigo Federal de Procedimientos Civiles.pdf" class="dropdown-item"><img width="24" height="24" src="https://img.icons8.com/material-outlined/24/downloading-updates.png" alt="downloading-updates"/></a>
      </td>
    </tr>

    <tr>
      <td>Código Fiscal de la Federación</td>
      <td>Dato 2</td>
    </tr>

    <tr>
      <td>Código Nacional de Procedimientos Penales</td>
      <td>Dato 2</td>
    </tr>

    <tr>
      <td>Código Penal Federal</td>
      <td>Dato 2</td>
    </tr>

    <tr>
      <td>Código de Comercio</td>
      <td>Dato 2</td>
    </tr>

    </tbody>

    </table>

<style>
    <style>
    .container {
      overflow: hidden; /* Para que el contenedor envuelva los encabezados */
    }

    .ley-federal {
      float: left;
    }

    .ley-estatal {
      float: right;
    }

    table {
      border-collapse: collapse;
      margin: 0 auto;
      border-collapse: collapse;
      border-spacing: 0;
      color: #333;
    }
    
    th, td {
      text-align: left;
      border-bottom: 1px solid #ddd;
      padding: 3%;
      border-bottom: 1px solid #ccc;
    }
    
    th {
      background-color: #A1BABD;
      background-color: #A1BABD;
      
}

    tr:hover {
        background-color: #f5f5f5;
        width: 650%;
    }

    .back-to-top {
        position: fixed;
        bottom: 20%;
        right: 20%;
        display: none;
        font-size: 24%;
        color: #fff;
        background-color: #007bff;
        border-radius: 50%;
        padding: 10%;
    }

    .back-to-top:hover {
        background-color: #0069d9;
        width: 650%;
    }



    .custom-btn {
        width: 550%; /* Ajusta el valor según tus necesidades */
        height: 550%;
    }

  </style>
</style>

</body>
</html>
<?php
include_once "footer_pjdgo.php";
?>
