<?php

class MInscripcion extends Base {
    private $tabla;
    
    public function __construct(){
        $this->tabla="inscripcion";
        parent::__construct($this->tabla );
    }
    
    public function crearInscripcion($arrayDatos){
        $query = "INSERT INTO $this->tabla (id_usuario, id_curso, valor_inscripcion, valor_curso, valor_total) "
                . "values (?,?,?,?,?)";

        if (!($sentencia = $this->conn->prepare($query))) {
            $arrRespuesta["codError"] = $this->conn->errno;
            $arrRespuesta["msjError"] = $this->conn->error;
            return $arrRespuesta;
        }
        
        $objCurso = new MCurso();   
        $curso = $objCurso->getById("i", "id_curso", $arrayDatos["dropCurso"])[0];
        
        $costoMatricula = 50;
        $valorTotal = $costoMatricula+$curso["costo_curso"];

        if (!$sentencia->bind_param("siiii", 
                                    $_SESSION["user"], 
                                    $arrayDatos["dropCurso"], 
                                    $costoMatricula, 
                                    $curso["costo_curso"],
                                    $valorTotal
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
    
    public function actualizarInscripcion($arrayDatos){
        $query = "UPDATE $this->tabla SET id_curso = ?, valor_inscripcion = ?, valor_curso = ?, valor_total =? "
                . " WHERE id_inscripcion = ?";

        if (!($sentencia = $this->conn->prepare($query))) {
            $arrRespuesta["codError"] = $this->conn->errno;
            $arrRespuesta["msjError"] = $this->conn->error;
            return $arrRespuesta;
        }
        
        $objCurso = new MCurso();   
        $curso = $objCurso->getById("i", "id_curso", $arrayDatos["dropCurso"])[0];
        
        $costoMatricula = 50;
        $valorTotal = $costoMatricula+$curso["costo_curso"];

        if (!$sentencia->bind_param("iiiii", 
                                    $arrayDatos["dropCurso"], 
                                    $costoMatricula, 
                                    $curso["costo_curso"],
                                    $valorTotal,
                                    $arrayDatos["txtInscripcion"]
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
