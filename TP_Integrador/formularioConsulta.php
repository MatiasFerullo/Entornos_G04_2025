<?php
    require 'Header.php';
    require 'Footer.php';
    require 'busquedaSQL.php';
    require 'conexion.php';
    require 'mandarMail.php';
?>  
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }       
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-size: 24px;
        }       
    </style>
</head>
<body>
    <?php generateHeader('formularioConsulta', $arbolSitio); ?>
    
    <div class="main-content">
        <div class="form-container">
            <h1>Consulta</h1>
            <form method="POST" action="">
                <div class="form-floating">
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="" required>
                    <label for="nombre">Nombre y Apellido</label>                    
                </div>
                
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="email" placeholder="" required>
                    <label for="email">Email</label>
                </div>
                
                <div class="form-floating">                   
                    <textarea id="consulta" class="form-control" name="consulta" id="consulta" placeholder="" required></textarea>                   
                    <label for="consulta">Consulta:</label>        
                </div>           
                
                <div class="button-container">
                    <button type="submit" class="btn-login">Enviar</button>
                </div>
            </form>
        </div>
    </div>
    
    <?php generateFooter(); ?>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>