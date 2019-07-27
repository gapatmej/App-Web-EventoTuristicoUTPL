<?php
require UTILITARIOS;
require BASE_CONEXION;
require MODEL.'MCurso.php';
require MODEL.'MTaller.php';
require MODEL.'MInscripcion.php';
require MODEL.'MDetalle.php';

if(!UTILITARIOS::verificarSesion()){
    header('Location: '.APP_URL."login/show");
    exit;
}  

$objCurso = new MCurso ();
$objTaller = new MTaller ();
$rsCursos = $objCurso->getAll();  
$rsTalleres = $objTaller->getAll();
$rsDetalle = array();
$total = 0.00;

switch ($coincidencia["opcion"]) {
    case "CREARINSCRIPCION":
        $objInscripcion = new MInscripcion();
        $objInscripcion->crearInscripcion($_POST);
        break;

    case "ACTUALIZARINSCRIPCION":
        //echo "actualir";
        $objInscripcion = new MInscripcion();
        $objInscripcion->actualizarInscripcion($_POST);
        break;
    case "ELIMINARDETALLE":
        $objDetalle = new MDetalle();
        $datos = generarArrayPost($coincidencia["datos"]);
        $objDetalle->deleteById("i", "id_detalle", $datos["ID"]);
        
        break;
    case "INSERTARDETALLE":
        $objDetalle = new MDetalle();
        $objDetalle->insertarDetalle($_POST);
        break;
    
    default:
        break;
}

$objInscripcion = new MInscripcion ();
$inscripcion = $objInscripcion->getById("s","id_usuario",$_SESSION["user"]);

if(!empty($inscripcion)){
    $inscripcion = $inscripcion[0];
    $rsDetalle = generarDetalle($inscripcion);
}

include VIEW . 'VAdminUser.php';
    
function generarDetalle($inscripcion){
    global $objCurso;
    global $total;
    
    $curso = $objCurso->getById("i", "id_curso", $inscripcion["id_curso"])[0];
    
    $rsDetalle[] = array("id" => "", "descripcion" => "Inscripcion ", "cantidad" => "1", "precioUnitario" => $inscripcion["valor_inscripcion"], "precioTotal" => $inscripcion["valor_inscripcion"],"isDelete" => false);
    $rsDetalle[] = array("id" => "", "descripcion" => $curso["nombre_curso"], "cantidad" => "1", "precioUnitario" => $inscripcion["valor_curso"], "precioTotal" => $inscripcion["valor_curso"],"isDelete" => false);
    
    $objDetalle = new MDetalle();
    $detalles = $objDetalle->getById("i", "id_inscripcion", $inscripcion["id_inscripcion"]);

    $total+= (floatval($inscripcion["valor_inscripcion"])+floatval($inscripcion["valor_curso"]));
    foreach ($detalles as $detalle){
        echo $detalle["valor_unitario"];
        $total = floatval($total) + floatval($detalle["valor_unitario"]) ;
        $rsDetalle[] = array("id" => $detalle["id_detalle"], "descripcion" => $detalle["taller_descripcion"], "cantidad" => "1", "precioUnitario" => $detalle["valor_unitario"], "precioTotal" => $detalle["valor_unitario"],"isDelete" => true);
    }
    return $rsDetalle;

}

function generarArrayPost($cadenaPost){
    
    $arrayDatos = explode("&", $cadenaPost);       
    foreach($arrayDatos as $dato){
        $claveValor = explode("=", $dato);
        $diccionario[$claveValor[0]] = $claveValor[1];  
    }
    
    return $diccionario; 
}


