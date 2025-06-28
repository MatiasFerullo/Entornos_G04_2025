<?php
    require 'Header.php';
    generateHeader('Alta Locales', $arbolSitio);
    require 'Footer.php';
    require 'busquedaSQL.php';
?>  

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Alta de Locales</h1>
        <form>
            <div class="form-group">
                <label for="nombreLocal" class="form-label">Nombre del Local</label>
                <input type="text" class="form-control" id="nombreLocal" name="nombreLocal" required>
            </div>
            <div class="form-group">
                <label for="ubicacionLocal" class="form-label">Ubicacion</label>
                <input type="text" class="form-control" id="ubicacionLocal" name="ubicacionLocal" required>
            </div>
            <div class="form-group">
                <label for="rubroLocal" class="form-label">Rubro</label>
                <input type="text" class="form-control" id="rubroLocal" name="rubroLocal" required>
            </div>
            <div class="form-group">
                <label for="codigoDueño" class="form-label">Codigo del Dueño</label>
                <input type="text" class="form-control" id="codigoDueño" name="codigoDueño" required>
            </div>
        </form>
    </div>
</body>
</html>