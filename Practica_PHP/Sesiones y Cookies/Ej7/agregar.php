<?php
session_start();
include('conexion.php');

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $query = "SELECT * FROM catalogo WHERE id = $id";
    $resultado = mysqli_query($conexion, $query);

    if ($producto = mysqli_fetch_assoc($resultado)) {
        $_SESSION['carrito'][$id] = $producto;
    }
}

header("Location: catalogo.php");
exit;
