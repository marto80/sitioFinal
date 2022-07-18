<?php

$destinatario = 'marturanga@gmail.com';

$nombre = $_POST['name'];
$mail = $_POST['email'];
$whatsapp = $_POST['whatsapp'];
$horario = $_POST['horario'];
$llamarpor = $_POST['llamarpor'];
$message = $_POST['message'];

$header = 'Datos del interesado - contacto';
$asunto = 'Futuro alumno DeROSE Palermo';

$mensaje = "Nombre: " . $nombre . "\r\n";
$mensaje .="mail: " . $mail . "\r\n";
$mensaje .="Wap: " . $whatsapp . "\r\n";
$mensaje .="Contactar por: " . $llamarpor . "\r\n";
$mensaje .="Franja horaria para contactar: " . $horario . "\r\n";
$mensaje .="Mensaje: " . $message . "\r\n";


mail($destinatario, $asunto, $mensaje, $header);

header ('Location: pages/exito.html');
?>