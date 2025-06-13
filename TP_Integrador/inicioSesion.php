<?php
    require 'Header.php';
    generateHeader('inicioSesion', $arbolSitio);
    require 'Footer.php';
    require 'busquedaSQL.php';
    require 'conexion.php';
    require 'mandarMail.php';

    $alertMessage = '';
    $alertType = '';

    //Captura datos desde el Form anterior
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
        $nomUsuario = $_POST['email'];
        $clave = $_POST['password'];
        $action = $_POST['action'];

        if ($action == 'registro') {
            $CantUsuarios = busquedaSQL("SELECT Count(nombreUsuario) as canti FROM usuarios WHERE nombreUsuario='$nomUsuario'");
            
            if ($CantUsuarios ['canti']!=0){
                $alertMessage = "El Usuario ya Existe";
                $alertType = "danger";
            }
            else {
                $vSql = "INSERT INTO usuarios (nombreUsuario, claveUsuario, tipoUsuario, catCliente)
                values ('$nomUsuario','$clave', 'Cliente', 'Inicial')";
                mysqli_query($link, $vSql) or die (mysqli_error($link));
                session_start();
                $_SESSION['usuario'] = $nomUsuario;
                $_SESSION['tipoUsuario'] = 'Cliente';
                $_SESSION['catCliente'] = 'Inicial';
                mandarMail('Registro Exitoso', 'No responder.', $nomUsuario);
                header("Location: menuCliente.php");
                exit();
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
                    exit();
                } else if ($_SESSION['tipoUsuario'] == 'Dueño'){
                    header("Location: menuDueno.php");
                    exit();
                } else if ($_SESSION['tipoUsuario'] == 'Admin'){
                    header("Location: menuAdmin.php");
                    exit();
                }    
            }
            else {
                $alertMessage = "El Usuario o la Clave son Incorrectos. Considere Registrarse.";
                $alertType = "danger";
            }
            mysqli_close($link);
        }
    }
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
    <?php if ($alertMessage): ?>
        <div class="alert alert-<?php echo $alertType; ?> alert-dismissible fade show" role="alert" style="margin: 0; border-radius: 0;">
            <?php echo $alertMessage; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
        <div class="login-container centered-div">
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
        <?php generateFooter(); ?>
</body>
</html>