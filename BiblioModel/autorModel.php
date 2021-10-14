<?php


class AutorModel {


    private $db; 
    
    
    function __construct(){
       $this-> db = new PDO ('mysql:host=localhost;'.'dbname=db_biblioteca;charset=utf8', 'root', '');

    }

    function getAutor(){
        $sentencia = $this -> db-> prepare("SELECT * FROM autor");
        $sentencia -> execute();
        $autores = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $autores;
       
    }
    
     
    function get_Autor($id){
        $sentencia = $this -> db-> prepare("SELECT * FROM autor WHERE idAutor=?");
        $sentencia -> execute(array($id));
        $autor = $sentencia->fetch(PDO::FETCH_OBJ);
        return $autor;
       
    }
    
    function insertAutor($nombre,$apellido,$nacionalidad){
        $sentencia = $this -> db -> prepare("INSERT INTO autor (nombre,apellido,nacionalidad) VALUES(?,?,?)");
        $sentencia -> execute(array($nombre,$apellido,$nacionalidad));
    }

  
    function deleteAutor($id){
        $sentencia = $this -> db->prepare("DELETE FROM autor WHERE idAutor=?");
        $sentencia->execute(array($id));
    }

     function updateAutor($idAutor,$nombre,$apellido, $nacionalidad){
        $sentencia = $this->db->prepare("UPDATE autor SET nombre=?,apellido=?,nacionalidad=? WHERE idAutor=?");
        $sentencia->execute(array($nombre,$apellido, $nacionalidad, $idAutor));
    } 
}
