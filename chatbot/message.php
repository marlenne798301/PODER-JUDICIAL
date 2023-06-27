<?php
//conexion a la base de datos
$conn=mysqli_connect("localhost","root","","chatbot") or die ("Database Error");
//recepción del mensaje del cliente a través de ajax
$getMesg=mysqli_real_escape_string($conn,$_POST['text']);
//comprobación de la consulta del usuario a la base de datos
$check_data="SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%'";
$run_query=mysqli_query($conn,$check_data) or die ("Error");
//Si la consulta es correcta, se muestra la respuesta
if(mysqli_num_rows($run_query)>0){
    //recolectando la información de la consulta del usuario
    $fetch_data=mysqli_fetch_assoc($run_query);
    //almacenamiento de la respuesta para el usuario
    $replay=$fetch_data['replies'];
    echo $replay;
}
else{
    echo "Lo sentimos!, no podemos ayudarte con eso, por favor acude a la institución o comunícate vía telefónica";

}
