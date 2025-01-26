<?php
    function inbd(){
        $user = "user";
        $pass = "1234";
        $conex = new PDO("mysql:dbname=mail_postales;host=127.0.0.1",$user,$pass);    
        $conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conex;
    }
    function outbd($stmt){
        $stmt->closeCursor();
        $stmt = null;
    }      
    function recuperarEmails(){
        $conex = inbd();
        $stmt = $conex->prepare("SELECT email FROM clientes");
        return $stmt;
    }
?>