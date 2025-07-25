<?php
session_start();

// Verificar si las variables existen
if (isset($_SESSION['usuario']) && isset($_SESSION['clave'])) {
    echo "<h1>Datos de sesión</h1>";
    echo "<p>Usuario: " . $_SESSION['usuario'] . "</p>";
    echo "<p>Clave: " . $_SESSION['clave'] . "</p>";
} else {
    echo "<p>No hay datos de sesión disponibles.</p>";
    echo '<p><a href="login.php">Ir al formulario</a></p>';
}
?>
