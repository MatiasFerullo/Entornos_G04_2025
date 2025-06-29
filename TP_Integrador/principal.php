<?php
    require 'Header.php';
    generateHeader('Pagina Principal', $arbolSitio);
    require 'Footer.php';
    require 'busquedaSQL.php';
    //require 'conexion.php'
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
    <div id="CarruselNovedades" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Foto_boo_koo.png" class="d-block w-20" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Este es la primera slide!!!</h5>
                    <p>Esto es texto representativo de lo que estas viendo</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="Foto_boo_koo.png" class="d-block w-20" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Este es la segunda slide!!!</h5>
                    <p>Esto es texto representativo de lo que estas viendo</p>
                </div>
            </div>
            
            <div class="carousel-item">
                <img src="Foto_boo_koo.png" class="d-block w-20" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Este es la tercera slide!!!</h5>
                    <p>Esto es texto representativo de lo que estas viendo</p>
                </div>
            </div>
        </div>

        <!-- Controles del carrusel, preferible no tocar -->
        <button class="carousel-control-prev" type="button" data-bs-target="#CarruselNovedades" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#CarruselNovedades" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <?php generateFooter(); ?>
</body>
</html>