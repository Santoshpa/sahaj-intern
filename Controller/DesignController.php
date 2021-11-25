<?php

class DesignController{
  
    function __construct() {

    }
  
    function loginDesign() {

        $data .= include('./view/auth/login.php');
    
        return $data;
    }
    function loginForm(){
        
        $design = include('./view/auth/loginform.php');
        return $design;
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
