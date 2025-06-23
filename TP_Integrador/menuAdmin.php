<?php
    require 'Header.php';
    generateHeader('Menu Administrador', $arbolSitio);
    require 'busquedaSQL.php';
    /* require 'conexion.php'; */ /* no funciona porque no esta la base de datos */
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="d-grid gap-2">
        <button class="btn btn-primary" type="button">Peticiones de Descuentos</button>
        <button class="btn btn-primary" type="button">Locales</button>
        <button class="btn btn-primary" type="button">Gestion Dueños</button>
        <button class="btn btn-primary" type="button">Reportes de Descuentos</button>
        <button class="btn btn-primary" type="button">Gestion Novedades</button>
    </div>
</body>
</html>