<?php

   require UTILITARIOS;
   if(Utilitarios::verificarSesion() && $coincidencia["opcion"] != "CLOSE"){
       header('Location: '.APP_URL."adminUsuario/show");
       exit;
   }

   $scriptMensaje = null;
   switch ($coincidencia["opcion"]){
        case "CREATE":
            require MODEL.'MUsuario.php';

            $objUsuario = new MUsuario ();
            //print_r($_post);
            $respuesta = $objUsuario->crearUsuario($_POST);
            
            $titulo = "Creacion de usuario";
            if($respuesta["codError"] == 0){
                $mensaje = "!El Usuario se ha creado correctamente!";
            }
            else{
                $mensaje = "!Ocurrio un error en la creacion del usuario. Intenta mas tarde!";
                echo $respuesta["msjError"];
            }
            
            $scriptMensaje ="<script>"
                        . "$('#idTitulo').text('".$titulo."');"
                        . "$('#idMensaje').text('".$mensaje."');"
                        . "$('#myModal').modal('show') ;</script>";
            break;
        case "ENTER":
            
            $respuesta = verificarCredenciales($_POST);
            //print_r($respuesta);
            $titulo = "Ingreso al sistema";
            if($respuesta != 0 && $respuesta != null){
                $_SESSION["user"] = $respuesta["user"];
                $_SESSION["cedula_usuario"] = $respuesta["cedula_usuario"];
                $_SESSION["nombre_usuario"] = $respuesta["nombre_usuario"];
                $_SESSION["apellido_usuario"] = $respuesta["apellido_usuario"];
                $_SESSION["nacionalidad_usuario"] = $respuesta["nacionalidad_usuario"];
                $_SESSION["direccion_usuario"] = $respuesta["direccion_usuario"];
                $_SESSION["correo_usuario"] = $respuesta["correo_usuario"];
                header('Location: '.APP_URL."adminUsuario/show");
                exit;
            }
            else{
                $mensaje = "!Sus credenciales no son válidas!";
                $scriptMensaje = "<script>"
                . "$('#idTitulo').text('".$titulo."');"
                . "$('#idMensaje').text('".$mensaje."');"
                . "$('#myModal').modal('show');</script>";
            }
            
            break;
        case "CLOSE":
            Utilitarios::cerrarSesion();
            break;
        default:
            break;
    }

   function verificarCredenciales($arrCedenciales){
       
        require MODEL.'MUsuario.php';
            
        $objUsuario = new MUsuario();
        return $objUsuario->ConsultarUsuarioPorCredencial($arrCedenciales); 
    } 

    include VIEW.'vLogin.php';
    
    echo ($scriptMensaje != null && $scriptMensaje != "")?$scriptMensaje:"";
?>