<?php

$nombre = $_POST['name'];
$email = $_POST['email'];
$llamarpor = $_POST['llamarpor'];
$whatsapp = $_POST['whatsapp'];
$horario = $_POST['horario'];
$message = $_POST['message'];


// Como me va a llegar el mail
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Su whatsapp es: " . $whatsapp . "\r\n";
$mensaje .= "Contactar por : " . $llamarpor . " \r\n";
$mensaje .= "Franja : " . $horario . " \r\n";
$mensaje .= "Su mensaje : " . $_POST['message'] . " \r\n";
$mensaje .= "Enviado el ". date('d/m/Y', time());



$para = 'marturanga@gmail.com';
$asunto = 'Futuro alumno DeROSE Palermo';


mail($para, $asunto, utf8_decode($mensaje), $header);


header('Location: pages/exito.html');

?>