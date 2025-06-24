<!DOCTYPE html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
</head>
<?php
require 'Breadcrumb.php';
function generateHeader($pagActualID, $arbolSitio){
    $breadcrumbs = generarBreadcrumbs($pagActualID, $arbolSitio);
    $breadcrumbHtml = generarBreadcrumbsHTML($breadcrumbs);

    echo '<header class="header-section">
            <div class="container-fluid turquoise">
                <div class="row align-items-center header-content">
                    <!-- Izquierda -->
                    <div class="col-md-1 text-md-start col-12 text-center esconder">
                        <a href="principal.php">
                            <img src="Foto_boo_koo.png" alt="logo del shopping" class="header-logo" style="height: 5rem;"/>
                        </a>
                    </div>

                    <!-- Medio -->
                    <div class="col-md-6 col-12 breadcrumb-section">';
                        echo $breadcrumbHtml;

                        echo '</div>

                        <!-- Right: Text -->
                        <div class="col-md-3 col-12 text-center text-md-end">
                            <a class = "inic-ses" href="inicioSesion.php">
                                <p class="header-text">Iniciar Sesión</p>
                            </a>
                        </div>
                    </div>
                </div>
            </header>';
    }
    ?>