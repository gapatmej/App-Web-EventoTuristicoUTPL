<?php

require BASE_CONEXION;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MUsuario
 *
 * @author Andres
 */
class MUsuario extends Base {

    private $tabla;

    public function __construct() {
        $this->tabla = "usuarios";
        parent::__construct($this->tabla);
    }

    public function consultarUsuarios() {
        return $this->getAll();
    }
    
    public function consultarUsuarioPorCredencial($arrayDatos) {
        $query = "SELECT * FROM $this->tabla "
                . " WHERE user = ? and password =?";
        
        if (!($sentencia = $this->conn->prepare($query))) {
            
            return null;
        }

        if (!$sentencia->bind_param("ss", 
                                    $arrayDatos["usuario"], 
                                    $arrayDatos["contrasenia"] 
                                    )) {
            
            return null;
        }
        
        if (!$sentencia->execute()) {
            
            return null;
        }
      
        $respuesta = $sentencia->get_result();
        $row = $respuesta->fetch_assoc();
        return $row;
    }

    public function crearUsuario($arrayDatos) {

        $query = "INSERT INTO $this->tabla (user,password,cedula_usuario, nombre_usuario, apellido_usuario,nacionalidad_usuario,direccion_usuario,correo_usuario) "
                . "values (?,?,?,?,?,?,?,?)";

        if (!($sentencia = $this->conn->prepare($query))) {
            $arrRespuesta["codError"] = $this->conn->errno;
            $arrRespuesta["msjError"] = $this->conn->error;
            return $arrRespuesta;
        }

        if (!$sentencia->bind_param("ssisssss", 
                                    $arrayDatos["usuario"], 
                                    $arrayDatos["contrasenia"], 
                                    $arrayDatos["cedula"], 
                                    $arrayDatos["nombres"],
                                    $arrayDatos["apellidos"],
                                    $arrayDatos["nacionalidad"],
                                    $arrayDatos["direccion"],
                                    $arrayDatos["correo"])) {
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
