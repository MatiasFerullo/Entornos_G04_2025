<?php

if (isset($_COOKIE['contador'])) {
    $contador = $_COOKIE['contador'] + 1;
    $mensaje = "Has visitado esta página $contador veces.";
} else {
    $contador = 1;
    $mensaje = "¡Bienvenido! Es tu primera visita a esta página.";
}


setcookie('contador', $contador, time() + (365 * 24 * 60 * 60)); 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Contador de visitas</title>
</head>
<body>
    <h1><?php echo $mensaje; ?></h1>
</body>
</html>
