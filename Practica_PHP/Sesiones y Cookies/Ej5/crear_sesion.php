<?php
session_start();

if (isset($_POST['usuario']) && isset($_POST['clave'])) {
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['clave'] = $_POST['clave'];
    echo "<p>Sesión creada correctamente.</p>";
    echo '<p><a href="ver_sesion.php">Ver datos de sesión</a></p>';
} else {
    echo "<p>Debes completar el formulario primero.</p>";
    echo '<p><a href="login.php">Volver al formulario</a></p>';
}
?>
