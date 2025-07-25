<?php

$tipos = ['politica', 'economia', 'deporte'];

if (isset($_POST['tipo']) && in_array($_POST['tipo'], $tipos)) {
    
    setcookie('tipo_titular', $_POST['tipo'], time() + (7 * 24 * 60 * 60));
    $tipo_seleccionado = $_POST['tipo'];
} elseif (isset($_COOKIE['tipo_titular']) && in_array($_COOKIE['tipo_titular'], $tipos)) {
    $tipo_seleccionado = $_COOKIE['tipo_titular'];
} else {
    $tipo_seleccionado = 'todos';
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Periódico Online</title>
</head>
<body>
    <h1>Diario Digital - Titulares</h1>

    <form method="post">
        <p>Selecciona el tipo de titular que deseas ver:</p>
        <label><input type="radio" name="tipo" value="politica" <?php if ($tipo_seleccionado === 'politica') echo 'checked'; ?>> Política</label><br>
        <label><input type="radio" name="tipo" value="economia" <?php if ($tipo_seleccionado === 'economia') echo 'checked'; ?>> Economía</label><br>
        <label><input type="radio" name="tipo" value="deporte" <?php if ($tipo_seleccionado === 'deporte') echo 'checked'; ?>> Deporte</label><br>
        <button type="submit">Guardar preferencia</button>
    </form>

    <hr>

    <?php
    
    function mostrar_titular($categoria, $texto) {
        echo "<h2>[$categoria] $texto</h2>";
    }

    
    if ($tipo_seleccionado === 'politica' || $tipo_seleccionado === 'todos') {
        mostrar_titular('Política', 'El Senado aprueba nueva reforma constitucional.');
    }
    if ($tipo_seleccionado === 'economia' || $tipo_seleccionado === 'todos') {
        mostrar_titular('Economía', 'La inflación cae por tercer mes consecutivo.');
    }
    if ($tipo_seleccionado === 'deporte' || $tipo_seleccionado === 'todos') {
        mostrar_titular('Deporte', 'El equipo nacional clasifica a la final.');
    }
    ?>

    <hr>
    <p><a href="borrar_cookie.php">Borrar preferencia de titular</a></p>
</body>
</html>
