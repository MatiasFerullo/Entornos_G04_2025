<?php
require 'Header.php';
generateHeader('menuDueno', $arbolSitio);
echo 'Menú Dueño Locales';
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
        <button class="btn btn-primary" type="button">Repsortes de Descuentos</button>
        <button class="btn btn-primary" type="button">Crear Promocion</button>
    </div>
</body>
</html>