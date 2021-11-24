<?php


class CommentModel {


    private $db; 
    
    
    function __construct(){
       $this-> db = new PDO ('mysql:host=localhost;'.'dbname=db_biblioteca;charset=utf8', 'root', '');

    }

    function getComments(){
        $sentencia = $this -> db-> prepare("SELECT * FROM comentarios");
        $sentencia -> execute();
        $comentarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;
    }
    function getComment($id){
        $sentencia = $this -> db-> prepare("SELECT * FROM comentarios WHERE id=?");
        $sentencia -> execute(array($id));
        $comment = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comment; 
    }
    
    function getCommentByLibro($idLibro){
        $sentencia = $this -> db-> prepare("SELECT * FROM comentarios WHERE idLibro=?");
        $sentencia -> execute(array($idLibro));
        $comments = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comments; 
    }

    function getByPunctuation($idLibro, $score){
        $sentencia = $this->db->prepare("SELECT * FROM comentarios WHERE idLibro=? AND puntuacion=?");
        $sentencia->execute(array($idLibro,$score));           
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }
    
    function delete($idComment){
        $sentencia = $this -> db->prepare("DELETE FROM comentarios WHERE id=?");
        $sentencia->execute(array($idComment));
    }

    function insert($descripcion,$puntuacion,$idUser,$idLibro){
        $sentencia = $this -> db -> prepare("INSERT INTO comentarios (descripcion,puntuacion,idUser,idLibro) VALUES(?,?,?,?)");
        $sentencia -> execute(array($descripcion,$puntuacion,$idUser,$idLibro));
    }
}