<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MCurso
 *
 * @author Andres
 */
class MCurso extends Base{
    
    private $tabla;
    
    public function __construct(){
        $this->tabla="cursos";
        parent::__construct($this->tabla );
    }
    
}
