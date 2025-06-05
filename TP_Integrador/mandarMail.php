<?php
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function mandarMail($sujeto, $mensaje, $destino) {
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
    $mail->Subject = $sujeto;
    $mail->addAddress($destino);
    $mail->Body = $mensaje;

    $mail->send();
}
?>