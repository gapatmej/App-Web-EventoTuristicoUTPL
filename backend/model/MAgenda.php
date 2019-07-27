<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MAgenda
 *
 * @author agperalt
 */
class MAgenda extends Base{
    private $tabla;
    
    public function __construct(){
        $this->tabla="agenda";
        parent::__construct($this->tabla );
    }
    
}
