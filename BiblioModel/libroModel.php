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
    
    function getLibros(){
        $sentencia = $this -> db-> prepare("SELECT * FROM libros");
        $sentencia -> execute();
        $libros = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $libros;
       
    }
    function getLibrosByLimit($pageResult, $resultsPage){
        $sentencia = $this -> db-> prepare("SELECT * FROM libros 
        LIMIT $pageResult,$resultsPage");
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
    
    function search($busqueda){
        $nombre= "%$busqueda%";
        $sentencia = $this->db->prepare("SELECT * FROM libros WHERE nombre LIKE ? ");
        $sentencia->execute(array($nombre));
        $libros = $sentencia->fetchAll(PDO::FETCH_OBJ);
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

    function insertLibro($nombre,$genero,$editorial,$descripcion,$idAutor,$img=null){
        $pathImg=null;
        if($img){
            $pathImg = $this->uploadImage($img); 
            $sentencia = $this -> db -> prepare("INSERT INTO libros (nombre,genero,editorial,descripcion,idAutor,img) VALUES(?,?,?,?,?,?)");
            $sentencia -> execute(array($nombre,$genero,$editorial, $descripcion,$idAutor,$pathImg));
        
        }
    }
     
    function updateLibro($idLibro,$nombre, $genero, $editorial, $descripcion){
        $sentencia = $this->db->prepare("UPDATE  libros SET nombre=?,genero=?,editorial=?,descripcion=? WHERE idLibro= ?");
        $sentencia->execute(array($nombre, $genero, $editorial, $descripcion,$idLibro));
    } 
    
    function getComentarios(){
        $sentencia = $this -> db-> prepare("SELECT * FROM comentarios");
        $sentencia -> execute();
        $libros = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $libros;
    }
    

    function deleteImagen($id, $path = null){
        if (file_exists($path)) {
            unlink($path);
        }
        $sentencia = $this->db->prepare("UPDATE libros SET img=null WHERE idLibro=?");
        $sentencia->execute(array($id));
    }

    private function uploadImage($img){
        $target= 'img/libro/'. uniqid() . '.' . strtolower(pathinfo($img['name'], PATHINFO_EXTENSION));
        move_uploaded_file($img['tmp_name'],$target); 
        return $target;
    }
}
