<!DOCTYPE html>
<html lang="en">

    <head>

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo ESTILOS ?>family.css">
        <link rel="stylesheet" href="<?php echo ESTILOS ?>form-elements.css">
        <link rel="stylesheet" href="<?php echo ESTILOS ?>styleLogin.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body >
        <div class="container" style="padding-top: 150px">
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>¡Inicia sesión en tu cuenta!</h3>
                                <p>Ingresa tu usuario y contraseña para loguearte :</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="<?php echo APP_URL ?>login/enter" method="post" class="login-form">
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">Usuario</label>
                                    <input type="text" name="usuario" placeholder="Usuario..." class="form-username form-control" id="form-username">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Contraseña</label>
                                    <input type="password" name="contrasenia" placeholder="Contraseña..." class="form-password form-control" id="form-password">
                                </div>
                                <button type="submit" class="btn">Iniciar Sesión</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-sm-1 middle-border"></div>
                <div class="col-sm-1"></div>

                <div class="col-sm-5">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>¡Inscríbete y empieza a aprender!</h3>
                                <p>Completa tus datos personales y dale en Registrar</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" autocomplete="off" action="<?php echo APP_URL ?>login/create" method="post" class="registration-form">
                                 <div class="form-group">
                                    <label class="sr-only" for="form-first-name">Usuario</label>
                                    <input type="text" name="usuario" placeholder="Usuario..." class="form-first-name form-control" id="form-first-name">
                                </div>
                                 <div class="form-group">
                                     <label class="sr-only" for="form-password">Contraseña</label>
                                    <input type="password" name="contrasenia" placeholder="Contraseña..." class="form-password form-control" id="form-password">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">Cédula</label>
                                    <input type="text" name="cedula" placeholder="Cédula..." class="form-first-name form-control" id="form-first-name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-first-name">Nombres</label>
                                    <input type="text" name="nombres" placeholder="Nombres..." class="form-first-name form-control" id="form-first-name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-last-name">Apellidos</label>
                                    <input type="text" name="apellidos" placeholder="Apellidos..." class="form-last-name form-control" id="form-last-name">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-email">Nacionalidad</label>
                                    <input type="text" name="nacionalidad" placeholder="Nacionalidad..." class="form-email form-control" id="form-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-email">Correo</label>
                                    <input type="text" name="correo" placeholder="Correo..." class="form-email form-control" id="form-email">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-email">Dirección</label>
                                    <input type="text" name="direccion" placeholder="Dirección..." class="form-email form-control" id="form-email">
                                </div>
                                <button type="submit" class="btn">¡Regístrate!</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <?php include PUBLIC_DIR . 'modalMensaje.php'; ?>

        <script src="<?php echo JAVASCRIPT ?>jquery.backstretch.min.js"></script>
        <script src="<?php echo JAVASCRIPT ?>scriptsLogin.js"></script>

    </body>

</html>