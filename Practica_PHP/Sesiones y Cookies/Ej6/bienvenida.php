<?php
session_start();

if (isset($_SESSION['nombre'])) {
    echo "<h1>Bienvenido, " . $_SESSION['nombre'] . ".</h1>";
} else {
    echo "<p>No tienes permiso para acceder a esta página.</p>";
    echo '<p><a href="login.php">Volver al formulario</a></p>';
}
?>
