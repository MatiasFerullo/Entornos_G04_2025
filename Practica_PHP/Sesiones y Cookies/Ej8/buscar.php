<?php
include('conexion.php');

if (isset($_GET['query'])) {
    $query = mysqli_real_escape_string($conexion, $_GET['query']);

    $sql = "SELECT canciones FROM buscador WHERE canciones LIKE '%$query%'";
    $resultado = mysqli_query($conexion, $sql);
    ?>
    
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Resultados</title>
    </head>
    <body>
        <h1>Resultados de búsqueda</h1>

        <?php if (mysqli_num_rows($resultado) > 0): ?>
            <ul>
                <?php while ($fila = mysqli_fetch_assoc($resultado)): ?>
                    <li><?php echo $fila['canciones']; ?></li>
                <?php endwhile; ?>
            </ul>
        <?php else: ?>
            <p>No se encontraron canciones que coincidan.</p>
        <?php endif; ?>

        <p><a href="index.php">Volver al buscador</a></p>
    </body>
    </html>

<?php
} else {
    echo "Parámetro de búsqueda no válido.";
}
?>
