<?php
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
// Server settings
$mail->isSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPAuth   = true;
$mail->Username   = 'servereg419@gmail.com';
$mail->Password   = 'sovt zdnm puvj hteo';  
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port       = 587;
$mail->isHTML(true); 
$mail->CharSet = 'UTF-8';
$mail->Subject = 'Consulta';
$mail->addAddress('servereg419@gmail.com');

if (isset($_POST['botonEnviar'])) {
    // Process your PHP code here
    $consulta = $_POST['consulta'];
    $mailConsulta = $_POST['email'];       
    session_start();
    $_SESSION['consulta'] = $consulta;
    $_SESSION['mailConsulta'] = $mailConsulta;

    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

session_start();
$consulta = isset($_SESSION['consulta']) ? $_SESSION['consulta'] : '';
$mailConsulta = isset($_SESSION['mailConsulta']) ? $_SESSION['mailConsulta'] : '';
?>


<!DOCTYPE html>
<html lang="es">
<link rel="stylesheet" href="formulario_css.css">
<form method="POST" action="">
    <label for="email">Ingrese su mail:</label>
    <input type="email" id="email" name="email">
    <br/>
    <label>Consulta: <input type="text" id="consulta" name="consulta" required/></label><br />
    <input type="submit" id="botonEnviar" name="botonEnviar" value="Enviar" />
    <?php 
        if ($consulta) {
            echo "Boton activado.";
            $mail->Body = $consulta. '<br />' .
            'Email: ' . $mailConsulta . '<br />' .
            '<p>Este es un mensaje de prueba enviado desde un formulario.</p>';
            $mail->send();
            unset($_SESSION['consulta']); 
        }
    ?>
</form>
