<?php
    require 'Header.php';
    generateHeader('Alta Promocion', $arbolSitio);
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
    <div class="container">
        <form>
            <div class="form group">
                <label for="fechaInicio">Fecha inicio de promocion</label>
                <input type="date" id="fechaInicio" name="fechaInicio">
                <label for="fechaFin">Fecha fin de promocion</label>
                <input type="date" id="fechaFin" name="fechaFin">
            </div>
            <h3>Dias en los que esta vigente la promocion</h3>
            <div class="form check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                <label class="form-check-label" for="defaultCheck1">
                    Todos
                </label>
            </div>
            <div class="container">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="diasPromocion" id="diasPromocion" value="lunes">
                    <label class="form-check-label" for="diasPromocion">Lunes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="diasPromocion" id="diasPromocion" value="martes">
                    <label class="form-check-label" for="diasPromocion">Martes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="diasPromocion" id="diasPromocion" value="miercoles">
                    <label class="form-check-label" for="diasPromocion">Miercoles</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="diasPromocion" id="diasPromocion" value="jueves">
                    <label class="form-check-label" for="diasPromocion">Jueves</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="diasPromocion" id="diasPromocion" value="viernes">
                    <label class="form-check-label" for="diasPromocion">Viernes</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="diasPromocion" id="diasPromocion" value="sabado">
                    <label class="form-check-label" for="diasPromocion">Sabado</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="diasPromocion" id="diasPromocion" value="domingo">
                    <label class="form-check-label" for="diasPromocion">Domingo</label>
                </div>
            </div>
            <h3>Texto descriptivo de la oferta</h3>
            <div class="form group">
                <textarea name="descripcionPromocion" id="descripcionPromocion"></textarea>
            </div>
            <h3>Categoria del cliente</h3>
            <div class="container">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="tipoClientePromocion" id="tipoClientePromocion" value="inicial">
                    <label class="form-check-label" for="tipoClientePromocion">Inicial</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="tipoClientePromocion" id="tipoClientePromocion" value="medium">
                    <label class="form-check-label" for="tipoClientePromocion">Medium</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="checkbox" name="tipoClientePromocion" id="tipoClientePromocion" value="premium">
                    <label class="form-check-label" for="tipoClientePromocion">Premium</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mb-2">Confirmar</button>
        </form>

    </div>
</body>
</html>

<?php generateFooter(); ?>