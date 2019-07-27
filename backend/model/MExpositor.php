<?php
class MExpositor extends Base {
    
    private $tabla;
    
    public function __construct(){
        $this->tabla="expositores";
        parent::__construct($this->tabla );
    }
    
}
