<?php
require BASE_CONEXION;
$scriptMensaje = null;
switch ($coincidencia["opcion"]) {
    case "ENVIAR":
        
        require MODEL.'MContacto.php';

        $objContacto= new MContacto();
        $respuesta = $objContacto->insertarContacto($_POST); 

        $titulo = "Envio de mensaje";
        if ($respuesta["codError"] == 0) {
            $mensaje = "!El mensaje se ha enviado correctamente!";
        } else {
            $mensaje = "!Ocurrio un error en el envio del mensaje. Intenta mas tarde!";
            echo $respuesta["msjError"];
        }

        $scriptMensaje = "<script>"
                . "$('#idTitulo').text('" . $titulo . "');"
                . "$('#idMensaje').text('" . $mensaje . "');"
                . "$('#myModal').modal('show') ;</script>";
        break;
    default:
        break;
}

include VIEW . 'vContacto.php';

echo ($scriptMensaje != null || $scriptMensaje != "")?$scriptMensaje:"";

