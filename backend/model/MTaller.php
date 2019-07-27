<?php

class MTaller extends Base{
    
    private $tabla;
    
    public function __construct(){
        $this->tabla="talleres";
        parent::__construct($this->tabla );
    }
    
}
