<?php

$estilos_disponibles = ['claro', 'oscuro', 'moderno'];


if (isset($_POST['estilo']) && in_array($_POST['estilo'], $estilos_disponibles)) {
    $estilo_seleccionado = $_POST['estilo'];
  
    setcookie('estilo', $estilo_seleccionado, time() + (30 * 24 * 60 * 60));
} elseif (isset($_COOKIE['estilo']) && in_array($_COOKIE['estilo'], $estilos_disponibles)) {
    $estilo_seleccionado = $_COOKIE['estilo'];
} else {
    $estilo_seleccionado = 'claro'; 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Selector de Estilo</title>
    <link rel="stylesheet" href="estilos/<?php echo $estilo_seleccionado; ?>.css">
</head>
<body>
    <h1>Bienvenido a la página con estilo "<?php echo ucfirst($estilo_seleccionado); ?>"</h1>
    
    <form method="post">
        <label for="estilo">Elige un estilo:</label>
        <select name="estilo" id="estilo">
            <?php foreach ($estilos_disponibles as $estilo): ?>
                <option value="<?php echo $estilo; ?>" <?php if ($estilo == $estilo_seleccionado) echo 'selected'; ?>>
                    <?php echo ucfirst($estilo); ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Guardar estilo</button>
    </form>

    <p>Tu elección se recordará durante 30 días.</p>
</body>
</html>
