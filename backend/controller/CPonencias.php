<?php
    require BASE_CONEXION;
    require MODEL.'MPonenciaExpositor.php';

    $objPonenciaExpositor = new MPonenciaExpositor();
    $rsPonencias = $objPonenciaExpositor->consultarPonencias();

    $i=0;
    foreach ($rsPonencias as $ponencia){
        $rsLista[$ponencia["id_ponencia"]]["id_ponencia"] = $ponencia["id_ponencia"];
        $rsLista[$ponencia["id_ponencia"]]["nombre_ponencia"] = $ponencia["nombre_ponencia"];
        $rsLista[$ponencia["id_ponencia"]]["lugar_ponencia"] = $ponencia["lugar_ponencia"];
        $rsLista[$ponencia["id_ponencia"]]["fecha_ponencia"] = $ponencia["fecha_ponencia"];
        $rsLista[$ponencia["id_ponencia"]]["expositores"][] = array("nombre_expositor" => $ponencia["nombre_expositor"], "detalle_expositor" => $ponencia["detalle_expositor"], "nombre_imagen" => $ponencia["nombre_imagen"]);
       
    }
   // print_r($rsLista);
    
    include VIEW.'VPonencias.php';
