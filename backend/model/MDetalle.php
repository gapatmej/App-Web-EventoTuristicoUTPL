<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MDetalle
 *
 * @author Andres
 */
class MDetalle extends Base {
    private $tabla;
    
    public function __construct(){
        $this->tabla="detalle";
        parent::__construct($this->tabla );
    }
    
    public function insertarDetalle($arrayDatos){
        $query = "INSERT INTO $this->tabla (id_inscripcion, id_taller, valor_unitario, taller_descripcion) "
                . "values (?,?,?,?)";

        if (!($sentencia = $this->conn->prepare($query))) {
            $arrRespuesta["codError"] = $this->conn->errno;
            $arrRespuesta["msjError"] = $this->conn->error;
            return $arrRespuesta;
        }
        
        $objTaller = new MTaller();   
        $taller = $objTaller->getById("i", "id_taller", $arrayDatos["dropTaller"])[0];

        if (!$sentencia->bind_param("iiis", 
                                    $arrayDatos["txtInscripcion"], 
                                    $arrayDatos["dropTaller"], 
                                    $taller["costo_taller"], 
                                    $taller["nombre_taller"]
                                    )) {
            $arrRespuesta["codError"] = $this->conn->errno;
            $arrRespuesta["msjError"] = $this->conn->error;
            return $arrRespuesta;
        }
        
        if (!$sentencia->execute()) {
            $arrRespuesta["codError"] = $this->conn->errno;
            $arrRespuesta["msjError"] = $this->conn->error;
            return $arrRespuesta;
        }
            
        $arrRespuesta["codError"] = 0;
        $arrRespuesta["codError"] = "OK";
        
        return $arrRespuesta;
    }
}

