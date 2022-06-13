
<?php
if (isset($_GET['validar']) && $_GET['validar'] !== null) {
    $validar = $_GET['validar'];
} else {
    $validar = -1;
}
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="/imagenes/android-chrome-192x192.svg" />
        <!-- CSS only -->
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
         <link href="estilos/inicios.css" rel="stylesheet" type="text/css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="../JS/inicio.js"></script>
        <!------ Include the above in your HEAD tag ---------->
    </head>
    <body>
         <?php
        if ($validar == 1) {
            echo '<script>
        alert("El usuario o la contraseña son incorrectos intentolo de nuevo");
        </script>';
        } elseif ($validar == 2) {
            echo '<script>
        alert("El usuario ya exite, pruebe con otro nombre");
        </script>';
        }elseif ($validar == 3) {
            echo '<script>
        alert("No se pudo crear el usuario");
        </script>';
        }
        ?>
    <div class="container">
        <div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-6">
                                <center>
                                <a href="#" class="active" id="login-form-link">Login</a>
                                </center>
                            </div>
                            <div class="col-xs-6">
                                 <center>
                                <a href="#" id="register-form-link">Register</a>
                                 </center>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="login.php" method="post" role="form" style="display: block;">
                                    <div class="form-group">
                                        <input type="text" name="usuario" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="contrasena" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
                                    </div>
                                    <div class="form-group text-center">
                                        <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                        <label for="remember"> Remember Me</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <form id="register-form" action="realizar_registro.php" method="post" role="form" style="display: none;">
                                    <div class="form-group">
                                        <input type="text" name="usuario" id="username" tabindex="1" class="form-control" placeholder="Usuario" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="Correo" id="email" tabindex="1" class="form-control" placeholder="Correo Electrinico" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="contrasena" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <center>
                                                <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Registrarse">
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>