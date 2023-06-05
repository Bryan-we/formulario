<?php
   //A este correo se enviará el mensaje
   $nombre = $_POST['nombre'];
   $mail = $_POST['email'];
   $asunto = $_POST['asunto'];
   $mensaje = $_POST['mensaje'];

   $header .= "Content-Type: text/plain";

   $mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
   $mensaje .= "Su e-mail es: " . $mail . " \r\n";
   $mensaje .= "El asusnto es: " . $asunto . " \r\n";
   $mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
   $mensaje .= "Enviado el " . date('d/m/Y', time());

   $para = 'bryanpenafiel1997@gmail.com';
   $asunto = 'Mensaje de mi sitio web';

   mail($para, $asunto, utf8_decode($mensaje), $header);

   header('Location:index.html');
?>
