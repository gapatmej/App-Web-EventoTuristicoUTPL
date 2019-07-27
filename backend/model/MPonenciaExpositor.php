<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MPonencia
 *
 * @author agperalt
 */
class MPonenciaExpositor extends Base {
    
    private $tabla;
    
    public function __construct(){
        $this->tabla="ponencia_expositor";
        parent::__construct($this->tabla );
    }
    
    public function consultarPonencias(){
       $rows = array();
        $query = "SELECT p.id_ponencia, p.nombre_ponencia, p.lugar_ponencia,
                    p.fecha_ponencia, e.nombre_expositor, e.detalle_expositor, e.nombre_imagen FROM ponencia_expositor pe
                    JOIN ponencias p on p.id_ponencia = pe.id_ponencia 
                    JOIN expositores e on  e.id_expositor = pe.id_expositor";

        if ($result = $this->conn->query($query)) {
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $rows[] = $row;
            }
            return $rows;
        }
        return null;
        
    }
    //put your code here
}
