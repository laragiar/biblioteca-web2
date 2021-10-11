<?php

class UserModel{    

    private $db;

    function __construct()
    {
       $this-> db = new PDO ('mysql:host=localhost;'
        .'dbname=db_biblioteca;charset=utf8'
        , 'root', '');

    }



   function registrarse($email,$contraseña){
        $sentencia = $this -> db -> prepare("INSERT INTO users(email,contraseña) VALUES(?,?)");
        $sentencia -> execute(array($email,$contraseña));
    }


   
   
function getUser($userEmail){
        $query =$this->db->prepare("SELECT * FROM users WHERE email =?");
        $query->execute([$userEmail]);
        return $query->fetch(PDO::FETCH_OBJ);
        
        
        
       
      
}
}