<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>ChatBot</title>}
    <link href="scss/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="title"> ChatBot Prueba </div>
        <div class="form">
            <div class="bot-inbox inbox">
                 <div class="icon">
                    <i class="fas fa-user"></i>
                 </div>
                    <div class="msg-header">
                <p>Hola, ¿En qué puedo ayudarte?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
        <div class="input-data">
             <input id="data" type="text" placeholder="Escribe algo aquí" required>
             <button id="send-btn">Enviar</button>
             </div>
             </div>
             </div>

             <script>
                $(document).ready(function(){
                    $("#send-btn").on("click",function(){
                        $value=$("#data").val();
                        $msg='<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value + '</p></div></div>';
                   $(".form").append($msg);
                   $("#data").val('');

                   $.ajax({
                    url:'message.php',
                    type:'POST',
                    data:'text='+$value,
                    success: function(result){
                        $replay='<div class="bot-inbox inbox"><div class="icon"><div class="fas fa-user">';
                        $(".form").append($replay);
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                    }
                   });
                    });
                });
             </script>
             </body>
            </html> 