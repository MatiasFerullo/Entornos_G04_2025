<?php
if (isset($_POST['nombre_usuario'])) {
    $nombre_usuario = trim($_POST['nombre_usuario']);

    setcookie('usuario', $nombre_usuario, time() + (30 * 24 * 60 * 60));
} elseif (isset($_COOKIE['usuario'])) {
    $nombre_usuario = $_COOKIE['usuario'];
} else {
    $nombre_usuario = '';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario con Cookie de Usuario</title>
</head>
<body>
    <h1>Formulario de Usuario</h1>

    <?php if (!empty($nombre_usuario)): ?>
        <p>Último nombre ingresado: <strong><?php echo $nombre_usuario; ?></strong></p>
    <?php endif; ?>

    <form method="post" action="">
        <label for="nombre_usuario">Nombre de usuario:</label>
        <input type="text" id="nombre_usuario" name="nombre_usuario" value="<?php echo $nombre_usuario; ?>">
        <button type="submit">Guardar nombre</button>
    </form>
</body>
</html>
