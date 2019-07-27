<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VContacto
 *
 * @author agperalt
 */
class MContacto extends Base{
    
     private $tabla;
    
    public function __construct(){
        $this->tabla="mensajes";
        parent::__construct($this->tabla );
    }
    
    public function insertarContacto($arrayDatos){
        $query = "INSERT INTO $this->tabla (nombre_mensaje, telefono_mensaje, email_mensaje, asunto_mensaje, descripcion_mensaje) "
                . "values (?,?,?,?,?)";

        if (!($sentencia = $this->conn->prepare($query))) {
            $arrRespuesta["codError"] = $this->conn->errno;
            $arrRespuesta["msjError"] = $this->conn->error;
            return $arrRespuesta;
        }
        
        if (!$sentencia->bind_param("sssss", 
                                    $arrayDatos["txtNombre"],  
                                    $arrayDatos["txtTelefono"], 
                                    $arrayDatos["txtEmail"], 
                                    $arrayDatos["txtAsunto"], 
                                    $arrayDatos["txtMensaje"] 
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
