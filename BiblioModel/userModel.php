<?php

class UserModel{    

    private $db;

    function __construct(){
       $this-> db = new PDO ('mysql:host=localhost;'.'dbname=db_biblioteca;charset=utf8', 'root', '');
    }

   function registrarse($email,$password){
        $sentencia = $this -> db -> prepare("INSERT INTO users(email,password) VALUES(?,?)");
        $sentencia -> execute(array($email,$password));
    }
   
    function getUser($userEmail){
        $query =$this->db->prepare("SELECT * FROM users WHERE email =?");
        $query->execute([$userEmail]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    
}