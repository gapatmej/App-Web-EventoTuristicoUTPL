<?php
require BASE_CONEXION;

class MNoticia extends Base {
    
    private $tabla;
    
    public function __construct(){
        $this->tabla="noticias";
        parent::__construct($this->tabla );
    }
    
    public function consultarNoticias(){
       return $this->getAll();
    }
}
