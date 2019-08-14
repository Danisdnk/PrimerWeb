<?php 
$destino = 'danisdnk@gmail.com'; 
$asunto = 'Consulta desde web'; 
$mensaje = "Nombre: " . $_POST['nombre'] . "<br>"; 
$mensaje .= "E-mail: " . $_POST['mail'] . "<br>";
$mensaje .= "Mensaje: " . $_POST['comentario']; 
$mail_headers  = "MIME-Version: 1.0\r\n";
$mail_headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$mail_headers .= 'From:'. $_POST['mail']."\r\n";
mail($destino,$asunto,$mensaje,$mail_headers); 
header(" Location:index.html");
?>