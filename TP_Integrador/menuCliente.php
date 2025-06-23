<?php
require 'Header.php';
generateHeader('menuCliente', $arbolSitio);
echo 'Menú Cliente';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="text-align: center;">
        <h1>Menú Cliente</h1> <br>
        <h3>Tipo Cliente</h3>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Descuento</th>
                <th scope="col">Estado</th>
            </tr>
        </thead>
        <tbody>
            <!-- LLenar usando php -->
        </tbody>
    </table>
</body>
</html>