<?php
$para      = 'hjoseignacio@hotmail.com';
$titulo    = 'El título';
$mensaje   = 'Hola';
$cabeceras = 'From: hjoseignacio@hotmail.com' . "\r\n" .
    'Reply-To: hjoseignacio@hotmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>