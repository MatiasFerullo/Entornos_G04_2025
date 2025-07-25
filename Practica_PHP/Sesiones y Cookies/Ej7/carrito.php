<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mi Carrito</title>
</head>
<body>
    <h1>Carrito de Compras</h1>

    <?php if (!empty($_SESSION['carrito'])): ?>
        <table border="1" cellpadding="10">
            <tr>
                <th>Producto</th>
                <th>Precio</th>
            </tr>
            <?php 
            $total = 0;
            foreach ($_SESSION['carrito'] as $producto): 
                $total += $producto['precio'];
            ?>
            <tr>
                <td><?php echo $producto['producto']; ?></td>
                <td>$<?php echo number_format($producto['precio'], 2); ?></td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>$<?php echo number_format($total, 2); ?></strong></td>
            </tr>
        </table>
    <?php else: ?>
        <p>Tu carrito está vacío.</p>
    <?php endif; ?>

    <p><a href="catalogo.php">Volver al catálogo</a></p>
</body>
</html>
