<?php

class LibroModel{

    private $db; 
    
    
    function __construct(){
       $this-> db = new PDO ('mysql:host=localhost;'.'dbname=db_biblioteca;charset=utf8', 'root', '');

    }


    function getBiblio(){  
        $sentencia = $this -> db-> prepare("SELECT libros.*, autor.nombre AS nombreA, autor.apellido AS apellidoA FROM libros JOIN autor ON libros.idAutor = autor.idAutor");
        $sentencia -> execute();
        $libros = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $libros;
       
    }
    
    function getLibro(){
        $sentencia = $this -> db-> prepare("SELECT * FROM libros");
        $sentencia -> execute();
        $libros = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $libros;
       
    }
    
    function get_Libro($id){             
        $sentencia = $this -> db->prepare("SELECT libros.*, autor.nombre AS nombreA, autor.apellido AS apellidoA FROM libros JOIN autor ON libros.idAutor = autor.idAutor WHERE idLibro=?");
        $sentencia -> execute(array($id));
        $libro = $sentencia->fetch(PDO::FETCH_OBJ);
        return $libro;

    }
    
    function searchTitulo($nombre){
        $sentencia = $this->db->prepare("SELECT * FROM libros WHERE nombre=? LIKE '%$nombre%' ");
        $sentencia->execute(array($nombre));
        $libros = $sentencia->fetch(PDO::FETCH_OBJ);
        return $libros;
    }
    
    function deleteLibro($id){
        $sentencia = $this -> db->prepare("DELETE FROM libros WHERE idLibro=?");
        $sentencia->execute(array($id));

    }

    function getLibrosByAutor($id){             
        $sentencia = $this -> db->prepare("SELECT * FROM libros WHERE idAutor= ?");
        $sentencia -> execute(array($id));
        $libros = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $libros;

    }
    function insertLibro($nombre,$genero,$editorial,$descripcion,$idAutor){
        $sentencia = $this -> db -> prepare("INSERT INTO libros (nombre,genero,editorial,descripcion,idAutor) VALUES(?,?,?,?,?)");
        $sentencia -> execute(array($nombre,$genero,$editorial, $descripcion,$idAutor));
    }
     
    function updateLibro($idLibro,$nombre, $genero, $editorial, $descripcion){
        $sentencia = $this->db->prepare("UPDATE  libros SET nombre=?,genero=?,editorial=?,descripcion=? WHERE idLibro= ?");
        $sentencia->execute(array($nombre, $genero, $editorial, $descripcion,$idLibro));
    } 
}
