<?php
   $nombre = $_POST["nombre"];
   $email = $_POST["email"];
   $comentario = $_POST["consulta"];

   $para = 'administracion@empresa.com.ar';
   $asunto = 'Consulta desde la Web';
   $cuerpo = 'El usuario ' . $nombre . ' tiene la siguiente consulta ' . $comentario . ' - Responder a ' . $email;

   $headers  = "MIME-Version: 1.0" . "\r\n";
   $headers .= 'From: Administracion <administracion@empresa.com.ar>' . "\r\n";
   $headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";

   // echo($cuerpo);

   mail($para, $asunto, $cuerpo, $headers);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias</title>
</head>
<body>
    <h1>Gracias</h1>
</body>
</html>