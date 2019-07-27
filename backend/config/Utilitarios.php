<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utilitarios
 *
 * @author Andres
 */
class Utilitarios {
    
    public static function verificarSesion(){
        if(array_key_exists("user",$_SESSION ) ){
            if ($_SESSION["user"] != null){
                return true;
            } 
        }
        return false;
    }
    
    public static function cerrarSesion(){
        if (session_destroy() ){
            return true;
        } 
        else{
            return false;
        }
    }
}
