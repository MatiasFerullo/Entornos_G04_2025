<?php
    require 'Header.php';
    generateHeader('inicioSesion', $arbolSitio);
    require 'conexion.php';
?>  
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>  
    <div class="login-wrapper">
        <div class="login-container">
            <div class="login-header">
                <h2>Bienvenido!</h2>
            </div>

            <form id="loginForm" method="POST" action="">
                <div class="form-floating">
                    <input type="email" class="form-control" name="email" id="email" placeholder="" required>
                    <label for="email">Email</label>
                </div>

                <div class="form-floating">
                    <input type="password" class="form-control" name="password" id="password" placeholder="" required>
                    <label for="password">Clave</label>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <div class="forgot-password">
                        <a href="#" id="forgotPassword">Olvidó su clave?</a>
                    </div>
                </div>

                <button type="submit" name="action" value="inicio" class="btn btn-login">Iniciar Sesión</button>
                <button type="submit" name="action" value="registro" class="btn btn-login">Registrarse</button>
            </form>
        </div>
</body>
<?php
//Captura datos desde el Form anterior
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
    $nomUsuario = $_POST['email'];
    $clave = $_POST['password'];
    $action = $_POST['action'];

    if ($action == 'registro') {
        $vSql = "SELECT Count(nombreUsuario) as canti FROM usuarios WHERE nombreUsuario='$nomUsuario'";
        $Resultado = mysqli_query($link, $vSql) or die (mysqli_error($link));;
        $CantUsuarios = mysqli_fetch_assoc($Resultado);
        
        if ($CantUsuarios ['canti']!=0){
            echo ("El Usuario ya Existe<br>");
        }
        else {
            $vSql = "INSERT INTO usuarios (nombreUsuario, claveUsuario, tipoUsuario, catCliente)
            values ('$nomUsuario','$clave', 'Cliente', 'Inicial')";
            mysqli_query($link, $vSql) or die (mysqli_error($link));
            echo("El Usuario fue Registrado. Recibirá un mail de confirmación.<br>");
            mysqli_free_result($vResultado);
        }
        mysqli_close($link);
    }
}
?>
</html>