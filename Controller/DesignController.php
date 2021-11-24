<?php

class DesignController{
  
    function __construct() {

    }
  
    function loginDesign() {

        $data = include('./view/header');
        $data .= include('./view/auth/login');
    
        return $data;
    }

    function navDesign(){

        $data = include('./view/header.php');
        return $data;
    }

    function registerDesign(){
        
        $data = include('./view/auth/register.php');
    
        return $data;
    }

    function registerForm(){
        
        $design = include('./view/auth/registerform.php');
        return $design; 
    }

}
