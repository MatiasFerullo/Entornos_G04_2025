<?php
session_start();
include('conexion.php');

$resultado = mysqli_query($conexion, "SELECT * FROM catalogo");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Productos</title>
</head>
<body>
    <h1>Catálogo de Productos</h1>
    <table border="1" cellpadding="10">
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Agregar</th>
        </tr>
        <?php while ($fila = mysqli_fetch_assoc($resultado)): ?>
        <tr>
            <td><?php echo $fila['producto']; ?></td>
            <td>$<?php echo number_format($fila['precio'], 2); ?></td>
            <td>
                <form action="agregar.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">
                    <button type="submit">Agregar al carrito</button>
                </form>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>

    <p><a href="carrito.php">Ver carrito</a></p>
</body>
</html>
