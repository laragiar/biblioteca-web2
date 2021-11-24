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
    
    function getUsers(){
        $sentencia = $this -> db-> prepare("SELECT * FROM users");
        $sentencia -> execute();
        $users = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $users;
       
    }
    
    function getUserById($id){
        $sentencia = $this -> db-> prepare("SELECT * FROM users WHERE id=?");
        $sentencia -> execute(array($id));
        $user = $sentencia->fetch(PDO::FETCH_OBJ);
        return $user;
       
    }

    function getUser($userEmail){
        $sentencia =$this->db->prepare("SELECT * FROM users WHERE email=?");
        $sentencia->execute(array($userEmail));
        return $sentencia->fetch(PDO::FETCH_OBJ);
    }
    
    function getUserByRol($rol){
        $sentencia =$this->db->prepare("SELECT id FROM users WHERE rol=?");
        $sentencia->execute(array($rol));
        $users = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $users;
    }

    function deleteUser($id){
        $sentencia = $this -> db->prepare("DELETE FROM users WHERE id=?");
        $sentencia->execute(array($id));
    }

    function updateUser($id,$rol){
        $sentencia = $this->db->prepare("UPDATE users SET rol=? WHERE id=?");
        $sentencia->execute(array($rol,$id));
    } 
}