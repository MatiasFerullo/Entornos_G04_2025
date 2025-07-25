<?php
$host = "localhost";
$usuario = "root";       
$clave = "host123";             
$bd = "base2";

$conexion = mysqli_connect($host, $usuario, $clave, $bd);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
