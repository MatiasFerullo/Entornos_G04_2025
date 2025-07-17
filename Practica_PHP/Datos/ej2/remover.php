<?php
$link = mysqli_connect("localhost", "root", "", "Capitales") or die("Error de conexión: " . mysqli_error($link));
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $sql = "DELETE FROM Ciudades WHERE id=$id";
    mysqli_query($link, $sql) or die("Error al eliminar: " . mysqli_error($link));
}
header("Location: listar.php");
exit;
?>
