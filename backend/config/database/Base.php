<?php

require CONEXION;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Base
 *
 * @author agperalt
 */
class Base extends Conexion {

    private $tabla;
    public $conn;

    public function __construct($tabla) {
        //require_once CONFIGURACIONES;
        $this->tabla = (string) $tabla;
        $this->conn = Conexion::conectar();
    }

    public function getConn() {
        return $this->conn;
    }

    public function getAll() {
        $rows = array();
        $query = "SELECT * FROM $this->tabla ";

        if ($result = $this->conn->query($query)) {
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $rows[] = $row;
            }
            return $rows;
        }
        return null;
    }

    public function getById($tipoDato, $idCampo, $id) {
        $rows = array();
        
        $query = "SELECT * FROM $this->tabla "
                . " WHERE $idCampo = ? ";

        if (!($sentencia = $this->conn->prepare($query))) {

            return null;
        }

        if (!$sentencia->bind_param("$tipoDato", $id)) {

            return null;
        }

        if (!$sentencia->execute()) {

            return null;
        }

        $respuesta = $sentencia->get_result();
                
        while ($row = $respuesta->fetch_array(MYSQLI_ASSOC)) {
               $rows[] = $row;
            }
        return $rows;
    }
    
    public function getColumnById($columna, $tipoDato, $idCampo, $id) {
        $query = "SELECT $columna FROM $this->tabla "
                . " WHERE $idCampo = ?";

        if (!($sentencia = $this->conn->prepare($query))) {

            return null;
        }

        if (!$sentencia->bind_param("$tipoDato", $id)) {

            return null;
        }

        if (!$sentencia->execute()) {

            return null;
        }

        $respuesta = $sentencia->get_result();
                
        while ($row = $respuesta->fetch_array(MYSQLI_ASSOC)) {
                $rows[] = $row;
            }

        return $rows;
    }

    public function getBy($column, $value) {
        $query = $this->$conn->query("SELECT * FROM $this->$tabla WHERE $column='$value'");

        while ($row = $query->fetch_object()) {
            $resultSet[] = $row;
        }

        return $resultSet;
    }

    public function deleteById($tipoDato, $column, $id) {
        
        $query = "DELETE FROM $this->tabla "
                . " WHERE $column = ?";
        
        if (!($sentencia = $this->conn->prepare($query))) {
            return false;
        }
        
        if (!$sentencia->bind_param("$tipoDato", $id)) {
            return false;
        }
        
        if (!$sentencia->execute()) {
            return false;
        }

        return true;
    }

    public function deleteBy($column, $value) {
        $query = $this->db->query("DELETE FROM $this->$tabla WHERE $column='$value'");
        return $query;
    }

}
