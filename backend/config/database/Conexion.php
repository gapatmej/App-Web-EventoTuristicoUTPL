<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Conexion
 *
 * @author Andres
 */
class Conexion {
    
    public static function conectar(){
        
        require_once CONFIG;
        
        try{
            mysqli_report(MYSQLI_REPORT_STRICT);
            
            if(DRIVER =="mysql" || DRIVER ==null){
                $con=new mysqli(HOST, USER, PASS, DATABASE);
                $con->query("SET NAMES '".CHARSET."'");
            }
        
            return $con;
            
        } catch (Exception $e) {
            die("Error". $e->getMessage());
            echo 'Excepción conn BDD line : ',  $e->getLine(), "\n";
            return null;
        }
    }
}
