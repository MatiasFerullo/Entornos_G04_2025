<?php
session_start();
include("conexion.php");

if (isset($_POST['mail'])) {
    $mail = $_POST['mail'];

    $mail = mysqli_real_escape_string($conexion, $mail);

    $consulta = "SELECT nombre FROM alumnos WHERE mail = '$mail'";
    $resultado = mysqli_query($conexion, $consulta);

    if (mysqli_num_rows($resultado) == 1) {
        $fila = mysqli_fetch_assoc($resultado);
        $_SESSION['nombre'] = $fila['nombre'];
        echo "<p>Sesión iniciada. <a href='bienvenida.php'>Ir a la bienvenida</a></p>";
    } else {
        echo "<p>El mail no está registrado. <a href='login.php'>Intentar nuevamente</a></p>";
    }
} else {
    echo "<p>No se recibió ningún mail.</p>";
}
?>
