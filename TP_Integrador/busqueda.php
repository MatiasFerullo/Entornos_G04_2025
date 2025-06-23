<?php
    require 'Header.php';
    generateHeader('Busqueda', $arbolSitio);
    require 'busquedaSQL.php';
    /* require 'conexion.php'; */ /* no funciona porque no esta la base de datos */
?>  


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Locales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="container" style="margin-top: 20px;">
        <table class="table table-stripped">
            <thread>
                <tr>
                    <th scope="col">Codigo Local</th>
                    <th scope="col">Nombre Local</th>
                    <th scope="col">Link</th>
                </tr>

                <!-- Agregar codigo php para mostrar los resultados de la busqueda -->
                
            </thread>
        </table>
    </div>

</body>
</html>