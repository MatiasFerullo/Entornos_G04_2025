<?php
    require 'Header.php';
    generateHeader('inicioSesion', $arbolSitio);
    require 'busquedaSQL.php';
    require 'conexion.php';
    require 'mandarMail.php'
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
        $CantUsuarios = busquedaSQL("SELECT Count(nombreUsuario) as canti FROM usuarios WHERE nombreUsuario='$nomUsuario'");
        
        if ($CantUsuarios ['canti']!=0){
            echo ("El Usuario ya Existe<br>");
        }
        else {
            $vSql = "INSERT INTO usuarios (nombreUsuario, claveUsuario, tipoUsuario, catCliente)
            values ('$nomUsuario','$clave', 'Cliente', 'Inicial')";
            mysqli_query($link, $vSql) or die (mysqli_error($link));
            $_SESSION['usuario'] = $nomUsuario;
            $_SESSION['tipoUsuario'] = 'Cliente';
            $_SESSION['catCliente'] = 'Inicial';
            mandarMail('Registro Exitoso', 'No responder.', $nomUsuario);
            header("Location: menuCliente.php");

        }
        mysqli_close($link);
    }

    if ($action == 'inicio') {
        $CantUsuarios = busquedaSQL("SELECT Count(nombreUsuario) as canti FROM usuarios WHERE nombreUsuario='$nomUsuario' AND claveUsuario='$clave'");
        if ($CantUsuarios ['canti']!=0){
            $TipoUsuario = busquedaSQL("SELECT tipoUsuario FROM usuarios WHERE nombreUsuario='$nomUsuario' AND claveUsuario='$clave'");
            session_start();
            $_SESSION['usuario'] = $nomUsuario;
            $_SESSION['tipoUsuario'] = $TipoUsuario['tipoUsuario'];
            if($_SESSION['tipoUsuario'] == 'Cliente') {                
                $catCliente = busquedaSQL("SELECT catCliente FROM usuarios WHERE nombreUsuario='$nomUsuario' AND claveUsuario='$clave'");
                $_SESSION['catCliente'] = $catCliente['catCliente'];
                header("Location: menuCliente.php");
            } else if ($_SESSION['tipoUsuario'] == 'Dueño'){
                header("Location: menuDueno.php");
            } else if ($_SESSION['tipoUsuario'] == 'Admin'){
                header("Location: menuAdmin.php");
            }    
        }
        else {
            echo ("El Usuario o la Clave son Incorrectos. Considere Registrarse. <br>");
        }
        mysqli_close($link);
    }
}
?>
</html>