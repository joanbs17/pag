<?php

$destino = "joansolano80@gmail.com";
//Esto es al correo que se enviarÃ¡ el mensaje

$nombre = $_POST['nombre']; 
$email = $_POST['email'];
$asunt = $_POST['asunto'];


$header = "Enviado desde formulario de contacto en localhost";
$mensajeCompleto = "\n Nombre: " . $nombre . "\n" . "Email: " . $email . "\n". $asunt;
mail($destino, $asunt,$mensajeCompleto, $header);
header('Location: index.html');

