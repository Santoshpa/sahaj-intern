<?php

class ConnectionModel {
  
    function __construct() {
        
        $ServerName = 'localhost';
        $DbName = 'sahajpasal';
        $DbUserName = 'root';
        $DbPassword = '';

        $this->connect($ServerName, $DbName, $DbUserName, $DbPassword);
    }
  
    function connect($ServerName, $DbName, $DbUserName, $DbPassword) {

        $con = mysqli_connect($ServerName, $DbUserName, $DbPassword, $DbName);

        return $con;

    }

}

